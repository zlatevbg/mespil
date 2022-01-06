@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Guilherme Barroso, Advisory Board Member in MESPIL'))
@section('description', __('Guilherme’s professional experience has been in supporting and advising enterprises develop their business in emerging countries like Portugal.'))

@section('content')
    <div class="container space-single profile">
        <h1 class="title-border">{{ __('Guilherme Barroso') }}<br><small>{{ __('Advisory Board') }}</small></h1>
        <div class="border-left">
            <img loading="eager" width="400" height="400" src="{{ Helper::autover('/img/{subdomain}/team/guilherme-barroso.jpg') }}" class="img-fluid" alt="{{ __('Photo of Guilherme Barroso') }}">
            <h3 class="my-3">{{ __('Contacts') }}</h3>
            <p class="fa-left">@fas('envelope', 'fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Profile - Guilherme Barroso: " data-email="{{ str_rot13('guilhermedbarroso@gmail.com') }}">[email]</a></p>
            <p class="fa-left">@fab('linkedin-in', 'fa-fw fa-lg')<a target="_blank" class="text-secondary" href="https://www.linkedin.com/in/guilherme-dur%C3%A3o-barroso-a5633631/">{{ __('Guilherme Barroso @ LinkedIn') }}</a></p>
        </div>
        <div class="ie11-profile-content">
            <p>{{ __('Focused from early in his career on Business Development, Guilherme’s professional experience has been in supporting enterprises develop their business in emerging countries, bridging the gap between multilateral financial institutions, governmental bodies and Portuguese corporates.') }}</p>
            <p>{{ __('Leveraging market opportunities and the recent boom in real estate investment in Portugal has seen Guilherme dedicate his strategic and financial expertise in advising senior Portuguese construction companies on their national and international business.') }}</p>
            <p>{{ __('From early in his career Guilherme has merged his entrepreneurial spirit with giving back by incorporating an NGO dedicated to educational and health programs in Mozambique.') }}</p>
            <p>{{ __('Guilherme holds an MBA by CLSBE/ NSBE/ MIT and a BA in Business and Administration.') }}</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "@id": "{{ config('app.url') }}/#PersonGuilhermeBarroso",
            "url": "{{ Helper::route('profile', 'guilherme-barroso') }}",
            "email":"mailto:guilhermedbarroso@gmail.com",
            "givenName": "Guilherme",
            "familyName": "Barroso",
            "worksFor": {
                "@type": "Organization",
                "name": "MESPIL"
            },
            "jobTitle": "{{ __('Advisory Board') }}",
            "image": "{{ Helper::autover('/img/{subdomain}/team/guilherme-barroso.jpg') }}",
            "gender": "Male",
            "sameAs" : [
                "https://www.linkedin.com/in/guilherme-dur%C3%A3o-barroso-a5633631/"
            ]
        }
    </script>
@endpush
