@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Portuguese award winning property developer | Properties for sale'))
@section('description', __('Apartments for sale in the Algarve and Lisbon, Portugal ✪ Golden Visa eligible properties for sale and real estate investment opportunities in Portugal.'))

@section('content')
    <div id="home-video">
        <div class="container overlay-wrapper overlay-home">
            <strong class="display-3">{!! __('Bringing Portugal<br>to the World') !!}</strong>
        </div>
        <div class="embed-responsive embed-responsive-16by9  h-100">
            <video class="embed-responsive-item" autoplay muted playsinline preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/home/video-poster.jpg') }}">
                <source src="{{ Helper::autover('/video/{subdomain}/home.mp4') }}" type="video/mp4"/>
            </video>
        </div>
    </div>

    <div class="container space-single">
        <div class="text-center">
            <h1 class="title-border text-center mb-5">{{ __('Portuguese award winning property developer') }}</h1>
            <p>
                {!! __('We are delighted to announce that MESPIL has won :award1 for projects :project1, :project2 and :project3 making this the third year in a row to be honoured. In addition we have also won :award2. Winning in both of these globally recognised industry awards acknowledges MESPIL’s excellence not only in property development but also in property management and travel and tourism standards.',
                    [
                        'award1' => '<strong class="font-weight-bold">' . __('4 x 2020 International Property Awards') . '</strong>',
                        'project1' => '<a class="internal-link" href="' . Helper::route('property-for-sale', 'pine-hills-vilamoura-portugal') . '">' . __('Pine Hills, Vilamoura') . '</a>',
                        'project2' => '<a class="internal-link" href="' . Helper::route('property-for-sale', 'no-9-faro-portugal') . '">' . __('No.9 Faro, Algarve') . '</a>',
                        'project3' => '<a class="internal-link" href="' . Helper::route('property-for-sale', 'no-9-lisbon-portugal') . '">' . __('No.9 Lisbon') . '</a>',
                        'award2' => '<strong class="font-weight-bold">' . __('Portugal’s Leading Serviced Apartments in the 2020 World Travel Awards') . '</strong>',
                    ]
                ) !!}
            </p>
            <img loading="eager" width="455" height="152" src="{{ Helper::autover('/svg/{subdomain}/awards-2020.svg') }}" class="img-fluid mt-4" alt="{{ __('MESPIL Awards') }}">
        </div>
    </div>

    <div class="container {{-- container-top --}} container-light space-single">
        <div class="head-section text-center">
            <h2 class="mb-5">{{ __('Company Profile') }}</h2>
            <p>{!! __('Since 2006, MESPIL have been earning and keeping our clients trust with an unwavering commitment to service, expertise and integrity. With a current focus on :link across core locations of the Algarve, :faro, :vilamoura and the capital city of :lisbon, we are a growing family of professionals combining real estate expertise with unrivalled market knowledge and investment fluency.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('Portuguese properties for sale') . '</a>', 'faro' => '<a class="internal-link" href="' . Helper::route('portugal', 'faro') . '">' . __('Faro') . '</a>', 'vilamoura' => '<a class="internal-link" href="' . Helper::route('portugal', 'vilamoura') . '">' . __('Vilamoura') . '</a>', 'lisbon' => '<a class="internal-link" href="' . Helper::route('portugal', 'lisbon') . '">' . __('Lisbon') . '</a>']) !!}</p>
        </div>
    </div>

    <div class="container space-double">
        <div class="row row-cols-1 row-cols-md-2 mb-n5">
            <div class="col mb-5">
                <div class="card card-home text-center h-100">
                    <img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/home/portugal-bridge.jpg') }}" class="card-img img-fluid" alt="{{ __('25 de Abril Bridge, Lisbon, Portugal') }}">
                    <div class="card-img-overlay">
                        <svg class="logo-symbol logo-white logo-opacity" viewBox="0 0 25.77 25.96">
                            <use xlink:href="#logo"></use>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title title-border text-uppercase">{{ __('For End Buyers') }}@fas('long-arrow-alt-right', 'ml-3')</h3>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('for-end-buyers') }}">{{ __('Property solutions and investment opportunities for end buyers. Portugal Golden Visa eligible properties for sale.') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card-home text-center h-100">
                    <img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/home/portugal-statue.jpg') }}" class="card-img img-fluid" alt="{{ __('King José I Statue, Lisbon, Portugal') }}">
                    <div class="card-img-overlay">
                        <svg class="logo-symbol logo-white logo-opacity" viewBox="0 0 25.77 25.96">
                            <use xlink:href="#logo"></use>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title title-border text-uppercase">{{ __('For Investors') }}@fas('long-arrow-alt-right', 'ml-3')</h3>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('for-investors') }}">{{ __('Portugal real estate investment opportunities in the Algarve and Lisbon. Partner with us and invest in Portugal.') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container space-single">
        <div class="text-center max-width-lg ml-auto mr-auto">
            <h4 class="h1 mb-3 mb-md-5">{{ __('MESPIL Fast Facts') }}</h4>
            <p>{!! __('MESPIL’s leadership team has over 25 years experience in turnkey new development projects, infrastructure construction, as well as extensive renovation projects in Europe. Today, MESPIL’s primary goal is to locate, acquire and develop property for sale in the Algarve, Faro and Lisbon, Portugal. We buy at below replacement cost levels and then bring to market through regeneration, re-branding, and repositioning. This creates successful :link for our project partners and brings much in demand property solutions to our end buyers.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('investment opportunities in Portugal') . '</a>']) !!}</p>
        </div>
    </div>
    <div class="container container-secondary container-bottom space-single">
        <div class="row row-cols-1 row-cols-md-3 text-center container-padding text-white bg-secondary">
            <div class="col py-3">
                <p class="mb-0">{{ __('Over') }}</p>
                <p class="h1 mb-0">{{ __('100 Years') }}</p>
                <p class="mb-0">{{ __('Combined Experience') }}</p>
            </div>
            <div class="col py-3">
                <p class="mb-0">{{ __('Over') }}</p>
                <p class="h1 mb-0">{{ __('500M') }}</p>
                <p class="mb-0">{{ __('Raised') }}</p>
            </div>
            <div class="col py-3">
                <p class="mb-0">{{ __('Investment In') }}</p>
                <p class="h1 mb-0">{{ __('9 Different') }}</p>
                <p class="mb-0">{{ __('Countries') }}</p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        let iterations = 1;
        const video = document.querySelector('#home-video video');
        video.addEventListener('ended', function () {
            this.currentTime = 0;
            if (iterations < 5) {
                this.play();
                iterations++;
            }
        });
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": [
                "Organization",
                "LocalBusiness",
                "RealEstateAgent"
            ],
            "@id": "{{ config('app.url') }}/#RealEstateAgent",
            "url": "{{ config('app.url') }}/",
            "logo": "{{ Helper::autover('/img/{subdomain}/schema/logo.png') }}",
            "email":"mailto:{{ __('mespil.email') }}",
            "priceRange": "$$$$$$",
            "foundingDate": "2006-01-01",
            "founder": [
                {
                    "@type": "Person",
                    "givenName": "Tom",
                    "familyName": "O'Connor",
                    "worksFor": {
                        "@type": "Organization",
                        "name": "MESPIL"
                    },
                    "jobTitle": "{{ addslashes(__('Managing Director')) }}",
                    "email": "mailto:tom@mespil.ie",
                    "image": "{{ Helper::autover('/img/{subdomain}/team/tom-oconnor.jpg') }}",
                    "gender": "male",
                    "url": "{{ Helper::route('profile', 'tom-oconnor') }}",
                    "sameAs" : [
                        "https://www.linkedin.com/in/tom-o-connor-090b9318/"
                    ],
                    "nationality": {
                        "@type": "Country",
                        "name": "Ireland"
                    }
                },
                {
                    "@type": "Person",
                    "givenName": "Andrew",
                    "familyName": "McAdam",
                    "worksFor": {
                        "@type": "Organization",
                        "name": "MESPIL"
                    },
                    "jobTitle": "{{ addslashes(__('Director - Finance')) }}",
                    "email": "mailto:andrew@mespil.ie",
                    "image": "{{ Helper::autover('/img/{subdomain}/team/andrew-mcadam.jpg') }}",
                    "gender": "Male",
                    "url": "{{ Helper::route('profile', 'andrew-mcadam') }}",
                    "sameAs" : [
                        "https://www.linkedin.com/in/andrew-mcadam-95a77930/"
                    ],
                    "nationality": {
                        "@type": "Country",
                        "name": "Ireland"
                    }
                }
            ],
            "legalName": "{{ addslashes(__('Mespil European Ventures Limited')) }}",
            "slogan": "{{ addslashes(__('Bringing Portugal to the World')) }}",
            "award": [
                "{{ addslashes(__('2020 World Travel Awards: Portugal’s Leading Serviced Apartments')) }}",
                "{{ addslashes(__('2020 European Property Awards: Best Serviced Apartment/Condominium Portugal')) }}",
                "{{ addslashes(__('2020 European Property Awards: Best Residential Renovation/Redevelopment Project')) }}"
            ],
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Suite 1, The Eden Gate Centre, Priory Road",
                "addressLocality": "Delgany",
                "addressRegion": "Co. Wicklow",
                "postalCode":"A63 D903",
                "addressCountry": "IE"
            },
            "image": [
                "{{ Helper::autover('/img/{subdomain}/schema/profile.png') }}",
                "{{ Helper::autover('/img/{subdomain}/schema/logo.png') }}",
                "{{ Helper::autover('/img/{subdomain}/schema/logo-symbol.png') }}"
            ],
            "areaServed": [
                {
                    "@type": "Country",
                    "name": "Ireland",
                    "sameAs": "https://en.wikipedia.org/wiki/Ireland"
                },
                {
                    "@type": "Country",
                    "name": "Portugal",
                    "sameAs": "https://en.wikipedia.org/wiki/Portugal"
                }
            ],
            "additionalType": "http://www.productontology.org/id/Real_estate_development",
            "description": "{{ addslashes(__('MESPIL’s leadership team has over 25 years experience in turnkey new development projects, infrastructure construction, as well as extensive renovation projects in Europe. Today, MESPIL’s primary goal is to locate and acquire property in the Algarve, Faro and Lisbon at below replacement cost levels and bring to market through regeneration, re-branding and repositioning creating successful investment opportunities for our project partners & bringing much in demand property solutions to our end buyers. Real Estate investment and development is in our DNA and we are proud to have an experienced leadership team with lifelong careers in investment banking, real estate and the hospitality industries. We believe in Portugal and are passionate about bringing real estate investment potential to our partners. We are direct, decisive and, above all, accountable. We practice sound judgment and common sense in all our investment transactions.')) }}",
            "name": "MESPIL",
            "telephone": "{{ __('mespil.phone.ireland') }}",
            "openingHours": "Mo,Tu,We,Th,Fr 09:00-17:00",
            "hasMap": "https://www.google.com/maps/place/MESPIL/@53.1227456,-6.0791856,17z/data=!4m5!3m4!1s0x48670eb817102bc5:0x19da5fb4a545c0a7!8m2!3d53.1227456!4d-6.0769969",
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "53.1227456",
                "longitude": "-6.0791856"
            },
            "sameAs": [
                "{{ __('mespil.linkedin') }}",
                "{{ __('mespil.facebook') }}",
                "{{ __('mespil.twitter') }}",
                "{{ __('mespil.youtube') }}"
            ],
            "department": [
                {
                    "@type": "RealEstateAgent",
                    "name": "MESPIL",
                    "description": "{{ addslashes(__('Portuguese award winning property developer. Golden Visa eligible properties for sale and real estate investment opportunities in the Algarve and Lisbon, Portugal.')) }}",
                    "telephone": "{{ __('mespil.phone.portugal') }}",
                    "priceRange": "$$$$$$",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "Units 7 / 8 & 9, Vila Sol Plaza (Lote B35), Alto do Semino",
                        "addressLocality": "Quarteira",
                        "addressRegion": "Algarve",
                        "postalCode": "8125-307",
                        "addressCountry": "PT"
                    },
                    "image": [
                        "{{ Helper::autover('/img/{subdomain}/schema/profile.png') }}",
                        "{{ Helper::autover('/img/{subdomain}/schema/logo.png') }}",
                        "{{ Helper::autover('/img/{subdomain}/schema/logo-symbol.png') }}"
                    ],
                    "geo": {
                        "@type": "GeoCoordinates",
                        "latitude": "37.083980",
                        "longitude": "-8.083847"
                    },
                    "areaServed": [
                        {
                            "@type": "City",
                            "name": [
                                "Faro",
                                "Vilamoura",
                                "Lisbon"
                            ]
                        }
                    ]
                }
            ]
        }
    </script>
@endpush
