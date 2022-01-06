@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Properties for sale in Portugal | Apartments for sale Algarve & Lisbon'))
@section('description', __('All of our Portugal Golden Visa properties for sale come turn-key, fully furnished with 5% guaranteed rental yields ✪ Top locations in Algarve, Faro and Lisbon'))

@section('content')
    <div class="container space-single text-center">
        <h1 class="title-border mb-5 text-center">{{ __('Properties for sale in Portugal') }}</h1>
        <p>{!! __('All of our award winning apartments for sale in Portugal are :link eligible and come turn-key, fully furnished with 5% guaranteed rental yields. Buy large, modern and fully managed apartments in top locations in Algarve, :faro, :vilamoura and the capital city of :lisbon. We acquire, develop and manage all of our real estate projects in Portugal as co-investors so your investment is our investment too.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('Golden Visa') . '</a>', 'faro' => '<a class="internal-link" href="' . Helper::route('portugal', 'faro') . '">' . __('Faro') . '</a>', 'vilamoura' => '<a class="internal-link" href="' . Helper::route('portugal', 'vilamoura') . '">' . __('Vilamoura') . '</a>', 'lisbon' => '<a class="internal-link" href="' . Helper::route('portugal', 'lisbon') . '">' . __('Lisbon') . '</a>']) !!}</p>
    </div>

    <div class="container buttons-properties space-single d-flex justify-content-center align-items-center mb-n3">
        <button class="btn-property-all w-100 mb-3 mx-2 btn btn-dark btn-border btn-border-transparent active font-weight-bold text-nowrap">{{ __('All Properties') }}</button>
        <button class="btn-property-available w-100 mb-3 mx-2 btn btn-light btn-border btn-border-green font-weight-bold text-nowrap">{{ __('Available Properties') }}</button>
        <button class="btn-property-sold w-100 mb-3 mx-2 btn btn-light btn-border btn-border-red font-weight-bold text-nowrap">{{ __('Sold Out Properties') }}</button>
    </div>

    <div class="container space-double">
        <div class="properties row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5 justify-content-md-center" style="min-height: 1030px">
            <div class="col mb-5 property-available">
                <div class="card card-wrapper card-wrapper-available h-100">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('3D exterior photo of No.9, Faro, Portugal') }}">
                    <div class="position-relative">
                        <div class="card-img-overlay">
                            <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-9-faro-portugal.svg') }}" alt="{{ __('Logo: No.9, Faro, Portugal') }}" height="100" width="62">
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="h3 card-title title-border title-border-available">{{ __('No.9') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('Faro, Portugal') }}</small></h2>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('property-for-sale', 'no-9-faro-portugal') }}">{{ __('Introducing No.9, Faro in the Capital of the Algarve. A mixed development of 3 buildings each with 6 large apartments in a 1950’s building, perfectly located in this prime city location brought to market turn-key.') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5 property-available">
                <div class="card card-wrapper card-wrapper-available h-100">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('Aerial view of Pine Hills, Vilamoura, Portugal') }}">
                    <div class="position-relative">
                        <div class="card-img-overlay">
                            <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-pine-hills-vilamoura-portugal.svg') }}" alt="{{ __('Logo: Pine Hills, Vilamoura, Portugal') }}" height="51" width="100">
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="h3 card-title title-border title-border-available">{{ __('Pine Hills') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('Vilamoura, Portugal') }}</small></h2>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('property-for-sale', 'pine-hills-vilamoura-portugal') }}">{{ __('A fully managed multi-award winning luxury resort in the heart of Algarve’s golden triangle. 1, 2, 3 bedroom villa style apartments available for residential and rental income investment.') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5 property-available">
                <div class="card card-wrapper card-wrapper-available h-100">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('3D exterior photo of No.9, Lisbon, Portugal') }}">
                    <div class="position-relative">
                        <div class="card-img-overlay">
                            <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-9-lisbon-portugal.svg') }}" alt="{{ __('Logo: No.9, Lisbon, Portugal') }}" height="100" width="62">
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="h3 card-title title-border title-border-available">{{ __('No.9') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('Lisbon, Portugal') }}</small></h2>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('property-for-sale', 'no-9-lisbon-portugal') }}">{{ __('Our city centre Lisbon development consists of 17 luxury apartments and 5 commercial spaces situated in a prime established residential in-demand neighbourhood. Golden Visa qualifying.') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card-wrapper h-100 coming-soon">
                    <img loading="eager" class="corner-img" src="{{ Helper::autover('/svg/{subdomain}/corner.svg') }}" alt="" height="120" width="120">
                    <p class="corner-text text-white text-center">{!! __('Coming<br>Soon') !!}</p>
                    <div class="position-relative">
                        <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-44-lisbon-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('Satellite map overview of No.44, Lisbon, Portugal') }}">
                        <div class="project-info-overlay d-flex justify-content-center align-items-end position-absolute font-size-sm w-100 p-4">
                            <p class="text-center font-size-base text-white">{!! __('To register your interest or reserve a unit (5K EURO booking deposit required) please contact :email for further details.', ['email' => '<a class="encoded-email text-white" data-track-email="Properties for Sale - No.44, Lisbon: " data-email="' . str_rot13('info@mespil.ie') . '">[email]</a>']) !!}</p>
                        </div>
                    </div>
                    {{-- <div class="position-relative">
                        <div class="card-img-overlay">
                            <svg class="logo-white logo-project" viewBox="0 0 100 25.96">
                                <use xlink:href="#logo"></use>
                            </svg>
                        </div>
                    </div> --}}
                    <div class="card-body">
                        <h2 class="h3 card-title title-border">{{ __('No.44') }}@fas('info-circle', 'float-right')<br><small>{{ __('Lisbon, Portugal') }}</small></h2>
                        <p class="card-text">{{ __('Introducing No.44 Lisbon a fantastic building located minutes walk from Avenue da Liberdade comprising of 8 units, a mix of 2 bed apartments from 355k EURO and 3 bed apartments from 500k EURO brought to market turn key.') }}</p>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card-wrapper coming-soon h-100">
                    <img loading="eager" class="corner-img" src="{{ Helper::autover('/svg/{subdomain}/corner.svg') }}" alt="" height="120" width="120">
                    <p class="corner-text text-white text-center">{!! __('Coming<br>Soon') !!}</p>
                    <div class="position-relative">
                        <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-24-albufeira-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of the No.24 facade, Albufeira, Portugal') }}">
                        <div class="project-info-overlay d-flex justify-content-center align-items-end position-absolute font-size-sm w-100 p-4">
                            <p class="text-center font-size-base text-white">{!! __('To register your interest or reserve a unit (5K EURO booking deposit required) please contact :email for further details.', ['email' => '<a class="encoded-email text-white" data-track-email="Properties for Sale - No.44, Lisbon: " data-email="' . str_rot13('info@mespil.ie') . '">[email]</a>']) !!}</p>
                        </div>
                    </div>
                    {{-- <div class="embed-responsive embed-responsive-16by9"></div> --}}
                    {{-- <div class="position-relative">
                        <div class="card-img-overlay">
                            <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-24-albufeira-portugal.svg') }}" alt="{{ __('Logo: No.24, Albufeira, Portugal') }}" height="100" width="66">
                        </div>
                    </div> --}}
                    <div class="card-body">
                        <h2 class="h3 card-title title-border">{{ __('No.24') }}@fas('info-circle', 'float-right')<br><small>{{ __('Albufeira, Portugal') }}</small></h2>
                        <p class="card-text">{{ __('MESPIL are excited to bring a fantastic regeneration/re-development project in the prime residential and commercial area of Albufeira, a major European holiday destination.') }}</p>
                    </div>
                </div>
            </div>
            <div class="col mb-5 property-sold">
                <div class="card card-wrapper card-wrapper-sold h-100">
                    <img loading="eager" class="corner-img" src="{{ Helper::autover('/svg/{subdomain}/corner-sold.svg') }}" alt="" height="120" width="120">
                    <p class="corner-text-single text-white text-center">{{ __('Sold Out') }}</p>
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-57-lisbon-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of the No.57 facade, Lisbon, Portugal') }}">
                    <div class="position-relative">
                        <div class="card-img-overlay">
                            <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-57-lisbon-portugal.svg') }}" alt="{{ __('Logo: No.57, Lisbon, Portugal') }}" height="100" width="66">
                        </div>
                    </div>
                    <div class="card-body">
                        <h2 class="h3 card-title title-border title-border-sold">{{ __('No.57') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('Lisbon, Portugal') }}</small></h2>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('property-for-sale', 'no-57-lisbon-portugal') }}">{{ __('A fantastic regeneration/re-development project located in one of the best residential area’s of Lisbon close to the famous Benfica Football Stadium.') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        loadjs(
            [
                '{{ Helper::autover('/js/{subdomain}/vendor/isotope.js') }}',
                '{{ Helper::autover('/js/{subdomain}/vendor/imagesloaded.js') }}',
            ],
            {
                success: function() {
                    const grid = document.querySelector('.properties');
                    let properties;

                    imagesLoaded(grid, function() {
                        /*document.fonts.load('16px Museo Sans').then(function() {

                        });*/

                        /*let maxHeight = 0;
                        const cols = document.querySelectorAll('.properties .col');
                        for (i = 0; i < cols.length; i++) {
                            if (cols[i].offsetHeight > maxHeight) {
                                maxHeight = cols[i].offsetHeight;
                            }
                        }

                        for (i = 0; i < cols.length; i++) {
                            cols[i].style.height = maxHeight + 'px';
                        }*/

                        properties = new Isotope(grid, {
                            itemSelector: '.col',
                            layoutMode: 'fitRows',
                            percentPosition: true,
                        });
                    });

                    const buttons = document.querySelectorAll('.buttons-properties button');
                    for (i = 0; i < buttons.length; i++) {
                        buttons[i].addEventListener('click', function(e) {
                            for (j = 0; j < buttons.length; j++) {
                                buttons[j].classList.remove('active');
                                buttons[j].classList.remove('btn-dark');
                                buttons[j].classList.add('btn-light');
                            }

                            this.classList.add('active');
                            this.classList.add('btn-dark');
                        });
                    }

                    document.querySelector('.btn-property-all').addEventListener('click', function(e) {
                        grid.style.minHeight = 0;
                        properties.arrange({ filter: '*' });
                        /*const show = document.querySelectorAll('.property-available, .property-sold');
                        for (i = 0; i < show.length; i++) {
                            show[i].classList.remove('inactive');
                        }*/
                    });

                    document.querySelector('.btn-property-available').addEventListener('click', function(e) {
                        grid.style.minHeight = 0;
                        properties.arrange({ filter: '.property-available' });
                        /*const show = document.querySelectorAll('.property-available');
                        for (i = 0; i < show.length; i++) {
                            show[i].classList.remove('inactive');
                        }

                        const hide = document.querySelectorAll('.property-sold');
                        for (i = 0; i < hide.length; i++) {
                            hide[i].classList.add('inactive');
                        }*/
                    });

                    document.querySelector('.btn-property-sold').addEventListener('click', function(e) {
                        grid.style.minHeight = 0;
                        properties.arrange({ filter: '.property-sold' });
                        /*const show = document.querySelectorAll('.property-sold');
                        for (i = 0; i < show.length; i++) {
                            show[i].classList.remove('inactive');
                        }

                        const hide = document.querySelectorAll('.property-available');
                        for (i = 0; i < hide.length; i++) {
                            hide[i].classList.add('inactive');
                        }*/
                    });
                },
                async: false,
            }
        );
    </script>
@endpush
