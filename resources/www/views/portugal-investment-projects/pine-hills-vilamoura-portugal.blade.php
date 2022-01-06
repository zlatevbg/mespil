@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('[Successfully Funded] Pine Hills, Vilamoura real estate investment'))
@section('description', __('Invest in Pine Hills, Vilamoura, Portugal. Real estate investment opportunity in prestigious Golden Triangle in the Algarve. Off market investment property.'))

@section('content')
    {{-- <div id="property-video">
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-pine-hills-vilamoura-portugal-inverted.svg') }}" alt="{{ __('Logo: Pine Hills, Vilamoura, Portugal') }}" height="124" width="200">
            </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" autoplay muted playsinline preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/investment-projects/pine-hills-vilamoura-portugal/poster.jpg') }}">
                <source src="/video/pine-hills-vilamoura-portugal.mp4" type="video/mp4"/>
            </video>
        </div>
    </div> --}}
    <div class="property-hero">
        <div class="embed-responsive embed-responsive-16by9 h-100">
            <img loading="eager" class="embed-responsive-item" src="{{ Helper::autover('/img/{subdomain}/investment-projects/pine-hills-vilamoura-portugal/hero.jpg') }}" alt="{{ __('Aerial view of Pine Hills, Vilamoura, Portugal') }}" height="1080" width="1920">
        </div>
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-pine-hills-vilamoura-portugal-inverted.svg') }}" alt="{{ __('Logo: Pine Hills, Vilamoura, Portugal') }}" height="124" width="200" style="--property-logo-width: 100px; --property-logo-height: 62px">
            </div>
        </div>
    </div>

    <div class="container container-md-fluid space-single-top">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-start align-items-center mr-3" href="{{ Helper::route('investment-project', 'no-9-lisbon-portugal') }}">@fas('long-arrow-alt-left', 'mr-3 fa-2x')<span class="text-nowrap">{{ __('Previous project') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('No.9 Lisbon, Portugal') }}</span></a>
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-end align-items-center ml-3 text-right" href="{{ Helper::route('investment-project', 'no-24-albufeira-portugal') }}"><span class="text-nowrap">{{ __('Next project') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('No.24 Albufeira, Portugal') }}</span>@fas('long-arrow-alt-right', 'ml-3 fa-2x')</a>
        </div>
    </div>

    <div class="container space-double space-single-top">
        <div class="row row-cols-1 row-cols-xl-2 mb-n5">
            <div class="col mb-5 position-relative">
                <h1 class="title-border title-border-green mb-5">{{ __('Pine Hills') }}<br><small class="h3 font-weight-normal">{{ __('Property investment in Vilamoura, Portugal') }}</small></h1>
                <p class="project-status status-green text-white p-2">{{ __('Successfully Funded') }}</p>
                <p>{{ __('MESPIL are excited to bring a re-finance project in a prime residential area of Vilamoura, one of the 3 corners of the prestigious Golden Triangle in the Algarve, Portugal to our investor club. MESPIL purchased this project off-market and below market value through Novo Banco in late 2017.') }}</p>
                <div class="bg-light py-3">
                    <ul class="m-0 pr-4">
                        <li>{{ __('55 apartments') }}</li>
                        <li>{{ __('12 month refurbishment & upgrade program completed in 2018/19') }}</li>
                        <li>{{ __('80% apartments already sold') }}</li>
                        <li>{{ __('11 units to be sold (7 units deposited)') }}</li>
                    </ul>
                </div>
            </div>
            <div class="col mb-5">
                <div class="project-successfully-funded mb-3 p-3">
                    <p class="lead">{{ __('Pine Hills Vilamoura project is successfully funded.') }}</p>
                    @if ($count)
                        <ol class="mb-0">
                            <li>{!! __('You can browse for alternative :link', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '#funding-required">' . __('investment options in Portugal') . '</a>']) !!}</li>
                            <li>{!! __('You can still :link', ['link' => '<a class="internal-link" href="' . Helper::route('property-for-sale', 'pine-hills-vilamoura-portugal') . '">' . __('buy apartments in Pine Hills Vilamoura') . '</a>']) !!}</li>
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
                                <td class="text-primary font-weight-bold h3 align-middle text-nowrap">{{ __('€ 750 000') }}</td>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('Term') }}</th>
                                <td>{{ __('12 months') }}</td>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('Security') }}</th>
                                <td>{{ __('Second charge on property (Total LTV <30%)') }}</td>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('Exit') }}</th>
                                <td>{{ __('Estimate all units sold within 12 months') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container space-single">
        <div class="row row-cols-1 row-cols-md-2 mb-n5 photoswipe-wrapper" data-photoswipe-gid="gallery">
            <a class="photoswipe col mb-5" href="{{ Helper::autover('/img/{subdomain}/investment-projects/pine-hills-vilamoura-portugal/gallery/aerial.jpg') }}" data-photoswipe-pid="aerial" data-photoswipe-size="2560x1705"><img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/investment-projects/pine-hills-vilamoura-portugal/gallery/thumbnails/aerial.jpg') }}" class="img-fluid img-thumbnail" alt="{{ __('Aerial view of Pine Hills, Vilamoura, Portugal') }}"></a>
            <a class="photoswipe col mb-5" href="{{ Helper::autover('/img/{subdomain}/investment-projects/pine-hills-vilamoura-portugal/gallery/marina-vilamoura.jpg') }}" data-photoswipe-pid="marina-vilamoura" data-photoswipe-size="1620x1080"><img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/investment-projects/pine-hills-vilamoura-portugal/gallery/thumbnails/marina-vilamoura.jpg') }}" class="img-fluid img-thumbnail" alt="{{ __('Marina Vilamoura, Algarve, Portugal') }}"></a>
        </div>
    </div>

    <div class="container space-single">
        <div class="card card-home card-font-sm flex-lg-row align-items-center">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 overflow-hidden">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/portugal/vilamoura/guide.jpg') }}" class="img-fit-300" alt="{{ __('Vilamoura, Portugal') }}">
                </div>
                <div class="col-lg-6">
                    <div class="card-body">
                        <h3 class="title-border mb-4 text-uppercase">{{ __('Vilamoura Real Estate Location Guide') }}</h3>
                        <p class="card-text">{!! __('Vilamoura is one of the largest recreation centres in Europe. The resort town is known for its natural beauty, warm climate, mineral springs and peaceful relaxation. :strong', ['strong' => '<strong>' . __('The perfect place for seafood and wine lovers!') . '</strong>']) !!}</p>
                        <a class="btn btn-lg btn-outline-secondary" href="{{ Helper::route('portugal', 'vilamoura') }}">{{ __('Read the guide') }}@fas('long-arrow-alt-right', 'ml-3')</a>
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
            <li><a data-map-type="area" class="poi py-1" href="#project-map"><span class="fa-stack">@fas('circle', 'fa-stack-2x text-primary opacity-10') @far('circle', 'text-primary fa-stack-2x')</span><span>{{ __('Pine Hills Location') }}</span></a></li>
            <li><a data-map-type="airport" class="poi py-1 text-secondary" href="#project-map"><span class="fa-stack">@fas('circle', 'fa-stack-2x text-blue') @fas('plane', 'fa-inverse fa-stack-1x fa-rotate--30')</span><span>{{ __('Faro Airport') }}</span></a></li>
            <li><a data-map-type="golf" class="poi py-1 text-secondary" href="#project-map"><span class="fa-stack">@fas('circle', 'fa-stack-2x text-green') @fas('golf-ball', 'fa-inverse fa-stack-1x')</span><span>{{ __('Golf Courses') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="1" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">{{ __('1') }}</span></span><span>{{ __('Quarteira Promenade') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="2" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">{{ __('2') }}</span></span><span>{{ __('Marina Vilamoura') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="3" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">{{ __('3') }}</span></span><span>{{ __('Falésia Beach') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="4" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">{{ __('4') }}</span></span><span>{{ __('Vilamoura Beach') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="5" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">{{ __('5') }}</span></span><span>{{ __('Aquashow Park') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="6" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">{{ __('6') }}</span></span><span>{{ __('Zoomarine Algarve') }}</span></a></li>
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
                lat: 37.017536,
                lng: -7.969731,
                title: '{{ __('Faro Airport') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/faro-airport.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Faro Airport') }}"><figcaption class="figure-caption">{{ __('Faro Airport') }}</figcaption></figure>',
                icon: 'iconAirport',
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
                lat: 37.096541,
                lng: -8.177590,
                title: '{{ __('Pine Cliffs Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/pine-cliffs-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Pine Cliffs Golf Course') }}"><figcaption class="figure-caption">{{ __('Pine Cliffs Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'golf',
                lat: 37.101111,
                lng: -8.136225,
                title: '{{ __('Dom Pedro Millennium Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/dom-pedro-millennium-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Dom Pedro Millennium Golf Course') }}"><figcaption class="figure-caption">{{ __('Dom Pedro Millennium Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'golf',
                lat: 37.102094,
                lng: -8.115815,
                title: '{{ __('Dom Pedro The Old Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/dom-pedro-the-old-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Dom Pedro The Old Course') }}"><figcaption class="figure-caption">{{ __('Dom Pedro The Old Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'golf',
                lat: 37.092717,
                lng: -8.111746,
                title: '{{ __('Dom Pedro Pinhal Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/dom-pedropinhal-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Dom Pedro Pinhal Golf Course') }}"><figcaption class="figure-caption">{{ __('Dom Pedro Pinhal Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'golf',
                lat: 37.091495,
                lng: -8.093527,
                title: '{{ __('Pestana Vila Sol Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/pestana-vila-sol-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Pestana Vila Sol Golf Course') }}"><figcaption class="figure-caption">{{ __('Pestana Vila Sol Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'golf',
                lat: 37.051905,
                lng: -8.059706,
                title: '{{ __('Vale Do Lobo Royal Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/vale-do-lobo-royal-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Vale Do Lobo Royal Golf Course') }}"><figcaption class="figure-caption">{{ __('Vale Do Lobo Royal Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'golf',
                lat: 37.038259,
                lng: -8.038042,
                title: '{{ __('Pinheiros Altos Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/pinheiros-altos-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Pinheiros Altos Golf Course') }}"><figcaption class="figure-caption">{{ __('Pinheiros Altos Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'golf',
                lat: 37.032515,
                lng: -8.023956,
                title: '{{ __('Quinta Do Lago Country Club Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/quinta-do-lago-country-club-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Quinta Do Lago Country Club Golf Course') }}"><figcaption class="figure-caption">{{ __('Quinta Do Lago Country Club Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'golf',
                lat: 37.031396,
                lng: -8.011554,
                title: '{{ __('San Lorenzo Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/san-lorenzo-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('San Lorenzo Golf Course') }}"><figcaption class="figure-caption">{{ __('San Lorenzo Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'golf',
                lat: 37.045943,
                lng: -8.017604,
                title: '{{ __('Quinta Do Lago Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/quinta-do-lago-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Quinta Do Lago Golf Course') }}"><figcaption class="figure-caption">{{ __('Quinta Do Lago Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'golf',
                lat: 37.069918,
                lng: -8.003538,
                title: '{{ __('Quinta Do Lago Laranjal Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/quinta-do-lago-laranjal-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Quinta Do Lago Laranjal Golf Course') }}"><figcaption class="figure-caption">{{ __('Quinta Do Lago Laranjal Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'poi',
                lat: 37.065580,
                lng: -8.098545,
                title: '{{ __('Quarteira Promenade') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/quarteira-promenade.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Quarteira Promenade') }}"><figcaption class="figure-caption">{{ __('Quarteira Promenade') }}</figcaption></figure>',
                id: '1',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.077586,
                lng: -8.122025,
                title: '{{ __('Marina Vilamoura') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/marina-vilamoura.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Marina Vilamoura') }}"><figcaption class="figure-caption">{{ __('Marina Vilamoura') }}</figcaption></figure>',
                id: '2',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.086667,
                lng: -8.168057,
                title: '{{ __('Falésia Beach') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/falesia-beach.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Falésia Beach') }}"><figcaption class="figure-caption">{{ __('Falésia Beach') }}</figcaption></figure>',
                id: '3',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.071516,
                lng: -8.116556,
                title: '{{ __('Vilamoura Beach') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/vilamoura-beach.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Vilamoura Beach') }}"><figcaption class="figure-caption">{{ __('Vilamoura Beach') }}</figcaption></figure>',
                id: '4',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.092697,
                lng: -8.072566,
                title: '{{ __('Aquashow Park') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/aquashow-park.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Aquashow Park') }}"><figcaption class="figure-caption">{{ __('Aquashow Park') }}</figcaption></figure>',
                id: '5',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.126981,
                lng: -8.314209,
                title: '{{ __('Zoomarine Algarve') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/zoomarine-algarve.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Zoomarine Algarve') }}"><figcaption class="figure-caption">{{ __('Zoomarine Algarve') }}</figcaption></figure>',
                id: '6',
                labelColor: '#ffffff',
                icon: 'icon',
            },
        ];

        let map;
        let InfoWindow;
        const markers = [];
        const center = {lat: 37.093547, lng: -8.102850};

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

            const iconAirport = {
                url: "{{ Helper::autover('/svg/{subdomain}/marker-airport.svg') }}",
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(18, 18),
                scaledSize: new google.maps.Size(36, 36)
            }

            const iconGolf = {
                url: "{{ Helper::autover('/svg/{subdomain}/marker-golf.svg') }}",
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(18, 18),
                scaledSize: new google.maps.Size(36, 36)
            }

            const icons = {
                icon: icon,
                iconGolf: iconGolf,
                iconAirport: iconAirport
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
