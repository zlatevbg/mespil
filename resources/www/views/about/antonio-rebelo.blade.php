@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('António Rebelo, Advisory Board Member in MESPIL'))
@section('description', __('António is a real estate expert and investor. He started his career in the Investment Banking sector working for the first privately owned Bank in Portugal.'))

@section('content')
    <div class="container space-single profile">
        <h1 class="title-border">{{ __('António Rebelo') }}<br><small>{{ __('Advisory Board') }}</small></h1>
        <div class="border-left">
            <img loading="eager" width="400" height="400" src="{{ Helper::autover('/img/{subdomain}/team/antonio-rebelo.jpg') }}" class="img-fluid" alt="{{ __('Photo of António Rebelo') }}">
            <h3 class="my-3">{{ __('Contacts') }}</h3>
            <p class="fa-left">@fas('envelope', 'fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Profile - António Rebelo: " data-email="{{ str_rot13('acr@auriscollection.com') }}">[email]</a></p>
            <p class="fa-left">@fab('linkedin-in', 'fa-fw fa-lg')<a target="_blank" class="text-secondary" href="https://www.linkedin.com/in/ant%C3%B3nio-coutinho-rebelo-033339/">{{ __('António Rebelo @ LinkedIn') }}</a></p>
        </div>
        <div class="ie11-profile-content">
            <p>{!! __('Mr. António Coutinho Rebelo is a real estate expert and investor with an extensive track record in the investment arena since the late 80’s. He started his career in the Investment Banking sector working for the first privately owned Bank in Portugal, :link where he launched the first management fund comprising of companies, mutual funds and real estate funds.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://ind.millenniumbcp.pt/en">' . __('Millennium BCP') . '</a>']) !!}</p>
            <p>{{ __('From 1999-2009, Mr. Coutinho joined BPN Group once again launching both a mutual fund management BPN Fundos and a real estate fund management company BPN Imofundos. As Chairman and CEO of BPN Imofundos, he has launched and managed successfully one open ended and seven closed ended real estate funds. In 2007 the company reached €1,2 Billion in assets under management and ranked as the second largest real estate fund management in Portugal.') }}</p>
            <p>{{ __('Mr. Coutinho Rebelo holds a Degree in Law by Portuguese Catholic University (Lisbon) and various Executive Masters in Real Estate Finance, Public Law and Banking.') }}</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "@id": "{{ config('app.url') }}/#PersonAntónioRebelo",
            "url": "{{ Helper::route('profile', 'antonio-rebelo') }}",
            "email":"mailto:acr@auriscollection.com",
            "givenName": "António",
            "familyName": "Rebelo",
            "jobTitle": "{{ __('Advisory Board') }}",
            "image": "{{ Helper::autover('/img/{subdomain}/team/antonio-rebelo.jpg') }}",
            "gender": "Male",
            "sameAs" : [
                "https://www.linkedin.com/in/ant%C3%B3nio-coutinho-rebelo-033339/"
            ]
        }
    </script>
@endpush
