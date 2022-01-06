@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('No.9, Faro apartments for sale | Property for sale in Faro, Portugal'))
@section('description', __('Buy large modern apartments in No.9, Faro. A mixed development of 6 perfectly located turn-key apartments: 4% rental yield, fully managed, golden visa eligible'))

@section('content')
    {{-- <div id="property-video">
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-9-faro-portugal-inverted.svg') }}" alt="{{ __('Logo: No.9, Faro, Portugal') }}" height="200" width="124">
            </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" autoplay muted playsinline preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/poster.jpg') }}">
                <source src="/video/no-9-faro-portugal.mp4" type="video/mp4"/>
            </video>
        </div>
    </div> --}}
    <div class="property-hero">
        <div class="embed-responsive embed-responsive-16by9 h-100">
            <img loading="eager" class="embed-responsive-item" src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/hero.jpg') }}" alt="{{ __('3D image of No.9, Faro, Portugal') }}" height="1080" width="1920">
        </div>
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-9-faro-portugal-inverted.svg') }}" alt="{{ __('Logo: No.9, Faro, Portugal') }}" height="200" width="124">
            </div>
        </div>
    </div>

    <div class="container container-md-fluid space-single-top">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-start align-items-center mr-3" href="{{ Helper::route('property-for-sale', 'no-57-lisbon-portugal') }}">@fas('long-arrow-alt-left', 'mr-3 fa-2x')<span class="text-nowrap">{{ __('Previous property') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('No.57 Lisbon, Portugal') }}</span></a>
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-end align-items-center ml-3 text-right" href="{{ Helper::route('property-for-sale', 'pine-hills-vilamoura-portugal') }}"><span class="text-nowrap">{{ __('Next property') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('Pine Hills Vilamoura, Portugal') }}</span>@fas('long-arrow-alt-right', 'ml-3 fa-2x')</a>
        </div>
    </div>

    <div class="container space-double space-single-top">
        <div class="row row-cols-1 row-cols-xl-2 mb-n5">
            <div class="col mb-5 position-relative">
                <h1 class="title-border {{ $available->count() ? '' : 'title-border-sold' }} mb-5">{{ __('No.9') }}<br><small class="h3 font-weight-normal">{{ __('Property for sale in Faro, Portugal') }}</small></h1>
                @if ($available->count())
                    <p class="property-price">{{ __('from') }}<span class="h2 text-secondary m-0 ml-2">{{ __('€') . ' ' . number_format($available->min('price'), 0, ' ', ' ') }}</span></p>
                @else
                    <p class="project-status status-red text-white p-2">{{ __('Sold Out') }}</p>
                @endif
                <p class="mb-4 mb-xl-5">{!! __('Introducing No.9, Faro in the Capital of the Algarve. A mixed development of 3 buildings each with 6 large apartments in a 1950’s building, perfectly located in this prime city location brought to market turn-key. With a build area of 400:m2 in each of the buildings, this project offers a number of different 2 Bedroom options – ground floor coming with private garden, and first and second floor units all with terraces and access to a private rooftop garden.', ['m2' => __('m2')]) !!}</p>
                <div class="property-contacts bg-light p-4">
                    <div class="row mb-n3">
                        <div class="col col-auto mb-3">
                            <p class="fa-left text-nowrap">@fas('phone', 'text-primary fa-fw fa-lg')<a class="text-secondary" data-track-phone="Property - No.9 Faro: " href="tel:{{ __('mespil.phone.ireland') }}">{{ __('mespil.phone.ireland') }}</a></p>
                            <p class="fa-left text-nowrap">@fas('envelope', 'text-primary fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Property - No.9 Faro: " data-email="{{ str_rot13(__('mespil.email')) }}">[email]</a></p>
                        </div>
                        <div class="col col-auto mb-3">
                            @fas('map-marker-alt', 'text-primary fa-fw fa-lg')
                            <ul class="list-unstyled d-inline-block align-top mb-0">
                                <li>{{ __('Rua Dr José De Matos Nº 9,') }}<br>{{ __('Faro, Portugal') }}</li>
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
                    <h2 class="mb-4">{{ __('No.9 Faro Apartments For Sale') }}</h2>
                    <p>{!! __('Faro, the Capital of the Algarve; Beautifully designed two-bedroom apartments; :link; Building 1 of 3; Furniture included; 4% NET Rental Yields; 360 Management of your property investment; All units with private terrace also have access to a private rooftop garden.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('350K Golden Visa Eligible') . '</a>']) !!}</p>
                </div>
            </div>
        </div>

        <div class="container-fluid space-double">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5 justify-content-md-center">
                <div class="col mb-5">
                    <div class="card card-apartments h-100 text-center">
                        @include(Helper::subdomain() . '::portugal-properties-for-sale/no-9-faro-portugal-t2')
                        <p class="lead mb-0 bg-secondary p-3 text-white">{{ __('T2') . ' ' . __('from €') . ' ' . number_format($available->min('price'), 0, '', ' ') }}</p>
                        <div class="card-body photoswipe-wrapper" data-photoswipe-gid="floorplans">
                            <p class="card-text card-text-large">{{ __('Beautifully designed two-bedroom apartments for sale; All units with private terrace also have access to a private rooftop garden.') }}</p>
                            <a data-photoswipe-pid="t2-ground-left" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/floorplans/t2-ground-left.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('A, ground floor, left') }}</a>
                            <a data-photoswipe-pid="t2-ground-right" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/floorplans/t2-ground-right.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('B, ground floor, right') }}</a>
                            <a data-photoswipe-pid="t2-left" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/floorplans/t2-left.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('C & E, left') }}</a>
                            <a data-photoswipe-pid="t2-right" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/floorplans/t2-right.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('D & F, right') }}</a>
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
                <h2>{{ __('List of Sold Out Apartments in No.9 Faro') }}</h2>
            </div>

            @if (!$available->count())
                <div class="container space-single">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5 justify-content-md-center">
                        <div class="col mb-5">
                            <div class="card card-apartments h-100 text-center">
                                <div class="card-body">
                                    <p class="card-text lead text-danger">{{ __('T2') }} - {{ __('Sold Out') }}</p>
                                    <p class="card-text">{{ __('Beautifully designed two-bedroom apartments for sale; All units with private terrace also have access to a private rooftop garden.') }}</p>
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
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/portugal/faro/guide.jpg') }}" class="img-fit-300" alt="{{ __('Faro, Portugal') }}">
                </div>
                <div class="col-lg-6">
                    <div class="card-body">
                        <h3 class="title-border mb-4 text-uppercase">{{ __('Faro Real Estate Location Guide') }}</h3>
                        <p class="card-text">{!! __('Faro is one of the most attractive property investment locations, with a great range of natural parks, beautiful attractions, preserved lagoons and entertainment opportunities. :strong', ['strong' => '<strong>' . __('Many options to keep everyone excited!') . '</strong>']) !!}</p>
                        <a class="btn btn-lg btn-outline-secondary" href="{{ Helper::route('portugal', 'faro') }}">{{ __('Read the guide') }}@fas('long-arrow-alt-right', 'ml-3')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="videos" class="bg-light space-single">
        <div class="container">
            <div class="head-section text-center">
                <h2 class="mb-4">{{ __('Check out a virtual tour on No.9 Faro with MESPIL') }}</h2>
                <p>{{ __('Join us to safely view No.9 Faro from the comfort of home, you will find individual videos created on the building itself, the apartments and a short introduction to the surrounding area and Faro in general. Enjoy!') }}</p>
            </div>
        </div>
    </div>

    <div class="container-fluid space-single">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-6 mb-n5 justify-content-md-center">
            <div class="col mb-5">
                <div class="card card-video-9by16 h-100 m-auto">
                    <div class="card-header">
                        <h2 class="h5 font-weight-normal mb-0 card-title text-center">{{ __('No.9 Faro, Building Intro') }}</h2>
                    </div>
                    <div class="card-body">
                        <div id="no-9-faro-portugal-building" class="embed-responsive embed-responsive-9by16">
                            <video playsinline controls preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/posters/building.jpg') }}">
                                <source src="{{ Helper::autover('/video/{subdomain}/no-9-faro-portugal/building.mp4') }}" type="video/mp4"/>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card-video-9by16 h-100 m-auto">
                    <div class="card-header">
                        <h2 class="h5 font-weight-normal mb-0 card-title text-center">{{ __('2 Bedroom Ground Floor Apartment') }}</h2>
                    </div>
                    <div class="card-body">
                        <div id="no-9-faro-portugal-2-bedroom-ground-floor-apartment" class="embed-responsive embed-responsive-9by16">
                            <video playsinline controls preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/posters/building.jpg') }}">
                                <source src="{{ Helper::autover('/video/{subdomain}/no-9-faro-portugal/2-bedroom-ground-floor-apartment.mp4') }}" type="video/mp4"/>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card-video-9by16 h-100 m-auto">
                    <div class="card-header">
                        <h2 class="h5 font-weight-normal mb-0 card-title text-center">{{ __('2 Bedroom First Floor Apartment') }}</h2>
                    </div>
                    <div class="card-body">
                        <div id="no-9-faro-portugal-2-bedroom-first-floor-apartment" class="embed-responsive embed-responsive-9by16">
                            <video playsinline controls preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/posters/building.jpg') }}">
                                <source src="{{ Helper::autover('/video/{subdomain}/no-9-faro-portugal/2-bedroom-first-floor-apartment.mp4') }}" type="video/mp4"/>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card-video-9by16 h-100 m-auto">
                    <div class="card-header">
                        <h2 class="h5 font-weight-normal mb-0 card-title text-center">{{ __('2 Bedroom Second Floor Apartment') }}</h2>
                    </div>
                    <div class="card-body">
                        <div id="no-9-faro-portugal-2-bedroom-second-floor-apartment" class="embed-responsive embed-responsive-9by16">
                            <video playsinline controls preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/posters/building.jpg') }}">
                                <source src="{{ Helper::autover('/video/{subdomain}/no-9-faro-portugal/2-bedroom-second-floor-apartment.mp4') }}" type="video/mp4"/>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card-video-9by16 h-100 m-auto">
                    <div class="card-header">
                        <h2 class="h5 font-weight-normal mb-0 card-title text-center">{{ __('Private Rooftop Garden') }}</h2>
                    </div>
                    <div class="card-body">
                        <div id="no-9-faro-portugal-private-rooftop-garden" class="embed-responsive embed-responsive-9by16">
                            <video playsinline controls preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/posters/building.jpg') }}">
                                <source src="{{ Helper::autover('/video/{subdomain}/no-9-faro-portugal/private-rooftop-garden.mp4') }}" type="video/mp4"/>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card-video-9by16 h-100 m-auto">
                    <div class="card-header">
                        <h2 class="h5 font-weight-normal mb-0 card-title text-center">{{ __('Introduction to Faro') }}</h2>
                    </div>
                    <div class="card-body">
                        <div id="no-9-faro-portugal-introduction-to-faro" class="embed-responsive embed-responsive-9by16">
                            <video playsinline controls preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/posters/faro.jpg') }}">
                                <source src="{{ Helper::autover('/video/{subdomain}/no-9-faro-portugal/introduction-to-faro.mp4') }}" type="video/mp4"/>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fast-facts-wrapper space-single position-relative">
        <div class="embed-responsive embed-responsive-16by9 embed-responsive-facts h-100"><img loading="lazy" class="embed-responsive-item" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920 1080'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/facts.jpg') }}" alt="{{ __('Aerial view of Marina, Faro, Portugal') }}" height="1080" width="1920"></div>
        <div class="container overlay-wrapper d-flex flex-column align-items-center justify-content-center text-center">
            <h2 class="h1 mb-5">{{ __('No.9 Faro Fast Facts') }}</h2>
            <p class="max-width-lg font-size-lg">{{ __('No.9 Faro is brought to market as a full turn-key Portugal Golden Visa property investment ideal for buyers looking for a home in an exciting European city, or for property investors looking for strong capital appreciation investments and guaranteed rental yields.') }}</p>
            <div class="fast-facts-awards align-items-center p-5" style="--fast-facts-background: url('{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/facts.jpg', null, false) }}');">
                <img loading="lazy" class="img-fluid" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 354 200'%3E%3C/svg%3E" data-src="{{ Helper::autover('/svg/{subdomain}/award-no-9-faro-ipa-2020.svg') }}" alt="{{ __('IPA 2020 Award: Best Residential Renovation Redevelopment Portugal') }}" height="200" width="354">
            </div>
            <div class="fast-facts row row-cols-1 row-cols-sm-3 container-padding text-white bg-primary">
                <p class="col py-3 h2 mb-0 text-nowrap">{{ __('Golden Visa') }}<small class="d-block font-size-base">{{ __('Eligible') }}</small></p>
                <p class="col py-3 h2 mb-0 text-nowrap">{{ __('4%') }}<small class="d-block font-size-base">{{ __('NET Rental Yields') }}</small></p>
                <p class="col py-3 h2 mb-0 text-nowrap">{{ __('Furniture') }}<small class="d-block font-size-base">{{ __('Included') }}</small></p>
            </div>
        </div>
    </div>

    <section class="container-fluid space-double">
        <div class="grid-faro-gallery photoswipe-wrapper" data-photoswipe-gid="gallery">
            <figure class="ie11-grid-1 rx4">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/living-room.jpg') }}" data-photoswipe-pid="living-room" data-photoswipe-size="2560x1829" class="photoswipe"><img loading="lazy" width="600" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/thumbnails/living-room.jpg') }}" alt="{{ __('Living Room') }}"></a>
            </figure>
            <figure class="ie11-grid-2 rx4">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/facade.jpg') }}" data-photoswipe-pid="facade" data-photoswipe-size="2560x1387" class="photoswipe"><img loading="lazy" width="600" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/thumbnails/facade.jpg') }}" alt="{{ __('3D image of No.9 Faro') }}"></a>
            </figure>
            <figure class="ie11-grid-3 rx3">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/terrace.jpg') }}" data-photoswipe-pid="terrace" data-photoswipe-size="2560x1552" class="photoswipe"><img loading="lazy" width="600" height="380" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 380'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/thumbnails/terrace.jpg') }}" alt="{{ __('Terrace') }}"></a>
            </figure>
            <figure class="ie11-grid-4 rx3">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/bedroom.jpg') }}" data-photoswipe-pid="bedroom" data-photoswipe-size="2560x1829" class="photoswipe"><img loading="lazy" width="600" height="380" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 380'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/thumbnails/bedroom.jpg') }}" alt="{{ __('Master Bedroom') }}"></a>
            </figure>
            <figure class="ie11-grid-5 rx5">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/bathroom.jpg') }}" data-photoswipe-pid="bathroom" data-photoswipe-size="2048x2560" class="photoswipe"><img loading="lazy" width="600" height="640" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 640'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/thumbnails/bathroom.jpg') }}" alt="{{ __('Bathroom') }}"></a>
            </figure>
            <figure class="ie11-grid-6 rx3">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/kitchen.jpg') }}" data-photoswipe-pid="kitchen" data-photoswipe-size="2048x2560" class="photoswipe"><img loading="lazy" width="600" height="380" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 380'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/thumbnails/kitchen.jpg') }}" alt="{{ __('Kitchen') }}"></a>
            </figure>
            <figure class="ie11-grid-7 rx4 cx2">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/rooftop.jpg') }}" data-photoswipe-pid="rooftop" data-photoswipe-size="2560x1440" class="photoswipe"><img loading="lazy" width="1240" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1240 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/gallery/thumbnails/rooftop.jpg') }}" alt="{{ __('Rooftop') }}"></a>
            </figure>
            <a id="download-brochure" class="figure ie11-grid-8 rx2 btn btn-secondary d-flex align-items-center justify-content-center text-white" href="{{ Helper::download('no-9-faro-portugal', 'brochure') }}"><p class="h3">{{ __('Download No.9 Faro Brochure') }}</p></a>
        </div>
    </section>

    <section id="faq" class="container-fluid space-double">
        <div class="bg-light space-single">
            <div class="container">
                <div class="head-section">
                    <h2 class="mb-5">{{ __('No.9 Faro FAQ') }}</h2>
                    <article class="my-4">
                        <h3 class="h4">01. {{ __('Are the apartments new?') }}</h3>
                        <p>{{ __('The apartments were originally built in 1957 and the regeneration project by MESPIL will commence February 2020') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">02. {{ __('When does the renovation start and when is it finished?') }}</h3>
                        <p>{{ __('February 2020 and will take approximately 3 months to finish with occupants taking residence around May this year.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">03. {{ __('Are the units sold furnished?') }}</h3>
                        <p>{{ __('Yes, all apartments are brought to market turn key. The properties have been designed and fit out by a local interior designer.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">04. {{ __('Is there parking included?') }}</h3>
                        <p>{{ __('There are no designated parking spaces with the building however there is plenty of parking on the street and immediate area both free and paid options.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">05. {{ __('Is the rooftop terrace private?') }}</h3>
                        <p>{{ __('Yes, the rooftop in No.9 Faro is a completely private space and it has been divided so that each apartment on the first and second floors has been allocated a private space for their personal use.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">06. {{ __('Is there security or alarm installation?') }}</h3>
                        <p>{{ __('The building will be accessed via keyless/touch pad. The management company will discuss with all owners the level of security required however Portugal is number 3 in the world for safest countries.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">07. {{ __('If I choose to sign up for a rental contract can I use the apartment myself and if so for how long?') }}</h3>
                        <p>{{ __('No, the rental contracts for Faro will focus on long term rentals ie: 12 months. However should you wish to visit for a number of weeks there are plenty of options locally to rent which might be an option.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">08. {{ __('What are the condominium cost and what is included?') }}</h3>
                        <p>{{ __('The Condominium fees will be set between the management company and the property owners however an approximate figure of €100 per month to cover cleaning of the entrance hall way, common areas, communal lights and building insurance is a good estimate.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">09. {{ __('What is the yearly IMI tax?') }}</h3>
                        <p>{{ __('Taking comparable properties as a guestimate, you should expect to pay around €150 per year.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">10. {{ __('What tax do I need to pay for the purchase?') }}</h3>
                        <p>{{ __('The purchase tax is around 6% of the purchase price. Eg: a purchase price of €320.000 (€50.000 of this the renovation cost) you would pay IMT tax of €14.564.75 and stamp duty 0.8% €2560 which is a total purchase tax of €17124.75') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">11. {{ __('What is the heating system?') }}</h3>
                        <p>{{ __('The building has a brand new aircon heating and cooling system.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">12. {{ __('Is there a tumble dryer included?') }}</h3>
                        <p>{{ __('Yes, each apartment will be fitted with a washer/tumble dryer.') }}</p>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link href="{{ Helper::autover('/css/{subdomain}/vendor/photoswipe.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script>
        if (typeof gtag != 'undefined') {
            document.querySelector('#download-brochure').addEventListener('click', function () {
                gtag('event', 'download', {'event_category': 'Downloads', 'event_action': 'Download', 'event_label': 'No.9 Faro Brochure'});
            });
        }

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
            const center = {lat: 37.016763, lng: -7.926337};

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
                title: '{{ __('No.9, Faro, Portugal') }}',
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    scale: 16,
                    fillOpacity: 1,
                    strokeOpacity: 1,
                    fillColor: '#bc954d',
                    strokeColor: '#bc954d',
                },
                label: {
                    text: '{{ __('No.9') }}',
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

        const buildingVideo = document.querySelector('#no-9-faro-portugal-building video');
        if (buildingVideo) {
            let buildingVideoStartEvent = false;
            let buildingVideoCompleteEvent = false;

            buildingVideo.onplay = function(e) {
                if (!buildingVideoStartEvent) {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'video_start', {'event_category': 'Video', 'event_action': 'Start', 'event_label': 'No.9 Faro, Building Intro'});
                    }

                    buildingVideoStartEvent = true;
                }
            };

            buildingVideo.onended = function(e) {
                this.load();
                if (!buildingVideoCompleteEvent) {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'video_complete', {'event_category': 'Video', 'event_action': 'Complete', 'event_label': 'No.9 Faro, Building Intro'});
                    }

                    buildingVideoCompleteEvent = true;
                }
            };
        }

        const groundFloorVideo = document.querySelector('#no-9-faro-portugal-2-bedroom-ground-floor-apartment video');
        if (groundFloorVideo) {
            let groundFloorVideoStartEvent = false;
            let groundFloorVideoCompleteEvent = false;

            groundFloorVideo.onplay = function(e) {
                if (!groundFloorVideoStartEvent) {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'video_start', {'event_category': 'Video', 'event_action': 'Start', 'event_label': 'No.9 Faro, 2 Bedroom Ground Floor Apartment'});
                    }

                    groundFloorVideoStartEvent = true;
                }
            };

            groundFloorVideo.onended = function(e) {
                this.load();
                if (!groundFloorVideoCompleteEvent) {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'video_complete', {'event_category': 'Video', 'event_action': 'Complete', 'event_label': 'No.9 Faro, 2 Bedroom Ground Floor Apartment'});
                    }

                    groundFloorVideoCompleteEvent = true;
                }
            };
        }

        const firstFloorVideo = document.querySelector('#no-9-faro-portugal-2-bedroom-first-floor-apartment video');
        if (firstFloorVideo) {
            let firstFloorVideoStartEvent = false;
            let firstFloorVideoCompleteEvent = false;

            firstFloorVideo.onplay = function(e) {
                if (!firstFloorVideoStartEvent) {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'video_start', {'event_category': 'Video', 'event_action': 'Start', 'event_label': 'No.9 Faro, 2 Bedroom First Floor Apartment'});
                    }

                    firstFloorVideoStartEvent = true;
                }
            };

            firstFloorVideo.onended = function(e) {
                this.load();
                if (!firstFloorVideoCompleteEvent) {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'video_complete', {'event_category': 'Video', 'event_action': 'Complete', 'event_label': 'No.9 Faro, 2 Bedroom First Floor Apartment'});
                    }

                    firstFloorVideoCompleteEvent = true;
                }
            };
        }

        const secondFloorVideo = document.querySelector('#no-9-faro-portugal-2-bedroom-second-floor-apartment video');
        if (secondFloorVideo) {
            let secondFloorVideoStartEvent = false;
            let secondFloorVideoCompleteEvent = false;

            secondFloorVideo.onplay = function(e) {
                if (!secondFloorVideoStartEvent) {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'video_start', {'event_category': 'Video', 'event_action': 'Start', 'event_label': 'No.9 Faro, 2 Bedroom Second Floor Apartment'});
                    }

                    secondFloorVideoStartEvent = true;
                }
            };

            secondFloorVideo.onended = function(e) {
                this.load();
                if (!secondFloorVideoCompleteEvent) {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'video_complete', {'event_category': 'Video', 'event_action': 'Complete', 'event_label': 'No.9 Faro, 2 Bedroom Second Floor Apartment'});
                    }

                    secondFloorVideoCompleteEvent = true;
                }
            };
        }

        const rooftopVideo = document.querySelector('#no-9-faro-portugal-private-rooftop-garden video');
        if (rooftopVideo) {
            let rooftopVideoStartEvent = false;
            let rooftopVideoCompleteEvent = false;

            rooftopVideo.onplay = function(e) {
                if (!rooftopVideoStartEvent) {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'video_start', {'event_category': 'Video', 'event_action': 'Start', 'event_label': 'No.9 Faro, Private Rooftop Garden'});
                    }

                    rooftopVideoStartEvent = true;
                }
            };

            rooftopVideo.onended = function(e) {
                this.load();
                if (!rooftopVideoCompleteEvent) {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'video_complete', {'event_category': 'Video', 'event_action': 'Complete', 'event_label': 'No.9 Faro, Private Rooftop Garden'});
                    }

                    rooftopVideoCompleteEvent = true;
                }
            };
        }

        const faroVideo = document.querySelector('#no-9-faro-portugal-introduction-to-faro video');
        if (faroVideo) {
            let faroVideoStartEvent = false;
            let faroVideoCompleteEvent = false;

            faroVideo.onplay = function(e) {
                if (!faroVideoStartEvent) {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'video_start', {'event_category': 'Video', 'event_action': 'Start', 'event_label': 'No.9 Faro, Private Rooftop Garden'});
                    }

                    faroVideoStartEvent = true;
                }
            };

            faroVideo.onended = function(e) {
                this.load();
                if (!faroVideoCompleteEvent) {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'video_complete', {'event_category': 'Video', 'event_action': 'Complete', 'event_label': 'No.9 Faro, Introduction to Faro'});
                    }

                    faroVideoCompleteEvent = true;
                }
            };
        }
    </script>
@endpush
