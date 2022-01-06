@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Erwin Rodenburg, Sales Manager - Algarve in MESPIL'))
@section('description', __('Erwin joined MESPIL as Sales Manager in 2018 and has successfully supported all sales to date in addition to expanding our agency network.'))

@section('content')
    <div class="container space-single profile">
        <h1 class="title-border">{{ __('Erwin Rodenburg') }}<br><small>{{ __('Sales Manager - Algarve') }}</small></h1>
        <div class="border-left">
            <img loading="eager" width="400" height="400" src="{{ Helper::autover('/img/{subdomain}/team/erwin-rodenburg.jpg') }}" class="img-fluid" alt="{{ __('Photo of Erwin Rodenburg') }}">
            <h3 class="my-3">{{ __('Contacts') }}</h3>
            <p class="fa-left">@fas('phone', 'fa-fw fa-lg')<a class="text-secondary" data-track-phone="Profile - Erwin Rodenburg: " href="tel:+351 925 450 608">+351 925 450 608</a></p>
            <p class="fa-left">@fas('envelope', 'fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Profile - Erwin Rodenburg: " data-email="{{ str_rot13('erwin@mespil.ie') }}">[email]</a></p>
            <p class="fa-left">@fab('linkedin-in', 'fa-fw fa-lg')<a target="_blank" class="text-secondary" href="https://www.linkedin.com/in/erwin-rodenburg-13888479/">{{ __('Erwin Rodenburg @ LinkedIn') }}</a></p>
        </div>
        <div class="ie11-profile-content">
            <p>{{ __('Erwin joined MESPIL as Sales Manager in 2018 and has successfully supported all sales to date in addition to expanding our agency network.') }}</p>
            <p>{{ __('Erwin is originally from the Netherlands however has lived in Portugal for the last 15 years with his family. He brings over 25 years’ experience in different sales and business development roles, from establishing his own flower export firm to working for one of the largest chandlery companies in the Caribbean.') }}</p>
            <p>{{ __('More recently he has held positions in real estate throughout the Algarve, and speaking several languages is very comfortable in building relationships with visitors from many different countries.') }}</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "@id": "{{ config('app.url') }}/#PersonErwinRodenburg",
            "url": "{{ Helper::route('profile', 'erwin-rodenburg') }}",
            "email":"mailto:erwin@mespil.ie",
            "telephone": "+351 925 450 608",
            "givenName": "Erwin",
            "familyName": "Rodenburg",
            "worksFor": {
                "@type": "Organization",
                "name": "MESPIL"
            },
            "jobTitle": "{{ __('Sales Manager - Algarve') }}",
            "image": "{{ Helper::autover('/img/{subdomain}/team/erwin-rodenburg.jpg') }}",
            "gender": "Male",
            "sameAs" : [
                "https://www.linkedin.com/in/erwin-rodenburg-13888479/"
            ],
            "nationality": {
                "@type": "Country",
                "name": "Netherlands"
            }
        }
    </script>
@endpush
