@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('[Successfully Funded] No.9, Faro real estate investment opportunity'))
@section('description', __('Invest in No.9, Faro, Portugal. Real estate investment opportunity. Off market distressed property, strong returns over a 24 month term. Award winning developer'))

@section('content')
    {{-- <div id="property-video">
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-9-faro-portugal-inverted.svg') }}" alt="{{ __('Logo: No.9, Faro, Portugal') }}" height="124" width="200">
            </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" autoplay muted playsinline preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-faro-portugal/poster.jpg') }}">
                <source src="/video/no-9-faro-portugal.mp4" type="video/mp4"/>
            </video>
        </div>
    </div> --}}
    <div class="property-hero">
        <div class="embed-responsive embed-responsive-16by9 h-100">
            <img loading="eager" class="embed-responsive-item" src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-faro-portugal/hero.jpg') }}" alt="{{ __('Aerial view of Faro Marina, Portugal') }}" height="1080" width="1920">
        </div>
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-9-faro-portugal-inverted.svg') }}" alt="{{ __('Logo: No.9, Faro, Portugal') }}" height="200" width="124" style="--property-logo-width: 62px; --property-logo-height: 100px">
            </div>
        </div>
    </div>

    <div class="container container-md-fluid space-single-top">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-start align-items-center mr-3" href="{{ Helper::route('investment-project', 'evaristo-algarve-portugal') }}">@fas('long-arrow-alt-left', 'mr-3 fa-2x')<span class="text-nowrap">{{ __('Previous project') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('Evaristo Project, Portugal') }}</span></a>
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-end align-items-center ml-3 text-right" href="{{ Helper::route('investment-project', 'no-57-lisbon-portugal') }}"><span class="text-nowrap">{{ __('Next project') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('No.57 Lisbon, Portugal') }}</span>@fas('long-arrow-alt-right', 'ml-3 fa-2x')</a>
        </div>
    </div>

    <div class="container space-double space-single-top">
        <div class="row row-cols-1 row-cols-xl-2 mb-n5">
            <div class="col mb-5 position-relative">
                <h1 class="title-border title-border-green mb-5">{{ __('No.9') }}<br><small class="h3 font-weight-normal">{{ __('Property investment in Faro, Portugal') }}</small></h1>
                <p class="project-status status-green text-white p-2">{{ __('Successfully Funded') }}</p>
                <p>{{ __('Introducing No.9 Faro, located in the Capital city of the Algarve. Stacked up against the rest of Western Europe, Faro is quickly becoming an expat haven that comes out on top for affordability with a first-world lifestyle. Faro airport, the main international airport of the Algarve can be reached within only 15 mins drive.') }}</p>
                <div class="bg-light py-3">
                    <ul class="m-0 pr-4">
                        <li>{{ __('6 Apartments') }}</li>
                        <li>{{ __('Typologies: T2') }}</li>
                        <li>{!! __('Total Build Area: c.400 :m2', ['m2' => __('m2')]) !!}</li>
                        <li>{{ __('Pricing 350K Euro') }}</li>
                        <li>{{ __('6 month refurbishment program with a 6 month sales program') }}</li>
                    </ul>
                </div>
            </div>
            <div class="col mb-5">
                <div class="project-successfully-funded mb-3 p-3">
                    <p class="lead">{{ __('No.9 Faro project is successfully funded.') }}</p>
                    @if ($count)
                        <ol class="mb-0">
                            <li>{!! __('You can browse for alternative :link', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '#funding-required">' . __('investment options in Portugal') . '</a>']) !!}</li>
                            <li>{!! __('You can still :link', ['link' => '<a class="internal-link" href="' . Helper::route('property-for-sale', 'no-9-faro-portugal') . '">' . __('buy apartments in No.9 Faro') . '</a>']) !!}</li>
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
                                <td class="text-primary font-weight-bold h3 align-middle text-nowrap">{{ __('€ 1 000 000') }}</td>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('Term') }}</th>
                                <td>{{ __('12 months') }}</td>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('Security') }}</th>
                                <td>{{ __('(70% LTV) senior secured (first lien)') }}</td>
                            </tr>
                            <tr>
                                <th class="align-middle">{{ __('Exit') }}</th>
                                <td>{{ __('Alongside sales completed (TBA)') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container space-single">
        <div class="row row-cols-1 row-cols-md-2 mb-n5 photoswipe-wrapper" data-photoswipe-gid="gallery">
            <a class="photoswipe col mb-5" href="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-faro-portugal/gallery/facade.jpg') }}" data-photoswipe-pid="facade" data-photoswipe-size="2560x1440"><img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-faro-portugal/gallery/thumbnails/facade.jpg') }}" class="img-fluid img-thumbnail" alt="{{ __('3D image of No.9 Faro Project') }}"></a>
            <a class="photoswipe col mb-5" href="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-faro-portugal/gallery/marina.jpg') }}" data-photoswipe-pid="marina" data-photoswipe-size="2560x1737"><img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-faro-portugal/gallery/thumbnails/marina.jpg') }}" class="img-fluid img-thumbnail" alt="{{ __('Marina Faro, Algarve, Portugal') }}"></a>
        </div>
    </div>

    <div class="container space-single">
        <div class="card card-home card-font-sm flex-lg-row align-items-center">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-6 overflow-hidden">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/portugal/faro/guide.jpg') }}" class="img-fit-300" alt="{{ __('Faro, Portugal') }}">
                </div>
                <div class="col-lg-6">
                    <div class="card-body">
                        <h3 class="title-border mb-4 text-uppercase">{{ __('Faro Real Estate Location Guide') }}</h3>
                        <p class="card-text">{!! __('Faro is one of the most attractive property investment locations, with a great range of natural parks, beautiful attractions, preserved lagoons and entertainment opportunities. <strong>Many options to keep everyone excited!</strong>') !!}</p>
                        <a class="btn btn-lg btn-outline-secondary" href="{{ Helper::route('portugal', 'faro') }}">{{ __('Read the guide') }}@fas('long-arrow-alt-right', 'ml-3')</a>
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
            <li><a data-map-type="airport" class="poi py-1 text-secondary" href="#project-map"><span class="fa-stack">@fas('circle', 'fa-stack-2x text-blue') @fas('plane', 'fa-inverse fa-stack-1x fa-rotate--30')</span><span>{{ __('Faro Airport') }}</span></a></li>
            <li><a data-map-type="golf" class="poi py-1 text-secondary" href="#project-map"><span class="fa-stack">@fas('circle', 'fa-stack-2x text-green') @fas('golf-ball', 'fa-inverse fa-stack-1x')</span><span>{{ __('Golf Courses') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="1" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">1</span></span><span>{{ __('Faro Marina') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="2" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">2</span></span><span>{{ __('Forum Algarve Mall') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="3" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">3</span></span><span>{{ __('University of Algarve') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="4" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">4</span></span><span>{{ __('Ria Formosa Natural Park') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="5" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">5</span></span><span>{{ __('Palace of Estoi') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="6" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">6</span></span><span>{{ __('Roman Ruins of Milreu') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="7" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">7</span></span><span>{{ __('Aquashow Park') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="8" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">8</span></span><span>{{ __('Marina Vilamoura') }}</span></a></li>
            <li><a data-map-type="poi" data-map-id="9" class="poi py-1 text-secondary" href="#project-map"><span class="fa-layers fa-2x">@fas('circle')<span class="font-weight-bold fa-layers-text fa-inverse">9</span></span><span>{{ __('Falésia Beach') }}</span></a></li>
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
                type: 'golf',
                lat: 37.086947,
                lng: -7.751042,
                title: '{{ __('Colina Verde Golf Course') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/colina-verde-golf-course.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Colina Verde Golf Course') }}"><figcaption class="figure-caption">{{ __('Colina Verde Golf Course') }}</figcaption></figure>',
                icon: 'iconGolf',
            },
            {
                type: 'poi',
                lat: 37.016144,
                lng: -7.935691,
                title: '{{ __('Faro Marina') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/faro-marina.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Faro Marina') }}"><figcaption class="figure-caption">{{ __('Faro Marina') }}</figcaption></figure>',
                id: '1',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.028962,
                lng: -7.944694,
                title: '{{ __('Forum Algarve Mall') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/forum-algarve-mall.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Forum Algarve Mall') }}"><figcaption class="figure-caption">{{ __('Forum Algarve Mall') }}</figcaption></figure>',
                id: '2',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.029255,
                lng: -7.924129,
                title: '{{ __('University of Algarve') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/university-of-algarve.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('University of Algarve') }}"><figcaption class="figure-caption">{{ __('University of Algarve') }}</figcaption></figure>',
                id: '3',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.030851,
                lng: -7.809761,
                title: '{{ __('Ria Formosa Natural Park') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/ria-formosa-natural-park.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Ria Formosa Natural Park') }}"><figcaption class="figure-caption">{{ __('Ria Formosa Natural Park') }}</figcaption></figure>',
                id: '4',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.095092,
                lng: -7.895619,
                title: '{{ __('Palace of Estoi') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/palace-of-estoi.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Palace of Estoi') }}"><figcaption class="figure-caption">{{ __('Palace of Estoi') }}</figcaption></figure>',
                id: '5',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.094920,
                lng: -7.904594,
                title: '{{ __('Roman Ruins of Milreu') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/roman-ruins-of-milreu.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Roman Ruins of Milreu') }}"><figcaption class="figure-caption">{{ __('Roman Ruins of Milreu') }}</figcaption></figure>',
                id: '6',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.092697,
                lng: -8.072566,
                title: '{{ __('Aquashow Park') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/aquashow-park.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Aquashow Park') }}"><figcaption class="figure-caption">{{ __('Aquashow Park') }}</figcaption></figure>',
                id: '7',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.077586,
                lng: -8.122025,
                title: '{{ __('Marina Vilamoura') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/marina-vilamoura.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Marina Vilamoura') }}"><figcaption class="figure-caption">{{ __('Marina Vilamoura') }}</figcaption></figure>',
                id: '8',
                labelColor: '#ffffff',
                icon: 'icon',
            },
            {
                type: 'poi',
                lat: 37.086667,
                lng: -8.168057,
                title: '{{ __('Falésia Beach') }}',
                content: '<figure class="figure"><img width="300" height="200" src="{{ Helper::autover('/img/{subdomain}/maps/falesia-beach.jpg') }}" class="figure-img img-fluid rounded" alt="{{ __('Falésia Beach') }}"><figcaption class="figure-caption">{{ __('Falésia Beach') }}</figcaption></figure>',
                id: '9',
                labelColor: '#ffffff',
                icon: 'icon',
            },
        ];

        let map;
        let InfoWindow;
        const markers = [];
        const center = {lat: 37.016763, lng: -7.926337};

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
