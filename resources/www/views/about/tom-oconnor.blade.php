@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Tom O’Connor, Managing Director in MESPIL'))
@section('description', __('One of MESPIL’s co-founders, Tom O’Connor has an impressive track record as an international business executive.'))

@section('content')
    <div class="container space-single profile">
        <h1 class="title-border">{{ __('Tom O’Connor') }}<br><small>{{ __('Managing Director') }}</small></h1>
        <div class="border-left">
            <img loading="eager" width="400" height="400" src="{{ Helper::autover('/img/{subdomain}/team/tom-oconnor.jpg') }}" class="img-fluid" alt="{{ __('Photo of Tom O’Connor') }}">
            <h3 class="my-3">{{ __('Contacts') }}</h3>
            <p class="fa-left">@fas('phone', 'fa-fw fa-lg')<a class="text-secondary" data-track-phone="Profile - Tom O’Connor: " href="tel:+353 87 816 1833">+353 87 816 1833</a> {{ __('(Ireland)') }}</p>
            <p class="fa-left">@fas('phone', 'fa-fw fa-lg')<a class="text-secondary" data-track-phone="Profile - Tom O’Connor: " href="tel:+351 961 515 520">+351 961 515 520</a> {{ __('(Portugal)') }}</p>
            <p class="fa-left">@fas('envelope', 'fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Profile - Tom O’Connor: " data-email="{{ str_rot13('tom@mespil.ie') }}">[email]</a></p>
            <p class="fa-left">@fab('linkedin-in', 'fa-fw fa-lg')<a target="_blank" class="text-secondary" href="https://www.linkedin.com/in/tom-o-connor-090b9318/">{{ __('Tom O’Connor @ LinkedIn') }}</a></p>
        </div>
        <div class="ie11-profile-content">
            <p>{{ __('One of MESPIL’s co-founders, Tom O’Connor has an impressive track record as an international business executive utilising his wealth of knowledge in the energy, construction and healthcare sectors both in Ireland and overseas to identify and leverage key business opportunities.') }}</p>
            <p>{{ __('Alongside MESPIL, he has most recently served as a Regional Director of Business Development in the international energy services company BL Energy.') }}</p>
            <p>{{ __('His skills in business strategy, planning and fundraising, have made him instrumental in assisting many clients secure investment and rolling out their operations globally.') }}</p>
            <p>{{ __('Tom provides informed guidance and focused input supporting MESPIL to grow and scale.') }}</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "@id": "{{ config('app.url') }}/#PersonTomOConnor",
            "url": "{{ Helper::route('profile', 'tom-oconnor') }}",
            "email":"mailto:tom@mespil.ie",
            "telephone": "+353 87 816 1833",
            "givenName": "Tom",
            "familyName": "O’Connor",
            "worksFor": {
                "@type": "Organization",
                "name": "MESPIL"
            },
            "jobTitle": "{{ __('Managing Director') }}",
            "image": "{{ Helper::autover('/img/{subdomain}/team/tom-oconnor.jpg') }}",
            "gender": "Male",
            "sameAs" : [
                "https://www.linkedin.com/in/tom-o-connor-090b9318/"
            ],
            "nationality": {
                "@type": "Country",
                "name": "Ireland"
            }
        }
    </script>
@endpush
