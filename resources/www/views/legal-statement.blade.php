@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Legal Statement | MESPIL'))
@section('description', __('All content on the MESPIL website, including without limitation, logos, text, images, graphics, sound recordings and video works, is protected by copyright.'))

@push('meta')
    <meta name="robots" content="noindex" />
@endpush

@section('content')
    <div class="container space-single">
        <div class="max-width-lg">
            <h1 class="title-border mb-5">{{ __('Legal Statement') }}</h1>
            <h2>{{ __('Copyright And Trademark Notices') }}</h2>
            <p class="lead mt-3">{{ __('Copyright') }}</p>
            <p>{{ __('All content on the MESPIL website, including without limitation, logos, text, images, graphics, sound recordings and video works, is protected by copyright and/or design right owned by MESPIL or by its subsidiaries or affiliates unless identified as belonging to third parties. No license is granted to copy, reproduce, use or otherwise deal in MESPIL website content, including any copyright or design right work of MESPIL. The MESPIL website may not be linked to or reproduced on third party websites without the prior written consent of MESPIL.') }}</p>
            <p class="lead">{{ __('Trade Marks') }}</p>
            <p>{{ __('The MESPIL name and logo are trademarks of MESPIL and may not be used without its prior written consent. All other names and logos on the MESPIL website may be registered by third parties and may not be used without their prior written consent. No license is granted to use the MESPIL name or logo.') }}</p>
            <h2>{{ __('Terms Of Use') }}</h2>
            <p>{{ __('When you use MESPIL Website, you agree to the present conditions. MESPIL reserves the right to change these conditions as well as the content of the Web site at any time without notice. If you do not agree to these conditions, we kindly request you to refrain from using our Website.') }}</p>
            <h2>{{ __('Content Of The MESPIL Website And Liability') }}</h2>
            <p>{{ __('We at MESPIL undertake to maintain our Web site in the most up-to-date version at all times and to provide you with a high-quality, comprehensive overview of our activities and offers. Despite this, MESPIL does not guarantee in any way the topicality, accuracy, completeness or quality of the information provided. MESPIL and its authors are not liable for any claims for direct, indirect or consequential damages of a tangible or intangible nature arising from the use or non-use of the information provided.') }}</p>
            <p>{{ __('All data and offers on the MESPIL Web site are without obligation and non-binding. They serve merely informational purposes and do not represent any sort of decision-making criteria for any questions requiring consultation. However, our staff members are happy to provide you with competent service and comprehensive information about our property and services in a personal consultation.') }}</p>
            <h2>{{ __('References And Links') }}</h2>
            <p>{{ __('Clicking on direct or indirect links of the MESPIL Web site to other Internet sites which were not created by MESPIL may result in your leaving the MESPIL Web site. We have not reviewed the content of these linked Web sites with regard to their legality, and thus assumes no liability whatsoever for the content or products of these Web sites.') }}</p>
            <h2>{{ __('Emails') }}</h2>
            <p>{{ __('We wish to warn you of the lack of security of electronic mail and thus advise you not to send us confidential information by e-mail unless you use an encryption program. Otherwise you may wish to use regular mail, facsimile or a recognized courier service. If you send us information by email, we will regard this as your consent to our communicating with you about the matter in question by email. In this case you and MESPIL are legally liable for any declarations made by e-mail, insofar as no special form requirements exist based on a contractual agreement or compulsory legal provisions. Should an email which was demonstrably sent by MESPIL not reach its intended recipient by accident, MESPIL assumes no liability whatsoever for any disadvantageous legal consequences which arise as a result.') }}</p>
            <h2>{{ __('Accuracy Of Architects Plans And Market Information') }}</h2>
            <p>{{ __('MESPIL gives notice that the floor plans provided and architectural images on this site are produced in good faith and set out as a general guide only which does not constitute any part of an offer or contract. The floor plans are believed to be correct at the time of publication.') }}</p>
            <p>{{ __('MESPIL endeavours to ensure that any market forecasts we provide are accurate and well-researched at all times, however we cannot ultimately warrant the accuracy of that information and cannot be held liable for any reliance you may make of or put on it unless agreed with us in writing.') }}</p>
            <h2>{{ __('Information Policy') }}</h2>
            <p>{{ __('We will use contact details provided by you as part of any registration process (i.e. your name and your email address) to provide any product or services requested by you and also to tell you about important changes to relevant subscription services and their functionality. Calls may be recorded.') }}</p>
            <h2>{{ __('Security') }}</h2>
            <p>{{ __('Your personal data will be held on a secure server. Our sites are equipped with the latest security devices/firewalls.') }}</p>
            <h2>{{ __('Access To Data') }}</h2>
            <p>{{ __('Under the General Data Protection Regulation 2018 you have the right to be told what personal information we hold about you on our databases. You should write to us stating your full name, your address and any of our publications or services to which you know you subscribe.') }}</p>
            <h2>{{ __('Cookies') }}</h2>
            <p>{{ __('A cookie is a text-only string of information that a website transfers to the cookie folder of the browser on your computer’s hard disk so that the website can remember who you are. We use them to maintain your login (so that you stay logged-in until you wish to log out), and to remember your preferences for things like forms and searches.') }}</p>
            <p>{{ __('No personal or identifying information is held in these cookies. As soon as you leave our sites or close your browser, they are automatically deleted from your computer.') }}</p>
            <p>{{ __('You have the ability to accept or decline cookies by modifying the settings in your browser. However, you may not be able to use all the interactive features of our site if cookies are disabled. If you require help with your cookie settings then please contact us.') }}</p>
            <p>{{ __('Google Analytics uses “Cookies” to track activity on our website. Cookies are small data files placed on your computer or other internet device by websites to track activity. They allow websites to perform better, for example, by remembering user preferences and activity for statistical analysis. If you do not want your browser to accept cookies you can turn off this functionality in settings but this may prevent this website or other websites from functioning properly.') }}</p>
            <p>{!! __('For more information about cookies, please visit :link', ['link' => '<a target="_blank" href="http://www.allaboutcookies.org/">www.allaboutcookies.org</a>']) !!}</p>
        </div>
    </div>
@endsection
