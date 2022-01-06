@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Erica Cash, VP Investor Relations in MESPIL'))
@section('description', __('Erica started with MESPIL as Director of Operations building out all internal processes and systems and has since been promoted to VP of Investor Relations.'))

@section('content')
    <div class="container space-single profile">
        <h1 class="title-border">{{ __('Erica Cash') }}<br><small>{{ __('VP Investor Relations') }}</small></h1>
        <div class="border-left">
            <img loading="eager" width="400" height="400" src="{{ Helper::autover('/img/{subdomain}/team/erica-cash.jpg') }}" class="img-fluid" alt="{{ __('Photo of Erica Cash') }}">
            <h3 class="my-3">{{ __('Contacts') }}</h3>
            <p class="fa-left">@fas('phone', 'fa-fw fa-lg')<a class="text-secondary" data-track-phone="Profile - Erica Cash: " href="tel:+1 917 575 7280">+1 917 575 7280</a></p>
            <p class="fa-left">@fas('envelope', 'fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Profile - Erica Cash: " data-email="{{ str_rot13('erica@mespil.ie') }}">[email]</a></p>
            <p class="fa-left">@fab('linkedin-in', 'fa-fw fa-lg')<a target="_blank" class="text-secondary" href="https://www.linkedin.com/in/erica-m-cash-29478992/">{{ __('Erica Cash @ LinkedIn') }}</a></p>
        </div>
        <div class="ie11-profile-content">
            <p>{{ __('Erica started with MESPIL as Director of Operations successfully building out all internal processes, systems and marketing collateral and has since been promoted to VP of Investor Relations. In her new role she will support the creation and execution of MESPIL’s ongoing relationship development and client service strategy.') }}</p>
            <p>{{ __('An MA graduate, Erica previously managed a delivery team of 35 in Microsoft, European Operations Centre and has a further 15 years’ experience working in the property sector. She oversaw the process from contract issue to collections of over €300m for the largest property developer in Bulgaria managing the end-to-end relationship with 1000 property owners across 10 different countries.') }}</p>
            <p>{{ __('She is high energy with a well-developed sense of humour and the ability to impact and enliven colleagues daily.') }}</p>
            <p>{!! __('Erica is affiliated to the Society for :link1 (AssocRICS) and the :link2 (AssocSCSI).', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.rics.org/eu/">' . __('Royal Institute of Chartered Surveyors') . '</a>', 'link2' => '<a rel="nofollow" target="_blank" class="external-link" href="https://scsi.ie/">' . __('Society for Chartered Surveyors in Ireland') . '</a>']) !!}</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "@id": "{{ config('app.url') }}/#PersonEricaCash",
            "url": "{{ Helper::route('profile', 'erica-cash') }}",
            "email":"mailto:erica@mespil.ie",
            "telephone": "+1 917 575 7280",
            "givenName": "Erica",
            "familyName": "Cash",
            "worksFor": {
                "@type": "Organization",
                "name": "MESPIL"
            },
            "jobTitle": "{{ __('VP Investor Relations') }}",
            "image": "{{ Helper::autover('/img/{subdomain}/team/erica-cash.jpg') }}",
            "gender": "Female",
            "sameAs" : [
                "https://www.linkedin.com/in/erica-m-cash-29478992/"
            ],
            "nationality": {
                "@type": "Country",
                "name": "Ireland"
            }
        }
    </script>
@endpush
