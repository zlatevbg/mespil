@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Aidan Donnelly, Chairperson in MESPIL'))
@section('description', __('Running his own consulting company Aidan is also a Director of Science Foundation Ireland, the primary funding agency for research excellence in Ireland.'))

@section('content')
    <div class="container space-single profile">
        <h1 class="title-border">{{ __('Aidan Donnelly') }}<br><small>{{ __('Chairperson') }}</small></h1>
        <div class="border-left">
            <img loading="eager" width="400" height="400" src="{{ Helper::autover('/img/{subdomain}/team/aidan-donnelly.jpg') }}" class="img-fluid" alt="{{ __('Photo of Aidan Donnelly') }}">
            <h3 class="my-3">{{ __('Contacts') }}</h3>
            <p class="fa-left">@fas('phone', 'fa-fw fa-lg')<a class="text-secondary" data-track-phone="Profile - Aidan Donnelly: " href="tel:+353 87 231 2287">+353 87 231 2287</a></p>
            <p class="fa-left">@fas('envelope', 'fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Profile - Aidan Donnelly: " data-email="{{ str_rot13('aidan@mespil.ie') }}">[email]</a></p>
            <p class="fa-left">@fab('linkedin-in', 'fa-fw fa-lg')<a target="_blank" class="text-secondary" href="https://www.linkedin.com/in/aidanwdonnelly/">{{ __('Aidan Donnelly @ LinkedIn') }}</a></p>
        </div>
        <div class="ie11-profile-content">
            <p>{{ __('Running his own consulting company with a number of other interests in Energy, renewable and environmental start-up companies, Aidan is also a Director of Science Foundation Ireland, the primary funding agency for research excellence in Ireland.') }}</p>
            <p>{!! __('In addition, he was Chairman of :link for 13 years in accordance with the IEA and EU requirements serving 7 different Government Ministers for Energy or Climate Control.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.nora.ie/">' . __('Ireland’s National Oil Reserve Agency (NORA)') . '</a>']) !!}</p>
            <p>{{ __('With extensive experience in the start-up, development and management of technology-oriented multinationals in Ireland Aidan has held positions in Xerox (Europe), Quantum Peripheral Products, Puritan Bennett, Cabletron Systems, Betdaq (Global Betting Exchange Ltd.) and most recently, ServeCentric. Previous to this he served in the Irish army for over 12 years holding the rank of Captain in the Army Ordnance Corp.') }}</p>
            <p>{{ __('He is currently working on the development of a chain of CNG/Biogas fueling stations for the haulage sector. Aidan holds an M.B.A. (UCG), M.I.E. (UCD) and a B.Sc. (UCG) and is a Chartered Director (C.Dir.) with the IOD.') }}</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "@id": "{{ config('app.url') }}/#PersonAidanDonnelly",
            "url": "{{ Helper::route('profile', 'aidan-donnelly') }}",
            "email":"mailto:aidan@mespil.ie",
            "telephone": "+353 87 231 2287",
            "givenName": "Aidan",
            "familyName": "Donnelly",
            "worksFor": {
                "@type": "Organization",
                "name": "MESPIL"
            },
            "jobTitle": "{{ __('Chairperson') }}",
            "image": "{{ Helper::autover('/img/{subdomain}/team/aidan-donnelly.jpg') }}",
            "gender": "Male",
            "sameAs" : [
                "https://www.linkedin.com/in/aidanwdonnelly/"
            ],
            "nationality": {
                "@type": "Country",
                "name": "Ireland"
            }
        }
    </script>
@endpush
