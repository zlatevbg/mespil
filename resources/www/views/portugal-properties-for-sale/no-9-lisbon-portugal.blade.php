@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('No.9, Lisbon apartments for sale | Property for sale Lisbon, Portugal'))
@section('description', __('Buy large modern apartments in No.9, Lisbon. A city centre Lisbon development of 17 turn-key apartments: 5% rental yield, fully managed, golden visa eligible.'))

@section('content')
    {{-- <div id="property-video">
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-9-lisbon-portugal-inverted.svg') }}" alt="{{ __('Logo: No.9, Lisbon, Portugal') }}" height="200" width="124">
            </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" autoplay muted playsinline preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/poster.jpg') }}">
                <source src="/video/no-9-lisbon-portugal.mp4" type="video/mp4"/>
            </video>
        </div>
    </div> --}}
    <div class="property-hero">
        <div class="embed-responsive embed-responsive-16by9 h-100">
            <img loading="eager" class="embed-responsive-item" src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/hero.jpg') }}" alt="{{ __('3D image of No.9, Lisbon, Portugal') }}" height="1080" width="1920">
        </div>
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-9-lisbon-portugal-inverted.svg') }}" alt="{{ __('Logo: No.9, Lisbon, Portugal') }}" height="200" width="124">
            </div>
        </div>
    </div>

    <div class="container container-md-fluid space-single-top">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-start align-items-center mr-3" href="{{ Helper::route('property-for-sale', 'pine-hills-vilamoura-portugal') }}">@fas('long-arrow-alt-left', 'mr-3 fa-2x')<span class="text-nowrap">{{ __('Previous property') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('Pine Hills Vilamoura, Portugal') }}</span></a>
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-end align-items-center ml-3 text-right" href="{{ Helper::route('property-for-sale', 'no-57-lisbon-portugal') }}"><span class="text-nowrap">{{ __('Next property') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('No.57 Lisbon, Portugal') }}</span>@fas('long-arrow-alt-right', 'ml-3 fa-2x')</a>
        </div>
    </div>

    <div class="container space-double space-single-top">
        <div class="row row-cols-1 row-cols-xl-2 mb-n5">
            <div class="col mb-5 position-relative">
                <h1 class="title-border {{ $available->count() ? '' : 'title-border-sold' }} mb-5">{{ __('No.9') }}<br><small class="h3 font-weight-normal">{{ __('Property for sale in Lisbon, Portugal') }}</small></h1>
                @if ($available->count())
                    <p class="property-price">{{ __('from') }}<span class="h2 text-secondary m-0 ml-2">{{ __('€') . ' ' . number_format($available->min('price'), 0, ' ', ' ') }}</span></p>
                @else
                    <p class="project-status status-red text-white p-2">{{ __('Sold Out') }}</p>
                @endif
                <p class="mb-4 mb-xl-5">{!! __('Our city centre Lisbon development consists of 17 luxury apartments and 5 commercial spaces situated in a prime established residential in-demand neighbourhood. :link qualifying.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('Golden Visa') . '</a>']) !!}</p>
                <div class="property-contacts bg-light p-4">
                    <div class="row mb-n3">
                        <div class="col col-auto mb-3">
                            <p class="fa-left text-nowrap">@fas('phone', 'text-primary fa-fw fa-lg')<a class="text-secondary" data-track-phone="Property - No.9 Lisbon: " href="tel:{{ __('mespil.phone.ireland') }}">{{ __('mespil.phone.ireland') }}</a></p>
                            <p class="fa-left text-nowrap">@fas('envelope', 'text-primary fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Property - No.9 Lisbon: " data-email="{{ str_rot13(__('mespil.email')) }}">[email]</a></p>
                        </div>
                        <div class="col col-auto mb-3">
                            @fas('map-marker-alt', 'text-primary fa-fw fa-lg')
                            <ul class="list-unstyled d-inline-block align-top mb-0">
                                <li>{{ __('9 Avenida de Madrid,') }}<br>{{ __('1000-193 Lisbon,') }}<br>{{ __('Portugal') }}</li>
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
                    <h2 class="mb-4">{{ __('No.9 Lisbon Apartments For Sale') }}</h2>
                    <p>{{ __('Introducing No.9 Lisbon, a mixed use development of 17 large, bright and airy residential apartments with 5 ground floor commercial units located in the heart of the city centre. A unique urban renewal Portuguese architecture with units ranging from T1 to T4 typologies many with large terraces and commanding city views over Portugal’s capital.') }}</p>
                </div>
            </div>
        </div>

        <div class="container-fluid space-double">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5 justify-content-md-center">
                <div class="col mb-5">
                    <div class="card card-apartments h-100 text-center">
                        @include(Helper::subdomain() . '::portugal-properties-for-sale/no-9-lisbon-portugal-apartments')
                        <p class="lead mb-0 bg-secondary p-3 text-white">{{ __('Apartments') . ' ' . __('from') . ' ' . __('€') . ' ' . number_format($available->min('price'), 0, ' ', ' ') }}</p>
                        <div class="card-body photoswipe-wrapper" data-photoswipe-gid="floorplans">
                            <p class="card-text card-text-large">{{ __('Beautifully designed one-bedroom apartments; Spacious and sleek two-bedroom apartments; Deluxe three-bedroom penthouse with private roof terrace and lift') }}</p>
                            <a data-photoswipe-pid="t0" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/floorplans/t0.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('T1, ground floor, small') }}</a>
                            <a data-photoswipe-pid="t1" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/floorplans/t1.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('T1, ground floor, large') }}</a>
                            <a data-photoswipe-pid="t2" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/floorplans/t2.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('T2') }}</a>
                            <a data-photoswipe-pid="t3" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/floorplans/t3.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('T3') }}</a>
                            <a data-photoswipe-pid="t3-penthouse" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/floorplans/t3-penthouse.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('T3 Penthouse') }}</a>
                            <a data-photoswipe-pid="t4" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/floorplans/t4.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('T4') }}</a>
                            <a data-photoswipe-pid="t6-penthouse" data-photoswipe-size="1754x1240" class="photoswipe btn btn-primary mx-1 mt-3" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/floorplans/t6-penthouse.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }} - {{ __('T6 Penthouse') }}</a>
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
                <h2>{{ __('List of Sold Out Apartments in No.9 Lisbon') }}</h2>
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
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/portugal/lisbon/guide.jpg') }}" class="img-fit-300" alt="{{ __('Lisbon, Portugal') }}">
                </div>
                <div class="col-lg-6">
                    <div class="card-body">
                        <h3 class="title-border mb-4 text-uppercase">{{ __('Lisbon Real Estate Location Guide') }}</h3>
                        <p class="card-text">{!! __('Lisbon, the capital of Portugal, is one of the oldest cities in Europe with impressive preserved architecture, warm climate with many sunny days and fascinating locations to visit. :strong', ['strong' => '<strong>' . __('A truly desirable location for property investors!') . '</strong>']) !!}</p>
                        <a class="btn btn-lg btn-outline-secondary" href="{{ Helper::route('portugal', 'lisbon') }}">{{ __('Read the guide') }}@fas('long-arrow-alt-right', 'ml-3')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fast-facts-wrapper space-single position-relative">
        <div class="embed-responsive embed-responsive-16by9 embed-responsive-facts h-100"><img loading="lazy" class="embed-responsive-item" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920 1080'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/facts.jpg') }}" alt="{{ __('Aerial street view, Lisbon, Portugal') }}" height="1080" width="1920"></div>
        <div class="container overlay-wrapper d-flex flex-column align-items-center justify-content-center text-center">
            <h2 class="h1 mb-5">{{ __('No.9 Lisbon Fast Facts') }}</h2>
            <p class="max-width-lg font-size-lg">{{ __('No.9 Lisbon is brought to market as a full turn-key Portugal Golden Visa property investment ideal for buyers looking for a home in an exciting European city, or for property investors looking for strong capital appreciation investments and guaranteed rental yields.') }}</p>
            <div class="fast-facts-awards align-items-center py-5 px-3" style="--fast-facts-background: url('{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/facts.jpg', null, false) }}');">
                <img loading="lazy" class="img-fluid" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 200'%3E%3C/svg%3E" data-src="{{ Helper::autover('/svg/{subdomain}/award-no-9-lisbon-ipa-2020.svg') }}" alt="{{ __('IPA 2020 Awards: Best Residential Renovation/Redevelopment Portugal and Best Apartment/Condominium Portugal') }}" height="200" width="576">
            </div>
            <div class="fast-facts row row-cols-1 row-cols-sm-3 container-padding text-white bg-primary">
                <p class="col py-3 h2 mb-0 text-nowrap">{{ __('50%') }}<small class="d-block font-size-base">{{ __('Sold @ Pre-Launch') }}</small></p>
                <p class="col py-3 h2 mb-0">{{ __('Restoring Lisbon') }}</p>
                <p class="col py-3 h2 mb-0 text-nowrap">{{ __('Global') }}<small class="d-block font-size-base">{{ __('Golden Visa Demand') }}</small></p>
            </div>
        </div>
    </div>

    <section class="container-fluid space-double">
        <div class="grid-no9-gallery photoswipe-wrapper" data-photoswipe-gid="gallery">
            <figure class="ie11-grid-1 rx4 cx2">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/kitchen.jpg') }}" data-photoswipe-pid="kitchen" data-photoswipe-size="1680x1400" class="photoswipe"><img loading="lazy" width="600" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/thumbnails/kitchen.jpg') }}" alt="{{ __('Kitchen') }}"></a>
            </figure>
            <figure class="ie11-grid-2 rx4 cx2">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/bathroom.jpg') }}" data-photoswipe-pid="bathroom" data-photoswipe-size="2560x2560" class="photoswipe"><img loading="lazy" width="600" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/thumbnails/bathroom.jpg') }}" alt="{{ __('Bathroom') }}"></a>
            </figure>
            <figure class="ie11-grid-3 rx3 cx2">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/bedroom.jpg') }}" data-photoswipe-pid="bedroom" data-photoswipe-size="2560x1551" class="photoswipe"><img loading="lazy" width="600" height="380" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 380'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/thumbnails/bedroom.jpg') }}" alt="{{ __('Master Bedroom') }}"></a>
            </figure>
            <figure class="ie11-grid-4 rx3 cx2">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/living-room.jpg') }}" data-photoswipe-pid="living-room" data-photoswipe-size="2560x1920" class="photoswipe"><img loading="lazy" width="600" height="380" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 380'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/thumbnails/living-room.jpg') }}" alt="{{ __('Living Room') }}"></a>
            </figure>
            <figure class="ie11-grid-5 rx5 cx2">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/coffee-shop.jpg') }}" data-photoswipe-pid="coffee-shop" data-photoswipe-size="2083x2500" class="photoswipe"><img loading="lazy" width="600" height="640" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 640'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/thumbnails/coffee-shop.jpg') }}" alt="{{ __('Coffee Shop') }}"></a>
            </figure>
            <figure class="ie11-grid-6 rx3 cx2">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/terrace.jpg') }}" data-photoswipe-pid="terrace" data-photoswipe-size="2100x1500" class="photoswipe"><img loading="lazy" width="600" height="380" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 380'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/thumbnails/terrace.jpg') }}" alt="{{ __('Terrace | Three-bedroom penthouse') }}"></a>
            </figure>
            <figure class="ie11-grid-7 rx4 cx2">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/facade.jpg') }}" data-photoswipe-pid="facade" data-photoswipe-size="2500x2083" class="photoswipe"><img loading="lazy" width="600" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/thumbnails/facade.jpg') }}" alt="{{ __('3D image of No.9 Lisbon') }}"></a>
            </figure>
            <figure class="ie11-grid-8 rx4">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/staircase.jpg') }}" data-photoswipe-pid="staircase" data-photoswipe-size="2360x2500" class="photoswipe"><img loading="lazy" width="400" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/thumbnails/staircase.jpg') }}" alt="{{ __('Staircase') }}"></a>
            </figure>
            <figure class="ie11-grid-9 rx4">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/corridor.jpg') }}" data-photoswipe-pid="corridor" data-photoswipe-size="1888x2000" class="photoswipe"><img loading="lazy" width="400" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/gallery/thumbnails/corridor.jpg') }}" alt="{{ __('Corridor') }}"></a>
            </figure>
            <a id="download-brochure" class="figure ie11-grid-10 rx2 cx2 btn btn-secondary d-flex align-items-center justify-content-center text-white" href="{{ Helper::download('no-9-lisbon-portugal', 'brochure') }}"><p class="h3">{{ __('Download No.9 Lisbon Brochure') }}</p></a>
        </div>
    </section>

    <section id="faq" class="container-fluid space-double">
        <div class="bg-light space-single">
            <div class="container">
                <div class="head-section">
                    <h2 class="mb-5">{{ __('No.9 Lisbon FAQ') }}</h2>
                    <article class="my-4">
                        <h3 class="h4">01. {{ __('When is the renovation finished?') }}</h3>
                        <p>{{ __('Regeneration and refurbishment works will be completed March 2021 ready for our first occupants to reside in the building.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">02. {{ __('Are the units sold furnished?') }}</h3>
                        <p>{{ __('Yes, all apartments are brought to market turn key. The mid-century modern interiors were completed by OMEY, a leading Portuguese interior design and art company.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">03. {{ __('Is there parking included?') }}</h3>
                        <p>{{ __('There is no parking within the building however there is ample off street parking available, both paid and free options.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">04. {{ __('Is there a rooftop terrace?') }}</h3>
                        <p>{{ __('There is no rooftop terrace as this space is owned by the 2 x penthouse property owners and as such is for private use.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">05. {{ __('Is there security or alarm installation?') }}</h3>
                        <p>{!! __('Yes, there is a video electronic access for controlled entrance to the building. Portugal is the 3:rd safest country in the world and experiences very low crime rates.', ['rd' => '<sup>' . __('rd') . '</sup>']) !!}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">06. {{ __('What are the condominium cost and what is included?') }}</h3>
                        <p>{{ __('The condominium fee will be set by the management company and owners depending on services required. As an approximate guess using comparable buildings it will be around €150 a month. This fee includes cleaning of the entrance/hall way, common areas, communal lighting, building insurance, maintenance contract elevators etc') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">07. {{ __('What tax do I need to pay for the purchase?') }}</h3>
                        <p>{{ __('The purchase tax is around 6% over the purchase price, for example taking a purchase price of €320.000 (€50.000 being the renovation cost) you would be obliged to pay IMT tax of €14.564.75 and stamp duty 0.8% of €2.560, bringing the total purchase tax to €17.124.75') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">08. {{ __('What is the heating system?') }}</h3>
                        <p>{{ __('The heating system is a brand new Aircon heating and cooling installation') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">09. {{ __('Is there a washing machine included?') }}</h3>
                        <p>{{ __('Yes there is both a washing machine and dryer included in the furniture pack inventory.') }}</p>
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
                gtag('event', 'download', {'event_category': 'Downloads', 'event_action': 'Download', 'event_label': 'No.9 Lisbon Brochure'});
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
                title: '{{ __('No.9, Lisbon, Portugal') }}',
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
    </script>
@endpush
