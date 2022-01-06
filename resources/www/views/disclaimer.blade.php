@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Disclaimer | MESPIL'))
@section('description', __('Terms and conditions for using MESPIL’s website'))

@push('meta')
    <meta name="robots" content="noindex" />
@endpush

@section('content')
    <div class="container space-single">
        <div class="max-width-lg">
            <h1 class="title-border mb-5">{{ __('Disclaimer') }}</h1>
            <h2>{{ __('Important Notice') }}</h2>
            <p>{{ __('Please read all the terms and conditions contained hereunder carefully. By accessing this website and any of the pages thereof, you are deemed to have read and agreed to the terms and conditions below. If you do not agree with these terms, please cease using this website immediately.') }}</p>
            <p>{{ __('The details contained on the MESPIL website are made available for information only. Whilst MESPIL makes every effort to ensure that all information and links contained in this website are accurate, complete and up to date, we make no representations or warranties of any kind, express or implied, about the information and as such we cannot be held responsible for omissions, errors or inaccuracies, nor for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss of profits resulting from direct or indirect actions based upon the content of this website. Any reliance you place on information on this website is therefore strictly at your own risk.') }}</p>
            <p>{{ __('MESPIL accept no responsibility or liability for the provision of accuracy. It is up to each individual to seek expert and independent legal/financial or tax advise dependent on the individuals circumstances.') }}</p>
            <p>{{ __('MESPIL does not guarantee that this website will be free from viruses, defects or errors, nor that it will be viewable without interruptions or delays. This website may be subject to updates and changes without giving prior notice. MESPIL reserves the right, at its discretion, to change, modify, add or remove all or portions of these terms at any time. Your continued use of this Website will indicate acceptance by you of such rules, changes or modifications. Additional terms and conditions may apply to certain portions of this Website. By using this Website you agree to abide and be bound by such additional terms and conditions as well as all applicable laws.') }}</p>
            <p>{{ __('Under no circumstances shall MESPIL or any of its respective officers, directors, licensors, employees or agents be liable, whether in contract, tort, strict liability or otherwise, for any direct, indirect, punitive, special, incidental, consequential or indirect loss, injury or damages (including, without limitation, lost profits) arising out of or in connection with the use of this Website or its Content.') }}</p>
            <h2>{{ __('Property Details') }}</h2>
            <p>{{ __('Without prejudice to the generality of the foregoing. MESPIL has made every effort to ensure that measurements, details and particulars within our website are accurate. However, they are only an approximate general guide and should not be construed as a contract or offer. The timelines presented on this website for the various projects are for reference only and are subject to change. Any lease, ground rent, photographs, service charge and distance details cannot be guaranteed for accuracy and as such they should be checked by a solicitor prior to any contract. You should not regard, or take anything, within this web site as being financial advice.') }}</p>
            <h2>{{ __('Copyright') }}</h2>
            <p>{{ __('Copyright in the contents of these pages, in the information therein and in their arrangement, is owned by MESPIL unless otherwise indicated. No hyperlinking of this website to any other website or the mirroring or reproduction of any information on this website on any other website or the use of any information therein for any public or commercial purpose is permitted without the prior written consent of MESPIL, which consent may be granted or refused at its sole discretion and may be subject to terms and conditions imposed by MESPIL.') }}</p>
        </div>
    </div>
@endsection
