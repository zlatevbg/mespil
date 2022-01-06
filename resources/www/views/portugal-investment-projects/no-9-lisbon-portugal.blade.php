@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('[Successfully Funded] No.9, Lisbon real estate investment opportunity'))
@section('description', __('Invest in No.9, Lisbon, Portugal. Real estate investment opportunity. Off market distressed property, strong returns, award winning developer MESPIL'))

@section('content')
    {{-- <div id="property-video">
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-9-lisbon-portugal-inverted.svg') }}" alt="{{ __('Logo: No.9, Lisbon, Portugal') }}" height="124" width="200">
            </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" autoplay muted playsinline preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-lisbon-portugal/poster.jpg') }}">
                <source src="/video/no-9-lisbon-portugal.mp4" type="video/mp4"/>
            </video>
        </div>
    </div> --}}
    <div class="property-hero">
        <div class="embed-responsive embed-responsive-16by9 h-100">
            <img loading="eager" class="embed-responsive-item" src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-lisbon-portugal/hero.jpg') }}" alt="{{ __('3D image of No.9, Lisbon, Portugal') }}" height="1080" width="1920">
        </div>
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-9-lisbon-portugal-inverted.svg') }}" alt="{{ __('Logo: No.9, Lisbon, Portugal') }}" height="200" width="124" style="--property-logo-width: 62px; --property-logo-height: 100px">
            </div>
        </div>
    </div>

    <div class="container container-md-fluid space-single-top">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-start align-items-center mr-3" href="{{ Helper::route('investment-project', 'no-57-lisbon-portugal') }}">@fas('long-arrow-alt-left', 'mr-3 fa-2x')<span class="text-nowrap">{{ __('Previous project') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('No.57 Lisbon, Portugal') }}</span></a>
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-end align-items-center ml-3 text-right" href="{{ Helper::route('investment-project', 'pine-hills-vilamoura-portugal') }}"><span class="text-nowrap">{{ __('Next project') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('Pine Hills Vilamoura, Portugal') }}</span>@fas('long-arrow-alt-right', 'ml-3 fa-2x')</a>
        </div>
    </div>

    <div class="container space-double space-single-top">
        <div class="row row-cols-1 row-cols-xl-2 mb-n5">
            <div class="col mb-5 position-relative">
                <h1 class="title-border title-border-green mb-5">{{ __('No.9') }}<br><small class="h3 font-weight-normal">{{ __('Property investment in Lisbon, Portugal') }}</small></h1>
                <p class="project-status status-green text-white p-2">{{ __('Successfully Funded') }}</p>
                <p>{{ __('MESPIL are excited to bring a fantastic regeneration/re-development project in a prime residential area of Lisbon, Portugal to our investor club') }}</p>
                <p>{!! __('MESPIL have purchased No.9 Lisbon below market value through key relationships bringing to market much in demand real estate also eligible for the :link.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('€350K Golden Visa') . '</a>']) !!}</p>
                <div class="bg-light py-3">
                    <ul class="m-0 pr-4">
                        <li>{{ __('17 apartments and 5 commercial units') }}</li>
                        <li>{{ __('6 month sales program with a 12 month refurbishment program') }}</li>
                        <li>{{ __('JLL projecting all units sold < 3 mths') }}</li>
                    </ul>
                </div>
            </div>
            <div class="col mb-5">
                <div class="project-successfully-funded mb-3 p-3">
                    <p class="lead">{{ __('No.9 Lisbon project is successfully funded.') }}</p>
                    @if ($count)
                        <ol class="mb-0">
                            <li>{!! __('You can browse for alternative :link', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '#funding-required">' . __('investment options in Portugal') . '</a>']) !!}</li>
                            <li>{!! __('You can still :link', ['link' => '<a class="internal-link" href="' . Helper::route('property-for-sale', 'no-9-lisbon-portugal') . '">' . __('buy apartments in No.9 Lisbon') . '</a>']) !!}</li>
                        </ol>
                    @else
                        <p>{!! __('You can browse for alternative :link', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '#funding-required">' . __('investment options in Portugal') . '</a>']) !!}</p>
                    @endif
                </div>
                <h2>{{ __('Investment Summary') }}</h2>
                <div class="table-responsive mt-4">
                    <table class="table table-hover mb-0">
                        <tbody>
                            <tr>
                                <th class="align-middle">{{ __('Investment') }}</th>
                                <td class="text-primary font-weight-bold h3 align-middle text-nowrap">{{ __('€ 3 000 000') }}</td>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('Term') }}</th>
                                <td>{{ __('12 months') }}</td>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('Security') }}</th>
                                <td>{{ __('Second charge on property') }}</td>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('Exit') }}</th>
                                <td>
                                    <p class="m-0">{{ __('Building has been acquired.') }}</p>
                                    <p>{{ __('Construction works commenced Jan 2020') }}</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('Sales Cycle') }}</th>
                                <td>
                                    <p class="m-0">{{ __('Estimate all units sold in calendar year.') }}</p>
                                    <p>{{ __('+25% units already deposited') }}</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container space-single">
        <div class="row row-cols-1 row-cols-md-2 mb-n5 photoswipe-wrapper" data-photoswipe-gid="gallery">
            <a class="photoswipe col mb-5" href="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-lisbon-portugal/gallery/3d-facade.jpg') }}" data-photoswipe-pid="3d-facade" data-photoswipe-size="2500x2083"><img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-lisbon-portugal/gallery/thumbnails/3d-facade.jpg') }}" class="img-fluid img-thumbnail" alt="{{ __('3D image of No.9 facade') }}"></a>
            <a class="photoswipe col mb-5" href="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-lisbon-portugal/gallery/lisbon-tram.jpg') }}" data-photoswipe-pid="lisbon-tram" data-photoswipe-size="2560x1708"><img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-lisbon-portugal/gallery/thumbnails/lisbon-tram.jpg') }}" class="img-fluid img-thumbnail" alt="{{ __('Lisbon Tram') }}"></a>
        </div>
    </div>

    <div class="container space-single">
        <div class="card card-home card-font-sm flex-lg-row align-items-center">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 overflow-hidden">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/portugal/lisbon/guide.jpg') }}" class="img-fit-300" alt="{{ __('Lisbon, Portugal') }}">
                </div>
                <div class="col-lg-6">
                    <div class="card-body">
                        <h3 class="title-border mb-4 text-uppercase">{{ __('Lisbon Real Estate Location Guide') }}</h3>
                        <p class="card-text">{!! __('Lisbon, the capital of Portugal, is one of the oldest cities in Europe with impressive preserved architecture, warm climate with many sunny days and fascinating locations to visit. <strong>A truly desirable location for property investors!</strong>') !!}</p>
                        <a class="btn btn-lg btn-outline-secondary" href="{{ Helper::route('portugal', 'lisbon') }}">{{ __('Read the guide') }}@fas('long-arrow-alt-right', 'ml-3')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid project-map-wrapper space-single bg-light">
        <div class="container">
            <div id="project-map"></div>
        </div>
    </div>

    <div class="container space-single">
        <ol class="poi-wrapper list-unstyled mb-0">
            <li><a data-map-type="area" class="poi py-1" href="#project-map"><span class="fa-stack">@fas('circle', 'fa-stack-2x text-primary opacity-10') @far('circle', 'text-primary fa-stack-2x')</span><span>{{ __('No.9 Location') }}</span></a></li>
            <li><a data-map-type="airport" class="poi py-1 text-secondary" href="#project-map"><span class="fa-stack">@fas('circle', 'fa-stack-2x text-blue') @fas('plane', 'fa-inverse fa-stack-1x fa-rotate--30')</span><span>{{ __('Lisbon Airport') }}</span></a></li>
            <li><a data-map-type="subway" class="poi py-1 text-secondary" href="#project-map"><span class="fa-stack">@fas('circle', 'fa-stack-2x text-danger') @fas('subway', 'fa-inverse fa-stack-1x')</span><span>{{ __('Subway Stations') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="1" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">1</span></span><span>{{ __('Avenida da Liberdade') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="2" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">2</span></span><span>{{ __('Parque Eduardo VII Park') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="3" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">3</span></span><span>{{ __('Alameda Dom Afonso Henriques Garden') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="4" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">4</span></span><span>{{ __('Culturgest') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="5" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">5</span></span><span>{{ __('Palace Fronteira') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="6" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">6</span></span><span>{{ __('University of Lisbon') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="7" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">7</span></span><span>{{ __('Higher Technical Institute') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="8" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">8</span></span><span>{{ __('Bela Vista Park') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="9" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">9</span></span><span>{{ __('Zoo of Lisbon') }}</span></a></li>
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
                type: 'airport',
                lat: 38.775577,
                lng: -9.135431,
                title: '{{ __('Lisbon Airport') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/lisbon-airport.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Lisbon Airport') }}"><figcaption class="figure-caption">{{ __('Lisbon Airport') }}</figcaption></figure>',
                icon: 'iconAirport',
            },
            {
                type: 'subway',
                lat: 38.743005,
                lng: -9.133829,
                title: '{{ __('Subway Station') }}',
                icon: 'iconSubway',
            },
            {
                type: 'subway',
                lat: 38.735968,
                lng: -9.145304,
                title: '{{ __('Subway Station') }}',
                icon: 'iconSubway',
            },
            {
                type: 'subway',
                lat: 38.747592,
                lng: -9.148084,
                title: '{{ __('Subway Station') }}',
                icon: 'iconSubway',
            },
            {
                type: 'subway',
                lat: 38.738190,
                lng: -9.158511,
                title: '{{ __('Subway Station') }}',
                icon: 'iconSubway',
            },
            {
                type: 'subway',
                lat: 38.734701,
                lng: -9.153025,
                title: '{{ __('Subway Station') }}',
                icon: 'iconSubway',
            },
            {
                type: 'subway',
                lat: 38.760256,
                lng: -9.157901,
                title: '{{ __('Subway Station') }}',
                icon: 'iconSubway',
            },
            {
                type: 'subway',
                lat: 38.747760,
                lng: -9.118457,
                title: '{{ __('Subway Station') }}',
                icon: 'iconSubway',
            },
            {
                type: 'subway',
                lat: 38.727080,
                lng: -9.134901,
                title: '{{ __('Subway Station') }}',
                icon: 'iconSubway',
            },
            {
                type: 'subway',
                lat: 38.720166,
                lng: -9.154139,
                title: '{{ __('Subway Station') }}',
                icon: 'iconSubway',
            },
            {
                type: 'poi',
                lat: 38.720604,
                lng: -9.145913,
                title: '{{ __('Avenida da Liberdade') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/avenida-da-liberdade-lisbon.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Avenida da Liberdade') }}"><figcaption class="figure-caption">{{ __('Avenida da Liberdade') }}</figcaption></figure>',
                id: '1',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 38.728601,
                lng: -9.152736,
                title: '{{ __('Parque Eduardo VII Park') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/parque-eduardo-vii-park.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Parque Eduardo VII Park') }}"><figcaption class="figure-caption">{{ __('Parque Eduardo VII Park') }}</figcaption></figure>',
                id: '2',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 38.737160,
                lng: -9.133015,
                title: '{{ __('Alameda Dom Afonso Henriques Garden') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/alameda-dom-afonso-henriques-garden.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Alameda Dom Afonso Henriques Garden') }}"><figcaption class="figure-caption">{{ __('Alameda Dom Afonso Henriques Garden') }}</figcaption></figure>',
                id: '3',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 38.741287,
                lng: -9.141590,
                title: '{{ __('Culturgest') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/culturgest.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Culturgest') }}"><figcaption class="figure-caption">{{ __('Culturgest') }}</figcaption></figure>',
                id: '4',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 38.740098,
                lng: -9.180310,
                title: '{{ __('Palace Fronteira') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/palace-fronteira.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Palace Fronteira') }}"><figcaption class="figure-caption">{{ __('Palace Fronteira') }}</figcaption></figure>',
                id: '5',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 38.752871,
                lng: -9.157795,
                title: '{{ __('University of Lisbon') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/university-of-lisbon.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('University of Lisbon') }}"><figcaption class="figure-caption">{{ __('University of Lisbon') }}</figcaption></figure>',
                id: '6',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 38.736846,
                lng: -9.138608,
                title: '{{ __('Higher Technical Institute') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/higher-technical-institute.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Higher Technical Institute') }}"><figcaption class="figure-caption">{{ __('Higher Technical Institute') }}</figcaption></figure>',
                id: '7',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 38.750026,
                lng: -9.126203,
                title: '{{ __('Bela Vista Park') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/bela-vista-park.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Bela Vista Park') }}"><figcaption class="figure-caption">{{ __('Bela Vista Park') }}</figcaption></figure>',
                id: '8',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 38.744403,
                lng: -9.170720,
                title: '{{ __('Zoo of Lisbon') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/zoo-of-lisbon.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Zoo of Lisbon') }}"><figcaption class="figure-caption">{{ __('Zoo of Lisbon') }}</figcaption></figure>',
                id: '9',
                labelColor: '#ffffff',
                icon: 'icon',
            },
        ];

        let map;
        let InfoWindow;
        const markers = [];
        const center = {lat: 38.743430, lng: -9.135171};

        function initMap() {
            infoWindow = new google.maps.InfoWindow();

            map = new google.maps.Map(document.getElementById('project-map'), {
                zoom: 13,
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

            const iconAirport = {
                url: "{{ Helper::autover('/svg/{subdomain}/marker-airport.svg') }}",
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(18, 18),
                scaledSize: new google.maps.Size(36, 36)
            }

            const iconSubway = {
                url: "{{ Helper::autover('/svg/{subdomain}/marker-subway.svg') }}",
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(18, 18),
                scaledSize: new google.maps.Size(36, 36)
            }

            const icons = {
                icon: icon,
                iconAirport: iconAirport,
                iconSubway: iconSubway
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
