@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('No.57, Lisbon apartments for sale | Property for sale Lisbon, Portugal'))
@section('description', __('Buy large modern apartments in No.57, Lisbon. A fantastic golden visa eligible re-development project located in one of the best residential area’s of Lisbon.'))

@section('content')
    {{-- <div id="property-video">
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-57-lisbon-portugal-inverted.svg') }}" alt="{{ __('Logo: No.57, Lisbon, Portugal') }}" height="200" width="124">
            </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" autoplay muted playsinline preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-57-lisbon-portugal/poster.jpg') }}">
                <source src="/video/no-57-lisbon-portugal.mp4" type="video/mp4"/>
            </video>
        </div>
    </div> --}}
    <div class="property-hero">
        <div class="embed-responsive embed-responsive-16by9 h-100">
            <img loading="eager" class="embed-responsive-item" src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-57-lisbon-portugal/hero.jpg') }}" alt="{{ __('Benfica Football Stadium, Lisbon, Portugal') }}" height="1080" width="1920">
        </div>
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-57-lisbon-portugal-inverted.svg') }}" alt="{{ __('Logo: No.57, Lisbon, Portugal') }}" height="200" width="131">
            </div>
        </div>
    </div>

    <div class="container container-md-fluid space-single-top">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-start align-items-center mr-3" href="{{ Helper::route('property-for-sale', 'no-9-lisbon-portugal') }}">@fas('long-arrow-alt-left', 'mr-3 fa-2x')<span class="text-nowrap">{{ __('Previous property') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('No.9 Lisbon, Portugal') }}</span></a>
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-end align-items-center ml-3 text-right" href="{{ Helper::route('property-for-sale', 'no-9-faro-portugal') }}"><span class="text-nowrap">{{ __('Next property') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('No.9 Faro, Portugal') }}</span>@fas('long-arrow-alt-right', 'ml-3 fa-2x')</a>
        </div>
    </div>

    <div class="container space-double space-single-top">
        <div class="row row-cols-1 row-cols-xl-2 mb-n5">
            <div class="col mb-5 position-relative">
                <h1 class="title-border {{ $available->count() ? '' : 'title-border-sold' }} mb-5">{{ __('No.57') }}<br><small class="h3 font-weight-normal">{{ __('Property for sale in Lisbon, Portugal') }}</small></h1>
                @if ($available->count())
                    <p class="property-price">{{ __('from') }}<span class="h2 text-secondary m-0 ml-2">{{ __('€') . ' ' . number_format($available->min('price'), 0, ' ', ' ') }}</span></p>
                @else
                    <p class="project-status status-red text-white p-2">{{ __('Sold Out') }}</p>
                @endif
                <p class="mb-4 mb-xl-5">{{ __('A fantastic regeneration/re-development project located in one of the best residential area’s of Lisbon close to the famous Benfica Football Stadium.') }}</p>
                <div class="property-contacts bg-light p-4">
                    <div class="row mb-n3">
                        <div class="col col-auto mb-3">
                            <p class="fa-left text-nowrap">@fas('phone', 'text-primary fa-fw fa-lg')<a class="text-secondary" data-track-phone="Property - No.57 Lisbon: " href="tel:{{ __('mespil.phone.ireland') }}">{{ __('mespil.phone.ireland') }}</a></p>
                            <p class="fa-left text-nowrap">@fas('envelope', 'text-primary fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Property - No.57 Lisbon: " data-email="{{ str_rot13(__('mespil.email')) }}">[email]</a></p>
                        </div>
                        <div class="col col-auto mb-3">
                            @fas('map-marker-alt', 'text-primary fa-fw fa-lg')
                            <ul class="list-unstyled d-inline-block align-top mb-0">
                                <li>{{ __('Avenida Gomes Pereira 57-59, Benfica,') }}<br>{{ __('1500-332 Lisbon,') }}<br>{{ __('Portugal') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div id="property-map"></div>
            </div>
        </div>
    </div>

    @if ($available->count())
        <div class="bg-light space-single">
            <div class="container">
                <div class="head-section text-center">
                    <h2 class="mb-4">{{ __('No.57 Lisbon Apartments For Sale') }}</h2>
                    <p>{!! __('MESPIL have purchased this building below market value through key relationships bringing to market much in demand real estate for this capital city also eligible for the :link.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('€350K Portugal Golden Visa programme') . '</a>']) !!}</p>
                </div>
            </div>
        </div>

        <div class="container-fluid space-double">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5 justify-content-md-center">
                <div class="col mb-5">
                    <div class="card card-apartments h-100 text-center">
                        <p class="lead mb-0 bg-secondary p-3 text-white">{{ __('T2') . ' ' . __('from €') . ' ' . number_format($available->min('price'), 0, '', ' ') }}</p>
                        <div class="card-body photoswipe-wrapper" data-photoswipe-gid="floorplans">
                            <p class="card-text card-text-large">{{ __('Spacious and sleek two-bedroom apartment') }}</p>
                            <a data-photoswipe-pid="t2-ground" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-57-lisbon-portugal/floorplans/t2-ground.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('ground floor') }}</a>
                            <a data-photoswipe-pid="t2-small" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-57-lisbon-portugal/floorplans/t2-small.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('small apartment') }}</a>
                            <a data-photoswipe-pid="t2-large" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-57-lisbon-portugal/floorplans/t2-large.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('large apartment') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container space-single">
            <h3 class="mb-4 font-weight-normal text-center">{{ __('Last number of units released') }}</h3>
            <div class="table-responsive">
                <table class="table table-hover mb-0" cellspacing="0" cellpadding="5" border="0">
                    <thead>
                        <tr>
                            <th class="text-center text-nowrap" scope="col">{{ __('Unit') }}</th>
                            <th class="text-center text-nowrap" scope="col">{{ __('Floor') }}</th>
                            <th class="text-center text-nowrap" scope="col">{{ __('Type') }}</th>
                            <th class="text-right text-nowrap" scope="col">{{ __('Area') }}</th>
                            <th class="text-right text-nowrap" scope="col">{{ __('Price') }}</th>
                            <th class="text-center text-nowrap" scope="col">{{ __('Status') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($available as $apartment)
                            <tr>
                                <td class="text-center text-nowrap">{{ $apartment->unit }}</td>
                                <td class="text-center text-nowrap">{{ $apartment->floor }}</td>
                                <td class="text-center text-nowrap">{{ $apartment->bed }}</td>
                                <td class="text-right text-nowrap">{!! $apartment->total_area ? $apartment->total_area . ' ' . __('m2') : '' !!}</td>
                                <td class="text-right text-nowrap">€ {{ number_format($apartment->price, 0, ' ', ' ') }}</td>
                                <td class="text-center text-nowrap {{ $apartment->status == 'Pipeline' ? 'text-info' : 'text-success' }}">{{ $apartment->status == 'Pipeline' ? __('Registered for cancellation') : __('Available') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

    @if ($sold->count())
        <div class="head-section space-single">
            <div class="container text-center">
                <h2>{{ __('List of Sold Out Apartments in No.57 Lisbon') }}</h2>
            </div>

            @if (!$available->count())
                <div class="container space-single">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5 justify-content-md-center">
                        <div class="col mb-5">
                            <div class="card card-apartments h-100 text-center">
                                <div class="card-body">
                                    <p class="card-text lead text-danger">{{ __('T2') }} - {{ __('Sold Out') }}</p>
                                    <p class="card-text">{{ __('Spacious and sleek two-bedroom apartment') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="container space-single">
                <div class="table-responsive table-sold">
                    <table class="table table-hover" cellspacing="0" cellpadding="5" border="0">
                        <thead>
                            <tr>
                                <th class="text-center text-nowrap" scope="col">{{ __('Unit') }}</th>
                                <th class="text-center text-nowrap" scope="col">{{ __('Floor') }}</th>
                                <th class="text-center text-nowrap" scope="col">{{ __('Type') }}</th>
                                <th class="text-right text-nowrap" scope="col">{{ __('Area') }}</th>
                                <th class="text-center text-nowrap" scope="col">{{ __('Status') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sold as $apartment)
                                <tr>
                                    <td class="text-center text-nowrap">{{ $apartment->unit }}</td>
                                    <td class="text-center text-nowrap">{{ $apartment->floor }}</td>
                                    <td class="text-center text-nowrap">{{ $apartment->bed }}</td>
                                    <td class="text-right text-nowrap">{!! $apartment->total_area ? $apartment->total_area . ' ' . __('m2') : '' !!}</td>
                                    <td class="text-center text-nowrap text-danger">{{ __('Sold Out') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif

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

    <div class="fast-facts-wrapper space-single position-relative">
        <div class="embed-responsive embed-responsive-16by9 embed-responsive-facts h-100"><img loading="lazy" class="embed-responsive-item" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920 1080'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-57-lisbon-portugal/facts.jpg') }}" alt="{{ __('Aerial street view, Lisbon, Portugal') }}" height="1080" width="1920"></div>
        <div class="container overlay-wrapper d-flex flex-column align-items-center justify-content-center text-white text-center">
            <div class="fast-facts-awards p-5" style="--fast-facts-background: url('{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-57-lisbon-portugal/facts.jpg', null, false) }}');">
                <h2 class="h1 mb-5">{{ __('No.57 Fast Facts') }}</h2>
                <p class="max-width-lg font-size-lg">{{ __('No.57 Lisbon is brought to market as a full turn-key Portugal Golden Visa property investment ideal for buyers looking for a home in an exciting European city, or for property investors looking for strong capital appreciation investments and guaranteed rental yields.') }}</p>
            </div>
            <div class="fast-facts row row-cols-1 row-cols-sm-3 container-padding text-white bg-primary">
                <p class="col py-3 h2 mb-0 text-nowrap">{{ __('50%') }}<small class="d-block font-size-base">{{ __('Sold @ Pre-Launch') }}</small></p>
                <p class="col py-3 h2 mb-0">{{ __('Restoring Lisbon') }}</p>
                <p class="col py-3 h2 mb-0 text-nowrap">{{ __('Global') }}<small class="d-block font-size-base">{{ __('Golden Visa Demand') }}</small></p>
            </div>
        </div>
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

        function initMap() {
            const center = {lat: 38.743399, lng: -9.135172};

            const map = new google.maps.Map(document.getElementById('property-map'), {
                zoom: 12,
                center: center,
                streetViewControl: false,
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

            const marker = new google.maps.Marker({
                map: map,
                position: center,
                title: '{{ __('No.57, Lisbon, Portugal') }}',
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    scale: 16,
                    fillOpacity: 1,
                    strokeOpacity: 1,
                    fillColor: '#bc954d',
                    strokeColor: '#bc954d',
                },
                label: {
                    text: '{{ __('57') }}',
                    color: '#ffffff',
                    fontWeight: 'bold',
                    fontSize: '1rem',
                },
            });

            google.maps.event.addDomListener(window, 'resize', function() {
                google.maps.event.trigger(map, 'resize');
                map.panTo(center);
            });
        }
    </script>
@endpush
