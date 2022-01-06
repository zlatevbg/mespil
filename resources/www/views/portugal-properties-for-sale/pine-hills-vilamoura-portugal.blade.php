@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Pine Hills Vilamoura apartments for sale | Vilamoura property for sale'))
@section('description', __('Buy luxury villa apartments in Pine Hills, Vilamoura. A fully managed multi-award winning resort in the heart of Algarve’s golden triangle near Marina Vilamoura'))

@section('content')
    {{-- <div id="property-video">
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-pine-hills-vilamoura-portugal-inverted.svg') }}" alt="{{ __('Logo: Pine Hills, Vilamoura, Portugal') }}" height="124" width="200">
            </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" autoplay muted playsinline preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/poster.jpg') }}">
                <source src="/video/pine-hills-vilamoura-portugal.mp4" type="video/mp4"/>
            </video>
        </div>
    </div> --}}
    <div class="property-hero">
        <div class="embed-responsive embed-responsive-16by9 h-100">
            <img loading="eager" class="embed-responsive-item" src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/hero.jpg') }}" alt="{{ __('Aerial view of Pine Hills, Vilamoura, Portugal') }}" height="1080" width="1920">
        </div>
        <div class="container overlay-wrapper overlay-property">
            <div class="property-logo">
                <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-pine-hills-vilamoura-portugal-inverted.svg') }}" alt="{{ __('Logo: Pine Hills, Vilamoura, Portugal') }}" height="124" width="200">
            </div>
        </div>
    </div>

    <div class="container container-md-fluid space-single-top">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-start align-items-center mr-3" href="{{ Helper::route('property-for-sale', 'no-9-faro-portugal') }}">@fas('long-arrow-alt-left', 'mr-3 fa-2x')<span class="text-nowrap">{{ __('Previous property') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('No.9 Faro, Portugal') }}</span></a>
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-end align-items-center ml-3 text-right" href="{{ Helper::route('property-for-sale', 'no-9-lisbon-portugal') }}"><span class="text-nowrap">{{ __('Next property') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('No.9 Lisbon, Portugal') }}</span>@fas('long-arrow-alt-right', 'ml-3 fa-2x')</a>
        </div>
    </div>

    <div class="container space-double space-single-top">
        <div class="row row-cols-1 row-cols-xl-2 mb-n5">
            <div class="col mb-5 position-relative">
                <h1 class="title-border {{ $available->count() ? '' : 'title-border-sold' }} mb-5">{{ __('Pine Hills') }}<br><small class="h3 font-weight-normal">{{ __('Property for sale in Vilamoura, Portugal') }}</small></h1>
                @if ($available->count())
                    <p class="property-price">{{ __('from') }}<span class="h2 text-secondary m-0 ml-2">{{ __('€') . ' ' . number_format($available->min('price'), 0, ' ', ' ') }}</span></p>
                @else
                    <p class="project-status status-red text-white p-2">{{ __('Sold Out') }}</p>
                @endif
                <p class="mb-4 mb-xl-5">{{ __('A fully managed multi-award winning luxury resort in the heart of Algarve’s golden triangle. 1, 2, 3 bedroom villa style apartments available for residential and rental income investment.') }}</p>
                <div class="property-contacts bg-light p-4">
                    <div class="row mb-n3">
                        <div class="col col-auto mb-3">
                            <p class="fa-left text-nowrap">@fas('phone', 'text-primary fa-fw fa-lg')<a class="text-secondary" data-track-phone="Property - Pine Hills Vilamoura: " href="tel:{{ __('+351 289 24 55 00') }}">{{ __('+351 289 24 55 00') }}</a></p>
                            <p class="fa-left text-nowrap">@fas('envelope', 'text-primary fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Property - Pine Hills Vilamoura: " data-email="{{ str_rot13(__('info@pinehillsvilamoura.com')) }}">[email]</a></p>
                            <p class="fa-left text-nowrap">@fas('globe', 'text-primary fa-fw fa-lg')<a class="text-secondary" href="https://www.pinehillsvilamoura.com/">{{ __('www.pinehillsvilamoura.com') }}</a></p>
                        </div>
                        <div class="col col-auto mb-3">
                            @fas('map-marker-alt', 'text-primary fa-fw fa-lg')
                            <ul class="list-unstyled d-inline-block align-top mb-0">
                                <li>{{ __('Estrada do Morgadinho,') }}<br>{{ __('Urbanização Vila Sol,') }}<br>{{ __('8125-307 Vilamoura,') }}<br>{{ __('Algarve, Portugal') }}</li>
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
                    <h2 class="mb-4">{{ __('Pine Hills Vilamoura Apartments For Sale') }}</h2>
                    <p>{{ __('Located in one of the 3 corners of the prestigious Golden Triangle of the Algarve, Pine Hills boasts a perfect location with a touch of exclusivity and sense of community. Get in touch to see why we are almost sold out and see for yourself the tranquillity and quality of life that awaits you. Pine Hills really is a slice of Paradise - a sanctuary of tranquility on the Algarve.') }}</p>
                </div>
            </div>
        </div>

        <div class="container-fluid space-double">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5 justify-content-md-center">
                @if ($available->contains('bed', 'T3'))
                    <div class="col mb-5">
                        <div class="card card-apartments h-100 text-center">
                            @include(Helper::subdomain() . '::portugal-properties-for-sale/pine-hills-vilamoura-portugal-t3')
                            <p class="lead mb-0 bg-secondary p-3 text-white">{{ __('T3') . ' ' . __('from €') . ' ' . number_format($available->where('bed', 'T3')->min('price'), 0, '', ' ') }}</p>
                            <div class="card-body photoswipe-wrapper vr-tours" data-photoswipe-gid="floorplans">
                                <p class="card-text card-text-large">{{ __('Deluxe three-bedroom penthouse with private roof terrace and lift') }}</p>
                                <a data-photoswipe-pid="t3-1" data-photoswipe-size="2430x960" class="photoswipe btn btn-primary" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/floorplans/t3-1.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }}</a>
                                <a data-photoswipe-pid="t3-2" data-photoswipe-size="1026x960" class="photoswipe" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/floorplans/t3-2.jpg') }}"></a>
                                <a class="vr-tour btn btn-primary" data-iframe="#iframe-apartments" target="_blank" href="https://my.matterport.com/show/?m=WVgvrTtNqea&title=0">@fas('play-circle', 'fa-lg fa-fw'){{ __('Virtual Tour') }}</a>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($available->contains('bed', 'T2'))
                    <div class="col mb-5">
                        <div class="card card-apartments h-100 text-center">
                            @include(Helper::subdomain() . '::portugal-properties-for-sale/pine-hills-vilamoura-portugal-t2')
                            <p class="lead mb-0 bg-secondary p-3 text-white">{{ __('T2') . ' ' . __('from €') . ' ' . number_format($available->where('bed', 'T2')->min('price'), 0, '', ' ') }}</p>
                            <div class="card-body photoswipe-wrapper vr-tours" data-photoswipe-gid="floorplans">
                                <p class="card-text card-text-large">{{ __('Spacious and sleek two-bedroom apartment') }}</p>
                                <a data-photoswipe-pid="t2" data-photoswipe-size="1929x960" class="photoswipe btn btn-primary" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/floorplans/t2.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }}</a>
                                <a class="vr-tour btn btn-primary" data-iframe="#iframe-apartments" target="_blank" href="https://my.matterport.com/show/?m=fFAWy5VnzHL&title=0">@fas('play-circle', 'fa-lg fa-fw'){{ __('Virtual Tour') }} - {{ __('ground floor') }}</a>
                                <a class="vr-tour btn btn-primary" data-iframe="#iframe-apartments" target="_blank" href="https://my.matterport.com/show/?m=ZJEdWojdTGf&title=0">@fas('play-circle', 'fa-lg fa-fw'){{ __('Virtual Tour') }} - {{ __('first floor') }}</a>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($available->contains('bed', 'T1'))
                    <div class="col mb-5">
                        <div class="card card-apartments h-100 text-center">
                            @include(Helper::subdomain() . '::portugal-properties-for-sale/pine-hills-vilamoura-portugal-t1')
                            <p class="lead mb-0 bg-secondary p-3 text-white">{{ __('T1') . ' ' . __('from €') . ' ' . number_format($available->where('bed', 'T1')->min('price'), 0, '', ' ') }}</p>
                            <div class="card-body photoswipe-wrapper" data-photoswipe-gid="floorplans">
                                <p class="card-text card-text-large">{{ __('Beautifully designed one-bedroom apartment') }}</p>
                                <a data-photoswipe-pid="t1" data-photoswipe-size="1769x960" class="photoswipe btn btn-primary" href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/floorplans/t1.jpg') }}">@fas('file-image', 'fa-lg fa-fw'){{ __('Floorplan') }}</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="container">
                <iframe id="iframe-apartments" class="d-none mt-5 iframe" frameborder="0" allowfullscreen="true" width="100%" height="auto"></iframe>
            </div>
        </div>

        <div class="container space-single">
            <h3 class="mb-4 font-weight-normal text-center">{{ __('Last number of units released') }}</h3>
            <div class="table-responsive">
                <table class="table table-hover mb-0" cellspacing="0" cellpadding="5" border="0">
                    <thead>
                        <tr>
                            <th class="text-center text-nowrap" scope="col">{{ __('Unit') }}</th>
                            <th class="text-center text-nowrap" scope="col">{{ __('Block') }}</th>
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
                                <td class="text-center text-nowrap">{{ $apartment->block }}</td>
                                <td class="text-center text-nowrap">{{ $apartment->floor }}</td>
                                <td class="text-center text-nowrap">{{ $apartment->bed }}</td>
                                <td class="text-right text-nowrap">{!! $apartment->apartment_area ? $apartment->apartment_area . ' ' . __('m2') : '' !!}</td>
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
                <h2>{{ __('List of Sold Out Apartments in Pine Hills Vilamoura') }}</h2>
            </div>

            @if (!($available->contains('bed', 'T1') && $available->contains('bed', 'T2') && $available->contains('bed', 'T3')))
                <div class="container space-single">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5 justify-content-md-center">
                        @if (!$available->contains('bed', 'T3'))
                            <div class="col mb-5">
                                <div class="card card-apartments h-100 text-center">
                                    @include(Helper::subdomain() . '::portugal-properties-for-sale/pine-hills-vilamoura-portugal-t3')
                                    <div class="card-body">
                                        <p class="card-text lead text-danger">{{ __('T3') }} - {{ __('Sold Out') }}</p>
                                        <p class="card-text">{{ __('Deluxe three-bedroom penthouse with private roof terrace and lift') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (!$available->contains('bed', 'T2'))
                            <div class="col mb-5">
                                <div class="card card-apartments h-100 text-center">
                                    @include(Helper::subdomain() . '::portugal-properties-for-sale/pine-hills-vilamoura-portugal-t2')
                                    <div class="card-body">
                                        <p class="card-text lead text-danger">{{ __('T2') }} - {{ __('Sold Out') }}</p>
                                        <p class="card-text">{{ __('Spacious and sleek two-bedroom apartment') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (!$available->contains('bed', 'T1'))
                            <div class="col mb-5">
                                <div class="card card-apartments h-100 text-center">
                                    @include(Helper::subdomain() . '::portugal-properties-for-sale/pine-hills-vilamoura-portugal-t1')
                                    <div class="card-body">
                                        <p class="card-text lead text-danger">{{ __('T1') }} - {{ __('Sold Out') }}</p>
                                        <p class="card-text">{{ __('Beautifully designed one-bedroom apartment') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            <div class="container space-single">
                <div class="table-responsive table-sold">
                    <table class="table table-hover" cellspacing="0" cellpadding="5" border="0">
                        <thead>
                            <tr>
                                <th class="text-center text-nowrap" scope="col">{{ __('Unit') }}</th>
                                <th class="text-center text-nowrap" scope="col">{{ __('Block') }}</th>
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
                                    <td class="text-center text-nowrap">{{ $apartment->block }}</td>
                                    <td class="text-center text-nowrap">{{ $apartment->floor }}</td>
                                    <td class="text-center text-nowrap">{{ $apartment->bed }}</td>
                                    <td class="text-right text-nowrap">{!! $apartment->apartment_area ? $apartment->apartment_area . ' ' . __('m2') : '' !!}</td>
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

    <div class="fast-facts-wrapper space-single position-relative">
        <div class="embed-responsive embed-responsive-16by9 embed-responsive-facts h-100"><img loading="lazy" class="embed-responsive-item" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1920 1080'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/facts.jpg') }}" alt="{{ __('Aerial view of Pine Hills, Vilamoura, Portugal at Sunset') }}" height="1080" width="1920"></div>
        <div class="container overlay-wrapper d-flex flex-column align-items-center justify-content-center text-center">
            <h2 class="h1 mb-5">{{ __('Pine Hills Vilamoura Fast Facts') }}</h2>
            <p class="max-width-lg font-size-lg">{{ __('Good investment is in our DNA, with an impressive resume of real estate investment credentials showing excellent returns, Pine Hills is another example of our award winning success.') }}</p>
            <div class="fast-facts-awards row row-cols-2 row-cols-md-4 align-items-center mb-n5 py-5" style="--fast-facts-background: url('{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/facts.jpg', null, false) }}');">
                <div class="col mb-5"><img loading="lazy" class="img-fluid" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 172 150'%3E%3C/svg%3E" data-src="{{ Helper::autover('/svg/{subdomain}/logo-world-travel-awards-2020.svg') }}" alt="{{ __('Logo: World Travel Awards 2020') }}" height="150" width="172"></div>
                <div class="col mb-5"><img loading="lazy" class="img-fluid" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 148 150'%3E%3C/svg%3E" data-src="{{ Helper::autover('/svg/{subdomain}/logo-tripadvisor-certificate-of-excellence-2018.svg') }}" alt="{{ __('Logo: TripAdvisor.com Certificate of Excellence 2018') }}" height="150" width="148"></div>
                <div class="col mb-5"><img loading="lazy" class="img-fluid" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 150 150'%3E%3C/svg%3E" data-src="{{ Helper::autover('/svg/{subdomain}/logo-booking-guest-review-awards-2018.svg') }}" alt="{{ __('Logo: Booking.com Guest Review Awards 2018') }}" height="150" width="150"></div>
                <div class="col mb-5"><img loading="lazy" class="img-fluid" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 260 150'%3E%3C/svg%3E" data-src="{{ Helper::autover('/svg/{subdomain}/award-pine-hills-vilamoura-ipa-2020.svg') }}" alt="{{ __('Logo: European Property Awards 2020 - 2021') }}" height="150" width="260"></div>
            </div>
            <div class="fast-facts row row-cols-1 row-cols-sm-3 container-padding text-white bg-primary">
                <p class="col py-3 h2 mb-0 text-nowrap">{{ __('Worldwide') }}<small class="d-block font-size-base">{{ __('Sales Demand') }}</small></p>
                <p class="col py-3 h2 mb-0 text-nowrap">{{ __('90%') }}<small class="d-block font-size-base">{{ __('Sold Out') }}</small></p>
                <p class="col py-3 h2 mb-0 text-nowrap">{{ __('Multi-Award') }}<small class="d-block font-size-base">{{ __('Winning Development') }}</small></p>
            </div>
        </div>
    </div>

    <section class="container-fluid space-double">
        <div class="grid-ph-gallery photoswipe-wrapper" data-photoswipe-gid="gallery">
            <figure class="ie11-grid-1 rx3">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/sunset.jpg') }}" data-photoswipe-pid="sunset" data-photoswipe-size="2560x1705" class="photoswipe"><img loading="lazy" width="600" height="380" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 380'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/thumbnails/sunset.jpg') }}" alt="{{ __('Aerial view of Pine Hills, Vilamoura, Portugal at sunset') }}"></a>
            </figure>
            <figure class="ie11-grid-2 rx4">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/garden.jpg') }}" data-photoswipe-pid="garden" data-photoswipe-size="2560x1709" class="photoswipe"><img loading="lazy" width="600" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/thumbnails/garden.jpg') }}" alt="{{ __('Garden') }}"></a>
            </figure>
            <figure class="ie11-grid-3 rx3">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/terrace.jpg') }}" data-photoswipe-pid="terrace" data-photoswipe-size="2560x1817" class="photoswipe"><img loading="lazy" width="600" height="380" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 380'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/thumbnails/terrace.jpg') }}" alt="{{ __('Terrace') }}"></a>
            </figure>
            <figure class="ie11-grid-4 rx3">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/fitness.jpg') }}" data-photoswipe-pid="fitness" data-photoswipe-size="2560x2103" class="photoswipe"><img loading="lazy" width="600" height="380" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 380'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/thumbnails/fitness.jpg') }}" alt="{{ __('Fitness Centre') }}"></a>
            </figure>
            <div class="figure ie11-grid-5 vr-tours">
                <a class="vr-tour btn btn-secondary d-flex align-items-center justify-content-center w-100 h-100 text-white" data-iframe="#iframe-main" target="_blank" href="https://h5.veer.tv/photo-player?pid=417312"><p class="h3">{!! __('360&deg; Virtual Tour') !!}</p></a>
            </div>
            <figure class="ie11-grid-6 rx3">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/pool-bar.jpg') }}" data-photoswipe-pid="pool-bar" data-photoswipe-size="2560x1448" class="photoswipe"><img loading="lazy" width="600" height="380" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 380'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/thumbnails/pool-bar.jpg') }}" alt="{{ __('Pool Bar') }}"></a>
            </figure>
            <figure class="ie11-grid-7 rx3">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/aerial.jpg') }}" data-photoswipe-pid="aerial" data-photoswipe-size="2560x1705" class="photoswipe"><img loading="lazy" width="600" height="380" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 380'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/thumbnails/aerial.jpg') }}" alt="{{ __('Aerial view of Pine Hills, Vilamoura') }}"></a>
            </figure>
            <figure class="ie11-grid-8 rx4 cx2">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/pool.jpg') }}" data-photoswipe-pid="pool" data-photoswipe-size="2560x1920" class="photoswipe"><img loading="lazy" width="1240" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1240 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/thumbnails/pool.jpg') }}" alt="{{ __('Pool') }}"></a>
            </figure>
            <figure class="ie11-grid-9 rx2">
                <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/bedroom.jpg') }}" data-photoswipe-pid="bedroom" data-photoswipe-size="2560x1920" class="photoswipe"><img loading="lazy" width="600" height="250" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 600 250'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/gallery/thumbnails/bedroom.jpg') }}" alt="{{ __('Master Bedroom') }}"></a>
            </figure>
            <a id="download-brochure" class="figure ie11-grid-10 rx2 btn btn-secondary d-flex align-items-center justify-content-center text-white" href="{{ Helper::download('pine-hills-vilamoura-portugal', 'brochure') }}"><p class="h3">{{ __('Download Pine Hills Brochure') }}</p></a>
        </div>
        <iframe id="iframe-main" class="d-none mt-5 iframe" frameborder="0" allowfullscreen="true" width="100%" height="auto"></iframe>
    </section>

    <section id="faq" class="container-fluid space-double">
        <div class="bg-light space-single">
            <div class="container">
                <div class="head-section">
                    <h2 class="mb-5">{{ __('Pine Hills Vilamoura FAQ') }}</h2>
                    <article class="my-4">
                        <h3 class="h4">01. {{ __('Are the apartments new?') }}</h3>
                        <p>{{ __('The apartments were completed in 2012 but never sold because of bank repossession. They were updated, refurbished and fit out with brand new furniture in late 2017.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">02. {{ __('Do you get 5 year warranty on the apartments?') }}</h3>
                        <p>{{ __('No, the 5 year warranty has lapsed however all apartments are sold with a snagging list should there be any issues which are then rectified before title transfer is executed.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">03. {{ __('Can you walk form Pine Hills to the beach?') }}</h3>
                        <p>{{ __('Yes, you can but it is a 40 minutes’ walk therefore we offer a complimentary shuttle service what will bring you to the beach in 5 minutes.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">04. {{ __('Are there any bar, restaurants or shops nearby?') }}</h3>
                        <p>{!! __('Yes there is a snack bar onsite called Lily´s serving drinks and a selection of fresh hot and cold food items. There are a number of restaurants within walking distance including :link just around the corner the Vila Sol golf club is across the road, and Vila Sol shopping centre is a close walk and the marina is a 5 minute drive with an abundance of restaurants, cafes and bars to choose from. Our complimentary shuttle service will bring you to the local supermarket Pingo which is a mere 2/3 minutes drive from Pine Hills.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="http://www.willies-restaurante.com/en/">' . __('a Michelin star restaurant') . '</a>']) !!}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">05. {{ __('What is include in the condominium fees?') }}</h3>
                        <p>{{ __('All maintenance, the electricity and water required for all of the common areas of the complex such as pools, garden, garage and hall ways, reception etc.') }}</p>
                        <ul>
                            <li>{{ __('22 cctv camera system') }}</li>
                            <li>{{ __('24 hour security') }}</li>
                            <li>{{ __('Building insurance') }}</li>
                            <li>{{ __('Building maintenance') }}</li>
                            <li>{{ __('Fibre Optics Wi-Fi and cable tv throughout each apartment') }}</li>
                        </ul>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">06. {{ __('Is the parking space in the closed parking garage include in the purchase price?') }}</h3>
                        <p>{{ __('Yes, all apartments come with a minimum of 1 parking space and 1 storage unit included in the purchase price.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">07. {{ __('I have an electric car can I charge the car in the parking garage?') }}</h3>
                        <p>{{ __('The storage units have electricity connection where a charger can be installed, the electricity in the storage and parking units is connected with the meter in your apartment.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">08. {{ __('What is the yearly IMI cost?') }}</h3>
                        <p>{{ __('The IMI yearly counsel tax is different for the size of apartment but not very high for this area, for a two bedroom apartment it is around €35 per year.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">09. {{ __('Are pets aloud in the condominium?') }}</h3>
                        <p>{{ __('Yes however there are strict rules by the Condominium management to ensure hygiene standards are maintained and that pets are not a nuisance to other property owners and guests.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">10. {{ __('Are the apartments in Pine Hills on Habitation licenses or tourist license and therefore can they be used for the NHR program?') }}</h3>
                        <p>{!! __('All apartment in Pine Hills have Habitation licenses and therefore they can be used for the :link without issue or for short term lettings should a property owner wish to join the rental pool.', ['link' => '<a class="internal-link" href="' . Helper::route('nhr-portuguese-tax-residency') . '">' . __('NHR program') . '</a>']) !!}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">11. {{ __('Are there property owners living in Pine Hills?') }}</h3>
                        <p>{{ __('At the moment we have around 20 apartments used for residential living and therefore a strong sense of community has grown and the development is busy during the winter months.') }}</p>
                    </article>
                    <article class="my-4">
                        <h3 class="h4">12. {{ __('What kind of nationalities are the owners in Pine Hills?') }}</h3>
                        <p>{{ __('It is a big mix of nationalities from England, Germany, Switzerland, Belgium, The Netherlands, France, Portugal, Sweden, South Africa, Ireland.') }}</p>
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
                gtag('event', 'download', {'event_category': 'Downloads', 'event_action': 'Download', 'event_label': 'Pine Hills Vilamoura Brochure'});
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
            const center = {lat: 37.093560, lng: -8.102465};

            const map = new google.maps.Map(document.getElementById('property-map'), {
                zoom: 11,
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
                title: '{{ __('Pine Hills, Vilamoura, Portugal') }}',
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    scale: 12,
                    fillOpacity: 1,
                    strokeOpacity: 1,
                    fillColor: '#bc954d',
                    strokeColor: '#bc954d',
                },
                label: {
                    text: '{{ __('PH') }}',
                    color: '#ffffff',
                    fontWeight: 'bold',
                    fontSize: '1.25rem',
                },
            });

            google.maps.event.addDomListener(window, 'resize', function() {
                google.maps.event.trigger(map, 'resize');
                map.panTo(center);
            });
        }

        const links = document.querySelectorAll('.vr-tours a');
        for (i = 0; i < links.length; ++i) {
            links[i].addEventListener('click', function(e) {
                e.preventDefault();

                const iframe = document.querySelector(this.getAttribute('data-iframe'));

                if (iframe) {
                    if (typeof gtag != 'undefined') {
                        gtag('event', 'virtual_tour', {'event_category': 'Virtual Tour', 'event_action': 'Play', 'event_label': 'Pine Hills Vilamoura Virtual Tour'});
                    }

                    iframe.classList.remove('d-none');
                    iframe.src = this.href + '&play=1';
                    scrollIntoView(iframe);
                }
            });
        }
    </script>
@endpush
