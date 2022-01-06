@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Privacy Policy | MESPIL'))
@section('description', __('This Privacy Policy tells you about the information MESPIL collects from you when you use our website.'))

@push('meta')
    <meta name="robots" content="noindex" />
@endpush

@section('content')
    <div class="container space-single">
        <div class="max-width-lg">
            <h1 class="title-border mb-5">{{ __('Privacy Policy') }}</h1>
            <p class="lead mb-3">{{ __('This Privacy Policy tells you about the information MESPIL collects from you when you use our website.') }}</p>
            <p>{{ __('In collecting this information, we are acting as a data controller and, by law, we are required to provide you with information about us, about why and how we use your data, and about the rights you have over your personal data.') }}</p>
            <p>{{ __('By using this website and by disclosing your personal data to us, you consent to the collection, storage, processing, use and disclosure of your data.') }}</p>
            <h2>{{ __('Who We Are') }}</h2>
            <p>{!! __('For the purpose of the General Data Protection Regulation (“GDPR”), the data controller of this website is MESPIL and our address is :address.', ['address' => '<strong>' . __('mespil.address.ireland') . '</strong>']) !!}</p>
            <p>{!! __('Should you have any queries about this Privacy Statement, or wish to exercise your rights as set out in herein, please email us on :email', ['email' => '<a class="encoded-email" data-track-email="Privacy Policy: " data-email="' . str_rot13(__('mespil.email')) . '">[email]</a>']) !!}</p>
            <h2>{{ __('What Personal Data We Collect About You') }}</h2>
            <p>{{ __('The personal data that MESPIL collects about you may include the following:') }}</p>
            <ul>
                <li>{{ __('Any personal data which you furnish to us either in the “Contact Us” section of our website, or by email, phone or otherwise which may include (but is not limited to) your name, email address and phone number.') }}</li>
                <li>{{ __('Like most websites, when you access our website, your device’s browser provides us with certain information which is collected and used to compile statistical data. This information may be used to help us to improve our website and the services we offer.') }}</li>
            </ul>
            <h2>{{ __('What We Do With The Data We Gather') }}</h2>
            <p>{{ __('Where we collect your personal data, we use it for the following reasons:') }}</p>
            <ul>
                <li>{{ __('In order to respond to a query you may have submitted to us through the “Contact Us” section of our website.') }}</li>
                <li>{{ __('To send marketing and other emails, which may be of interest to you, where you have consented to receive such emails (which consent can be withdrawn at any time).') }}</li>
                <li>{{ __('To administer our website and for internal operations, including troubleshooting, data analysis, testing, research, statistical, survey and training purposes.') }}</li>
                <li>{{ __('To improve our website to ensure that content is presented in the most effective manner for you and for your device.') }}</li>
                <li>{{ __('To keep our website safe and secure.') }}</li>
            </ul>
            <h2>{{ __('Legal Basis For Processing Your Personal Data') }}</h2>
            <p><strong>{{ __('Consent:') }}</strong> {{ __('We process your personal data where you have given your consent to the processing of your data (which you may revoked at any time).') }}</p>
            <p><strong>{{ __('Legal Compliance:') }}</strong> {{ __('We use your personal data in order to comply with our legal and regulatory obligations (including anti-money laundering obligations), to enforce our legal rights and to protect the rights of third parties.') }}</p>
            <p><strong>{{ __('Legitimate Interests:') }}</strong> {{ __('In most cases, it is in our legitimate interest to process your personal data for the following reasons:') }}</p>
            <ul>
                <li>{{ __('To respond to any queries that you have submitted through the website.') }}</li>
                <li>{{ __('To allow us to provide the services you request from us.') }}</li>
                <li>{{ __('For the administration and operation of our services, as well as for marketing and promoting our company') }}</li>
            </ul>
            <h2>{{ __('Disclosure Of Your Personal Information') }}</h2>
            <p>{!! __('When you use our website and when you contact us through the :link section of our website, we may share your personal data with our IT service providers, practice management system provider, our email service providers, document processing and translation services, document storage providers and confidential waste and shredding disposal providers.', ['link' => '<a class="internal-link" href="' . Helper::route('contact') . '">' . __('Contact Us') . '</a>']) !!}</p>
            <p>{{ __('We may also share your information with selected third parties including:') }}</p>
            <ul>
                <li>{{ __('Business partners, suppliers and sub-contractors for the performance of any contract we enter into with them or you.') }}</li>
                <li>{{ __('Analytics and search engine providers that assist us in the improvement and optimisation of our website.') }}</li>
            </ul>
            <p>{{ __('Our agents and contractors as set out above are restricted from using your data in any way other than to provide services for us. We require that all such agents or contractors enter into contractual agreements in accordance with our legal and regulatory obligations.') }}</p>
            <h2>{{ __('Data Retention') }}</h2>
            <p>{{ __('We will only retain your personal data for as long as necessary to fulfil the purpose for which it was collected.') }}</p>
            <p>{{ __('It is our policy to retain documents in hardcopy and electronic form in accordance with any retention period required by law or to the end of the period in which litigation might arise from our engagement. The data will then be destroyed without further notice or liability.') }}</p>
            <h2>{{ __('Your Rights As A Data Subject') }}</h2>
            <p>{{ __('You have the following rights under GDPR, in certain circumstances and subject to certain exemptions, in relation to your personal data:') }}</p>
            <ul>
                <li>{{ __('A right of access to the personal data we hold about you.') }}</li>
                <li>{{ __('A right to rectification if the data we hold about you is incorrect or incomplete.') }}</li>
                <li>{{ __('A right to erasure, where you can ask us to delete or remove your personal data.') }}</li>
                <li>{{ __('A right to restrict processing.') }}</li>
                <li>{{ __('A right to data portability of your personal data.') }}</li>
                <li>{{ __('A right to object to our processing your personal data.') }}</li>
                <li>{{ __('A right to withdraw consent – where we process your data solely on the basis of your consent, you are entitled to withdraw your consent at any time.') }}</li>
                <li>{{ __('A right to lodge a complaint with the Data Protection Commission.') }}</li>
            </ul>
            <p>{{ __('Please note that some of these rights may be limited where we have an overriding interest or legal obligation to continue to process the data, or where data may be exempt from disclosure due to reasons of legal professional privilege.') }}</p>
            <p>{{ __('If you wish to contact us in relation to any of your rights above, please contact us by post or email:') }}</p>
            <ul>
                <li>{{ __('Email') }}: <a class="encoded-email" data-track-email="Privacy Policy: " data-email="{{ str_rot13(__('mespil.email')) }}">[email]</a></li>
                <li>{{ __('Post') }}: {{ __('mespil.address.ireland') }}</li>
            </ul>
            <h2>{{ __('Links To Other Websites') }}</h2>
            <p>{{ __('As a resource to visitors of our website, our website may contain links to other websites of interest. Once you have used these links to leave our site, you should note that we do not have any control over those other websites and cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by this Privacy Statement.') }}</p>
            <h2>{{ __('Changes To Our Privacy Statement') }}</h2>
            <p>{{ __('We may makes changes to this statement from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes.') }}</p>
        </div>
    </div>
@endsection
