<?php

namespace App\Http\Controllers\Www;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Www\EmailRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use App\Models\Subscriber;
use Mailgun\Mailgun;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Helper;
use App;

class EmailController extends Controller
{
    public function sendEmail($data, $parameters = [])
    {
        $mailgun = Mailgun::create(config('services.mailgun.secret'), 'https://' . config('services.mailgun.endpoint'));

        $parameters = array_merge([
            'from' => config('mail.from.name') . " <" . config('mail.from.address') . ">",
            'h:Sender' => config('mail.from.name') . " <" . config('mail.from.address') . ">",
            'h:Reply-To' => config('mail.from.name') . " <" . config('mail.from.address') . ">",
            'to' => $data['email'],
            'subject' => $data['subject'],
            'html' => $data['html'],
            'text' => $data['text'],
            'o:tag' => 'www-' . $data['tag'] . '-form',
            'inline' => $data['images'],
        ], $parameters);

        $mailgun->messages()->send(config('services.mailgun.domain'), $parameters);
    }

    public function buildEmail($data)
    {
        $subject = $data['subject'];
        $teaser = $data['teaser'];
        $body = $data['body'];

        $data['images'] = [];
        array_push($data['images'], ['filePath' => public_path('img/' . config('mespil.subdomain') . '/emails/logo.png'), 'filename' => 'logo.png']);
        array_push($data['images'], ['filePath' => public_path('img/' . config('mespil.subdomain') . '/emails/logo-white.png'), 'filename' => 'logo-white.png']);
        array_push($data['images'], ['filePath' => public_path('img/' . config('mespil.subdomain') . '/emails/linkedin.png'), 'filename' => 'linkedin.png']);

        $data['html'] = $body;
        $data['text'] = $body;

        return $data;
    }

    public function createVerificationEmailBody($data)
    {
        $url = URL::temporarySignedRoute(Helper::buildRoute($data['route']), Carbon::now()->addDay(), ['email' => $data['email']]);

        $body = '
<p>' . $data['body-text'] . '</p>
<table class="action" align="center" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center">
                        <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                <a target="_blank" href="' . $url . '" style="border-radius: 3px; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16); color: #FFF; display: inline-block; text-decoration: none; -webkit-text-size-adjust: none; background-color: #bc954d; border-top: 10px solid #bc954d; border-right: 18px solid #bc954d; border-bottom: 10px solid #bc954d; border-left: 18px solid #bc954d;">' . $data['body-action'] . '</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<p>' . __('If the above link is not clickable, try copying and pasting it into the address bar of your web browser:') . '</p>
<p style="word-break: break-all;">' . $url . '</p>
<p>' . __('If you received this email by mistake, simply delete it.') . '</p>';

        return $body;
    }

    public function emailContact(EmailRequest $request)
    {
        $email = $request->input('email');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return back()->withErrors(['email' => __('Invalid email address.')])->with('resetRecaptcha', true);
        }

        $client = new Client();

        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => config('services.recaptcha.secret'),
                'remoteip' => $request->ip(),
                'response' => $request->input('g-recaptcha-response')
            ],
        ]);

        $body = json_decode($response->getBody(), true);

        if (isset($body['success']) && $body['success'] === true) {
            $data = [
                'tag' => 'email-contact',
                'email' => $email,
                'subject' => __('Mespil.ie - new message'),
                'teaser' => __('Mespil.ie - new message'),
            ];

            $parameters = [
                'h:Reply-To' => $request->input('name') . " <" . $email . ">",
                'to' => config('mail.from.name') . " <" . config('mail.from.address') . ">",
            ];

            $data['body'] = __('Area of interest') . ': ' . $request->input('area_of_interest') . '<br>' .__('Name') . ': ' . $request->input('name') . '<br>' . __('E-mail') . ': ' . $email . ($request->input('phone') ? '<br>' . __('Phone') . ': ' . $request->input('phone') : '') . '<br><br>' . nl2br($request->input('message'));
            $data = $this->buildEmail($data);
            $this->sendEmail($data, $parameters);

            if ($request->input('subscribe')) {
                $this->subscribe($email, 'subscribe-newsletter');
            }

            return back()->with('success', __('Thank you for contacting MESPIL, we value your communication. We aim to respond to you within 24 - 48 hours and look forward to speaking with you.'))->with('reset', true)->with('resetRecaptcha', true)->with('event', 'contact')->with('eventData', ['event_category' => 'Forms', 'event_action' => 'Submit', 'event_label' => 'Contact'])->with('conversion', true);
        } else {
            return back()->withErrors(__('Please, click on the checkbox “I`m not a robot”!'))->with('resetRecaptcha', true);
        }
    }

    public function emailSubscribe(EmailRequest $request)
    {
        if (!filter_var($request->input('email_subscribe'), FILTER_VALIDATE_EMAIL)) {
            return back()->withErrors(['email_subscribe' => __('Invalid email address.')]);
        }

        $data = [
            'tag' => 'email-subscribe',
            'route' => 'confirm-subscribe',
            'email' => $request->input('email_subscribe'),
            'subject' => __('Mespil.ie - confirm your subscription'),
            'teaser' => __('Mespil.ie - confirm your subscription'),
            'body-text' => __('Please confirm your subscription to the MESPIL newsletter.'),
            'body-action' => __('Yes, I would like to subscribe'),
        ];

        $data['body'] = $this->createVerificationEmailBody($data);
        $data = $this->buildEmail($data);
        $this->sendEmail($data);

        return back()->with('success', __('Thank you for subscribing. To confirm your subscription, please check your email and click the link in the email provided. We look forward to you being a subscriber.'))->with('reset', true)->with('event', 'subscribe')->with('eventData', ['event_category' => 'Forms', 'event_action' => 'Submit', 'event_label' => 'Subscribe']);
    }

    public function emailDownloadBrochure(EmailRequest $request)
    {
        if (!filter_var($request->input('email_download'), FILTER_VALIDATE_EMAIL)) {
            return back()->withErrors(['email_download' => __('Invalid email address.')]);
        }

        $subscriber = Subscriber::where('email', $request->input('email_download'))->first();
        if ($subscriber && $subscriber->is_subscribed) {
            return Redirect::to(Helper::download('mespil-for-investors', 'brochure'));
        }

        $data = [
            'tag' => 'email-download-brochure',
            'route' => 'confirm-download-brochure',
            'email' => $request->input('email_download'),
            'subject' => __('Mespil.ie - confirm your e-mail'),
            'teaser' => __('Mespil.ie - confirm your e-mail'),
            'body-text' => __('Please confirm your e-mail in order to download the MESPIL brochure for investors.'),
            'body-action' => __('Download the investors brochure'),
        ];

        $data['body'] = $this->createVerificationEmailBody($data);
        $data = $this->buildEmail($data);
        $this->sendEmail($data);

        return back()->with('success', __('Thank you. Please check your email and click the link in the email provided.'))->with('reset', true)->with('event', 'download_brochure')->with('eventData', ['event_category' => 'Forms', 'event_action' => 'Submit', 'event_label' => 'Download Brochure']);
    }

    public function emailJoinInvestors(EmailRequest $request)
    {
        if (!filter_var($request->input('email_join'), FILTER_VALIDATE_EMAIL)) {
            return back()->withErrors(['email_join' => __('Invalid email address.')]);
        }

        $data = [
            'tag' => 'email-join-investors',
            'route' => 'confirm-join-investors',
            'email' => $request->input('email_join'),
            'subject' => __('Mespil.ie - confirm your e-mail'),
            'teaser' => __('Mespil.ie - confirm your e-mail'),
            'body-text' => __('Please confirm your e-mail in order to join the MESPIL Investor Club.'),
            'body-action' => __('Join MESPIL Investor Club'),
        ];

        $data['body'] = $this->createVerificationEmailBody($data);
        $data = $this->buildEmail($data);
        $this->sendEmail($data);

        return back()->with('success', __('Thank you. Please check your email and click the link in the email provided.'))->with('reset', true)->with('event', 'join')->with('eventData', ['event_category' => 'Forms', 'event_action' => 'Submit', 'event_label' => 'Join MIC']);
    }

    public function confirmSubscribe(Request $request, $email)
    {
        $this->subscribe($email, 'subscribe-newsletter');

        return Redirect::to(Helper::route('subscribe-confirmation', [], false));
    }

    public function confirmJoinInvestors(Request $request, $email)
    {
        $this->subscribe($email, 'join-investor-club');

        return Redirect::to(Helper::route('join-investors-confirmation', [], false));
    }

    public function confirmDownloadBrochure(Request $request, $email)
    {
        $this->subscribe($email, 'download-investor-brochure');

        return Redirect::to(Helper::download('mespil-for-investors', 'brochure'));
    }

    public function subscribe($email, $source)
    {
        Subscriber::updateOrCreate([
            'email' => $email,
            'website' => 'mespil',
            'source' => $source,
        ],
        [
            'email_verified_at' => Carbon::now(),
            'is_subscribed' => true,
            'website' => 'mespil',
            'source' => $source,
        ]);
    }
}
