@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('No.24, Albufeira real estate investment | Algarve property investment'))
@section('description', __('Invest in No.24, Albufeira, Portugal. Real estate investment opportunity for a private debt lender. Fully secured, off market distressed property, strong IRR.'))

@section('content')
    {{-- <div id="property-video">
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-24-albufeira-portugal-inverted.svg') }}" alt="{{ __('Logo: No.24, Albufeira, Portugal') }}" height="124" width="200">
            </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" autoplay muted playsinline preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/investment-projects/no-24-albufeira-portugal/poster.jpg') }}">
                <source src="/video/no-24-albufeira-portugal.mp4" type="video/mp4"/>
            </video>
        </div>
    </div> --}}
    <div class="property-hero">
        <div class="embed-responsive embed-responsive-16by9 h-100">
            <img loading="eager" class="embed-responsive-item" src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-24-albufeira-portugal/hero.jpg') }}" alt="{{ __('Facade of No.24, Albufeira, Portugal') }}" height="1080" width="1920">
        </div>
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-24-albufeira-portugal-inverted.svg') }}" alt="{{ __('Logo: No.24, Albufeira, Portugal') }}" height="200" width="131" style="--property-logo-width: 66px; --property-logo-height: 100px">
            </div>
        </div>
    </div>

    <div class="container container-md-fluid space-single-top">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-start align-items-center mr-3" href="{{ Helper::route('investment-project', 'pine-hills-vilamoura-portugal') }}">@fas('long-arrow-alt-left', 'mr-3 fa-2x')<span class="text-nowrap">{{ __('Previous project') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('Pine Hills Vilamoura, Portugal') }}</span></a>
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-end align-items-center ml-3 text-right" href="{{ Helper::route('investment-project', 'no-37-lisbon-portugal') }}"><span class="text-nowrap">{{ __('Next project') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('No.37 Lisbon, Portugal') }}</span>@fas('long-arrow-alt-right', 'ml-3 fa-2x')</a>
        </div>
    </div>

    <div class="container space-double space-single-top">
        <div class="row row-cols-1 row-cols-xl-2 mb-n5">
            <div class="col mb-5 position-relative">
                <h1 class="title-border title-border-orange mb-5">{{ __('No.24') }}<br><small class="h3 font-weight-normal">{{ __('Property investment in Albufeira, Portugal') }}</small></h1>
                <p class="project-status status-orange text-white p-2">{{ __('Funding Required') }}</p>
                <p>{!! __('Unique opportunity for a Private Debt Lender to participate in a fully secured, exciting regeneration/re-development project in the prime residential and commercial area of Albufeira, a major European holiday destination. MESPIL have off-market access to this coastal city development below market value through key relationships bringing much in demand real estate with target markets including lifestyle, retirement and :link clients.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('Golden Visa') . '</a>']) !!}</p>
                <div class="bg-light py-3">
                    <ul class="m-0 pr-4">
                        <li>{{ __('48 Units, a mix of Studio, T1, T2 and T3 units') }}</li>
                        <li>{{ __('11 Commercial Units') }}</li>
                        <li>{{ __('12 month refurbishment program') }}</li>
                        <li>{{ __('Projecting all units sold <18 months') }}</li>
                    </ul>
                </div>
            </div>
            <div class="col mb-5">
                <h2>{{ __('Investment Summary') }}</h2>
                <div class="table-responsive mt-4">
                    <table class="table table-hover mb-0">
                        <tbody>
                            <tr>
                                <th class="align-middle">{{ __('Investment') }}</th>
                                <td class="text-primary font-weight-bold h3 align-middle text-nowrap">{{ __('€ 6 000 000') }}</td>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('Term') }}</th>
                                <td>{{ __('24 months') }}</td>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('Security') }}</th>
                                <td>{{ __('Senior Debt, First Lien') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container space-single">
        <div class="row row-cols-1 row-cols-md-2 mb-n5 photoswipe-wrapper" data-photoswipe-gid="gallery">
            <a class="photoswipe col mb-5" href="{{ Helper::autover('/img/{subdomain}/investment-projects/no-24-albufeira-portugal/gallery/facade.jpg') }}" data-photoswipe-pid="facade" data-photoswipe-size="1920x1080"><img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-24-albufeira-portugal/gallery/thumbnails/facade.jpg') }}" class="img-fluid img-thumbnail" alt="{{ __('Facade of No.24 Albufeira, Algarve') }}"></a>
            <a class="photoswipe col mb-5" href="{{ Helper::autover('/img/{subdomain}/investment-projects/no-24-albufeira-portugal/gallery/albufeira.jpg') }}" data-photoswipe-pid="albufeira" data-photoswipe-size="1750x1000"><img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-24-albufeira-portugal/gallery/thumbnails/albufeira.jpg') }}" class="img-fluid img-thumbnail" alt="{{ __('Albufeira Beach, Algarve') }}"></a>
        </div>
    </div>

    <div class="container-fluid project-map-wrapper space-single bg-light">
        <div class="container">
            <div id="project-map"></div>
        </div>
    </div>

    <div class="container space-single">
        <ol class="poi-wrapper list-unstyled mb-0">
            <li><a data-map-type="area" class="poi py-1" href="#project-map"><span class="fa-stack">@fas('circle', 'fa-stack-2x text-primary opacity-10') @far('circle', 'text-primary fa-stack-2x')</span><span>{{ __('No.24 Location') }}</span></a></li>
            <li><a data-map-type="beach" class="poi py-1 text-secondary" href="#project-map"><span class="fa-stack">@fas('circle', 'fa-stack-2x text-yellow') @fas('umbrella-beach', 'fa-inverse fa-stack-1x')</span><span>{{ __('Beaches') }}</span></a></li>
            <li><a data-map-type="golf" class="poi py-1 text-secondary" href="#project-map"><span class="fa-stack">@fas('circle', 'fa-stack-2x text-green') @fas('golf-ball', 'fa-inverse fa-stack-1x')</span><span>{{ __('Golf Courses') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="1" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">1</span></span><span>{{ __('W Algarve Hotel & Residences') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="2" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">2</span></span><span>{{ __('Marina Albufeira') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="3" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">3</span></span><span>{{ __('Old Albufeira Historic Town') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="4" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">4</span></span><span>{{ __('Marina Vilamoura') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="5" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">5</span></span><span>{{ __('Slide & Splash Water Park') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="6" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">6</span></span><span>{{ __('Aqualand Algarve') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="7" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">7</span></span><span>{{ __('Zoomarine Algarve') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="8" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">8</span></span><span>{{ __('Benagil Caves') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="9" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">9</span></span><span>{{ __('Algarve Shopping') }}</span></a></li>
        </ol>
    </div>
@endsection

@push('styles')
    <link href="{{ Helper::autover('/css/{subdomain}/vendor/photoswipe.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script>
        loadjs(
            [
                '{{ Helper::autover('/js/{subdomain}/vendor/photoswipe.js') }}',
                '{{ Helper::autover('/js/{subdomain}/photoswipe.js') }}',
                'https://maps.googleapis.com/maps/api/js?key=AIzaSyAJYfP60IN5xtd1gFYq6Sx3-Zo_E5gIkUI&language={{ Language::locale() }}&callback=initMap',
            ],
            {
                success: function() {
                    photoswipe.setup('.photoswipe-wrapper')
                },
                async: false,
            }
        );

        const locations = [
            {
                type: 'beach',
                lat: 37.073860,
                lng: -8.293909,
                title: '{{ __('Beach Coelha') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/beach-coelha.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Beach Coelha') }}"><figcaption class="figure-caption">{{ __('Beach Coelha') }}</figcaption></figure>',
                icon: 'iconBeach',
            },
            {
                type: 'beach',
                lat: 37.076166,
                lng: -8.277333,
                title: '{{ __('Beach Arrifes') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/beach-arrifes.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Beach Arrifes') }}"><figcaption class="figure-caption">{{ __('Beach Arrifes') }}</figcaption></figure>',
                icon: 'iconBeach',
            },
            {
                type: 'beach',
                lat: 37.084471,
                lng: -8.237978,
                title: '{{ __('Beach Alemães') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/beach-alemaes.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Beach Alemães') }}"><figcaption class="figure-caption">{{ __('Beach Alemães') }}</figcaption></figure>',
                icon: 'iconBeach',
            },
            {
                type: 'beach',
                lat: 37.084884,
                lng: -8.220592,
                title: '{{ __('Beach Oura') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/beach-oura.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Beach Oura') }}"><figcaption class="figure-caption">{{ __('Beach Oura') }}</figcaption></figure>',
                icon: 'iconBeach',
            },
            {
                type: 'beach',
                lat: 37.087946,
                lng: -8.214425,
                title: '{{ __('Beach Santa Eulália') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/beach-santa-eulalia.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Beach Santa Eulália') }}"><figcaption class="figure-caption">{{ __('Beach Santa Eulália') }}</figcaption></figure>',
                icon: 'iconBeach',
            },
            {
                type: 'beach',
                lat: 37.091042,
                lng: -8.183370,
                title: '{{ __('Beach Barranco das Belharucas') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/beach-barranco-das-belharucas.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Beach Barranco das Belharucas') }}"><figcaption class="figure-caption">{{ __('Beach Barranco das Belharucas') }}</figcaption></figure>',
                icon: 'iconBeach',
            },
            {
                type: 'beach',
                lat: 37.097933,
                lng: -8.347751,
                title: '{{ __('Beach Salgados') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/beach-salgados.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Beach Salgados') }}"><figcaption class="figure-caption">{{ __('Beach Salgados') }}</figcaption></figure>',
                icon: 'iconBeach',
            },
            {
                type: 'beach',
                lat: 37.097256,
                lng: -8.385700,
                title: '{{ __('Beach Nossa Senhora da Rocha') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/beach-nossa-senhora-da-rocha.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Beach Nossa Senhora da Rocha') }}"><figcaption class="figure-caption">{{ __('Beach Nossa Senhora da Rocha') }}</figcaption></figure>',
                icon: 'iconBeach',
            },
            {
                type: 'golf',
                lat: 37.093427,
                lng: -8.324253,
                title: '{{ __('Salgados Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/salgados-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Salgados Golf Course') }}"><figcaption class="figure-caption">{{ __('Salgados Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'golf',
                lat: 37.096932,
                lng: -8.206131,
                title: '{{ __('Balaia Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/balaia-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Balaia Golf Course') }}"><figcaption class="figure-caption">{{ __('Balaia Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'golf',
                lat: 37.166731,
                lng: -8.424683,
                title: '{{ __('Silves Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/silves-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Silves Golf Course') }}"><figcaption class="figure-caption">{{ __('Silves Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'golf',
                lat: 37.096541,
                lng: -8.177590,
                title: '{{ __('Pine Cliffs Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/pine-cliffs-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Pine Cliffs Golf Course') }}"><figcaption class="figure-caption">{{ __('Pine Cliffs Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'poi',
                lat: 37.079410,
                lng: -8.301707,
                title: '{{ __('W Algarve Hotel & Residences') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/w-algarve-hotel-residences.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('W Algarve Hotel & Residences') }}"><figcaption class="figure-caption">{{ __('W Algarve Hotel & Residences') }}</figcaption></figure>',
                id: '1',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.084985,
                lng: -8.266005,
                title: '{{ __('Marina Albufeira') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/marina-albufeira.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Marina Albufeira') }}"><figcaption class="figure-caption">{{ __('Marina Albufeira') }}</figcaption></figure>',
                id: '2',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.088516,
                lng: -8.252737,
                title: '{{ __('Old Albufeira Historic Town') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/old-albufeira-historic-town.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Old Albufeira Historic Town') }}"><figcaption class="figure-caption">{{ __('Old Albufeira Historic Town') }}</figcaption></figure>',
                id: '3',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.077586,
                lng: -8.122025,
                title: '{{ __('Marina Vilamoura') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/marina-vilamoura.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Marina Vilamoura') }}"><figcaption class="figure-caption">{{ __('Marina Vilamoura') }}</figcaption></figure>',
                id: '4',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.139603,
                lng: -8.473706,
                title: '{{ __('Slide & Splash Water Park') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/slide-splash-water-park.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Slide & Splash Water Park') }}"><figcaption class="figure-caption">{{ __('Slide & Splash Water Park') }}</figcaption></figure>',
                id: '5',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.135717,
                lng: -8.366039,
                title: '{{ __('Aqualand Algarve') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/aqualand-algarve.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Aqualand Algarve') }}"><figcaption class="figure-caption">{{ __('Aqualand Algarve') }}</figcaption></figure>',
                id: '6',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.126981,
                lng: -8.314209,
                title: '{{ __('Zoomarine Algarve') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/zoomarine-algarve.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Zoomarine Algarve') }}"><figcaption class="figure-caption">{{ __('Zoomarine Algarve') }}</figcaption></figure>',
                id: '7',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.087319,
                lng: -8.423700,
                title: '{{ __('Benagil Caves') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/benagil-caves.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Benagil Caves') }}"><figcaption class="figure-caption">{{ __('Benagil Caves') }}</figcaption></figure>',
                id: '8',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.127573,
                lng: -8.279764,
                title: '{{ __('Algarve Shopping') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/algarve-shopping.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Algarve Shopping') }}"><figcaption class="figure-caption">{{ __('Algarve Shopping') }}</figcaption></figure>',
                id: '9',
                labelColor: '#ffffff',
                icon: 'icon',
            },
        ];

        let map;
        let InfoWindow;
        const markers = [];
        const center = {lat: 37.089357, lng: -8.253386};

        function initMap() {
            infoWindow = new google.maps.InfoWindow();

            map = new google.maps.Map(document.getElementById('project-map'), {
                zoom: 12,
                maxZoom: 16,
                center: center,
                streetViewControl: false,
                mapTypeControl: false,
                scaleControl: false,
                rotateControl: false,
                clickableIcons: false,
                styles: [
                  {
                    featureType: 'all',
                    stylers: [{ "saturation": -100 }]
                  },
                  {
                    featureType: 'poi',
                    stylers: [{visibility: 'off'}]
                  },
                  {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                  }
                ],
            });

            const area = new google.maps.Circle({
              strokeColor: '#bc954d',
              strokeOpacity: 1,
              strokeWeight: 5,
              fillColor: '#bc954d',
              fillOpacity: 0.2,
              map: map,
              center: center,
              radius: 5000,
            });

            const icon = {
                path: google.maps.SymbolPath.CIRCLE,
                scale: 12,
                fillOpacity: 1,
                strokeOpacity: 1,
            }

            const iconGolf = {
                url: "{{ Helper::autover('/svg/{subdomain}/marker-golf.svg') }}",
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(18, 18),
                scaledSize: new google.maps.Size(36, 36)
            }

            const iconBeach = {
                url: "{{ Helper::autover('/svg/{subdomain}/marker-beach.svg') }}",
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(18, 18),
                scaledSize: new google.maps.Size(36, 36)
            }

            const icons = {
                icon: icon,
                iconGolf: iconGolf,
                iconBeach: iconBeach
            };

            for (let i = 0; i < locations.length; i++) {
                if (locations[i].icon == 'icon') {
                    icons[locations[i].icon].fillColor = locations[i].color || '#363636';
                    icons[locations[i].icon].strokeColor = locations[i].color || '#363636';
                }

                markers.push(new google.maps.Marker({
                    map: map,
                    position: {lat: locations[i].lat, lng: locations[i].lng},
                    title: locations[i].title,
                    icon: icons[locations[i].icon],
                    label: locations[i].id ? {
                        text: locations[i].id,
                        color: locations[i].labelColor,
                        fontWeight: 'bold',
                        fontSize: '1.25rem',
                    } : null,
                }));

                markers[i].addListener('click', function() {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'poi', {'event_category': 'Google Maps', 'event_action': 'Marker', 'event_label': locations[i].title});
                    }

                    if (locations[i].content) {
                        infoWindow.setContent(locations[i].content);
                        infoWindow.open(map, markers[i]);
                    } else {
                        infoWindow.close(map);
                    }
                });
            }

            google.maps.event.addDomListener(window, 'resize', function() {
                google.maps.event.trigger(map, 'resize');
                map.panTo(center);
            });
        }

        document.querySelector('.poi-wrapper').addEventListener('click', function(e) {
            // e.preventDefault();

            const target = e.target.closest('a.poi');
            const type = target.getAttribute('data-map-type');
            const id = target.getAttribute('data-map-id');

            if (type == 'area') {
                map.panTo(center);
                infoWindow.close(map);

                if (typeof gtag != 'undefined') {
                    gtag('event', 'poi', {'event_category': 'Google Maps', 'event_action': 'POI', 'event_label': 'Area'});
                }
            } else {
                for (let i = 0; i < locations.length; i++) {
                    if (locations[i].type == type && (!id || id == locations[i].id)) {
                        map.panTo({lat: locations[i].lat, lng: locations[i].lng});

                        if (typeof gtag != 'undefined') {
                            gtag('event', 'poi', {'event_category': 'Google Maps', 'event_action': 'POI', 'event_label': locations[i].title});
                        }

                        if (locations[i].content) {
                            infoWindow.setContent(locations[i].content);
                            infoWindow.open(map, markers[i]);
                        } else {
                            infoWindow.close(map);
                        }
                        break;
                    }
                }
            }
        });
    </script>
@endpush
