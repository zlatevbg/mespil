@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('David Horan, Financial Controller in MESPIL'))
@section('description', __('David joined MESPIL in 2015 as Financial Controller with a wide-ranging experience base across multiple sectors - from property to investment businesses.'))

@section('content')
    <div class="container space-single profile">
        <h1 class="title-border">{{ __('David Horan') }}<br><small>{{ __('Financial Controller') }}</small></h1>
        <div class="border-left">
            <img loading="eager" width="400" height="400" src="{{ Helper::autover('/img/{subdomain}/team/david-horan.jpg') }}" class="img-fluid" alt="{{ __('Photo of David Horan') }}">
            <h3 class="my-3">{{ __('Contacts') }}</h3>
            <p class="fa-left">@fas('phone', 'fa-fw fa-lg')<a class="text-secondary" data-track-phone="Profile - David Horan: " href="tel:+353 87 968 2462">+353 87 968 2462</a></p>
            <p class="fa-left">@fas('envelope', 'fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Profile - David Horan: " data-email="{{ str_rot13('david@mespil.ie') }}">[email]</a></p>
            <p class="fa-left">@fab('linkedin-in', 'fa-fw fa-lg')<a target="_blank" class="text-secondary" href="https://www.linkedin.com/in/dhoran2/">{{ __('David Horan @ LinkedIn') }}</a></p>
        </div>
        <div class="ie11-profile-content">
            <p>{{ __('David joined MESPIL in 2015 as Financial Controller with a wide-ranging experience base across multiple sectors. His time in property is the most significant and he was at one time managing 30 companies, from property to investment businesses, giving an excellent background from which to expand in MESPIL.') }}</p>
            <p>{{ __('He served as Financial Controller in both UK and Irish energy businesses most recently where he worked closely with the senior team managing the finances across both territories and reporting monthly to the board.') }}</p>
            <p>{{ __('He also worked across the US, Australia and UAE while Senior Financial Accountant with a healthcare software company.') }}</p>
            <p>{{ __('He brings this significant international and high-level financial management experience to MESPIL where he reports to the directors on the company’s financial operations as the company’s portfolio grows.') }}</p>
            <p>{{ __('David is a Fellow of the Association of Chartered Certified Accountants in Ireland.') }}</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "@id": "{{ config('app.url') }}/#PersonDavidHoran",
            "url": "{{ Helper::route('profile', 'david-horan') }}",
            "email":"mailto:david@mespil.ie",
            "telephone": "+353 87 968 2462",
            "givenName": "David",
            "familyName": "Horan",
            "worksFor": {
                "@type": "Organization",
                "name": "MESPIL"
            },
            "jobTitle": "{{ __('Financial Controller') }}",
            "image": "{{ Helper::autover('/img/{subdomain}/team/david-horan.jpg') }}",
            "gender": "Male",
            "sameAs" : [
                "https://www.linkedin.com/in/dhoran2/"
            ],
            "nationality": {
                "@type": "Country",
                "name": "Ireland"
            }
        }
    </script>
@endpush
