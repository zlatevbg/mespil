@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Carlos Henrique, Business Support Manager in MESPIL'))
@section('description', __('Carlos has over 40 years experience in tourism in the Algarve, Portugal. He has managed both hotel & apartment complexes including lettings, maintenance, staff'))

@section('content')
    <div class="container space-single profile">
        <h1 class="title-border">{{ __('Carlos Henrique') }}<br><small>{{ __('Business Support Manager') }}</small></h1>
        <div class="border-left">
            <img loading="eager" width="400" height="400" src="{{ Helper::autover('/img/{subdomain}/team/carlos-henrique.jpg') }}" class="img-fluid" alt="{{ __('Photo of Carlos Henrique') }}">
            <h3 class="my-3">{{ __('Contacts') }}</h3>
            <p class="fa-left">@fas('phone', 'fa-fw fa-lg')<a class="text-secondary" data-track-phone="Profile - Carlos Henrique: " href="tel:+351 289 24 55 00">+351 289 24 55 00</a></p>
            <p class="fa-left">@fas('envelope', 'fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Profile - Carlos Henrique: " data-email="{{ str_rot13('carlos@mespil.ie') }}">[email]</a></p>
            <p class="fa-left">@fab('linkedin-in', 'fa-fw fa-lg')<a target="_blank" class="text-secondary" href="https://www.linkedin.com/in/carlos-henrique-angelico-a5259070/">{{ __('Carlos Henrique @ LinkedIn') }}</a></p>
        </div>
        <div class="ie11-profile-content">
            <p>{{ __('Carlos Henrique has over 40 years experience in tourism in the Algarve, Portugal. He has managed both hotel and apartment complexes and a portfolio of non-resident owned properties for clients, managing all aspects including lettings, maintenance, staff and administration.') }}</p>
            <p>{!! __('He was the GM of the 4-star Quarteirasol Hotel, Quarteira and more recently held the position of Tourism Manager at Garvetur Apartments and Villas – a company established in 1983 that manages a property portfolio of 9000 units across the Algarve. Carlos is knowledgable regarding the regulations and law around the Condominum Act which governs the management and mainteance of :link.', ['link' => '<a class="internal-link" href="https://www.pinehillsvilamoura.com/">' . __('Pine Hills Vilamoura') . '</a>']) !!}</p>
            <p>{!! __('He is a member of the :link and is registered with the Portuguese Tourist Board.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://adhp.org/">' . __('Portuguese Hotel Managers Association (ADHP)') . '</a>']) !!}</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "@id": "{{ config('app.url') }}/#PersonCarlosHenrique",
            "url": "{{ Helper::route('profile', 'carlos-henrique') }}",
            "email":"mailto:carlos@mespil.ie",
            "telephone": "+351 289 24 55 00",
            "givenName": "Carlos",
            "familyName": "Henrique",
            "worksFor": {
                "@type": "Organization",
                "name": "MESPIL"
            },
            "jobTitle": "{{ __('Business Support Manager') }}",
            "image": "{{ Helper::autover('/img/{subdomain}/team/carlos-henrique.jpg') }}",
            "gender": "Male",
            "sameAs" : [
                "https://www.linkedin.com/in/carlos-henrique-angelico-a5259070/"
            ]
        }
    </script>
@endpush
