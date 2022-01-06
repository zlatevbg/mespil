@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Portugal real estate investment projects in Algarve, Faro, Lisbon'))
@section('description', __('High demand properties in top locations, with strong IRR returns ✪ Take control of your wealth through the power of managed Portuguese real estate investment.'))

@section('content')
    <div class="container space-single text-center">
        <h1 class="title-border mb-5 text-center">{{ __('Real estate investment projects in Portugal') }}</h1>
        <p>{!! __('Investment properties to buy in the Algarve, :faro, :vilamoura and the capital city of :lisbon, Portugal. High demand properties in top locations, with strong IRR returns. Invest in fully managed Portuguese property eligible for :link. Take control of your wealth through the power of managed Portuguese real estate investment.', ['faro' => '<a class="internal-link" href="' . Helper::route('portugal', 'faro') . '">' . __('Faro') . '</a>', 'vilamoura' => '<a class="internal-link" href="' . Helper::route('portugal', 'vilamoura') . '">' . __('Vilamoura') . '</a>', 'lisbon' => '<a class="internal-link" href="' . Helper::route('portugal', 'lisbon') . '">' . __('Lisbon') . '</a>', 'link' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('Portugal Golden Visa') . '</a>']) !!}</p>
    </div>

    <div class="container buttons-projects space-single d-flex justify-content-center align-items-center mb-n3">
        <button class="btn-project-all w-100 mb-3 mx-2 btn btn-dark btn-border btn-border-transparent active font-weight-bold text-nowrap">{{ __('All Projects') }}</button>
        {{-- <button class="btn-project-pipeline w-100 mb-3 mx-2 btn btn-light btn-border btn-border-blue font-weight-bold text-nowrap">{{ __('Pipeline Projects') }}</button> --}}
        <button class="btn-funding-required w-100 mb-3 mx-2 btn btn-light btn-border btn-border-orange font-weight-bold text-nowrap">{{ __('Funding Required') }}</button>
        <button class="btn-successfully-funded w-100 mb-3 mx-2 btn btn-light btn-border btn-border-green font-weight-bold text-nowrap">{{ __('Successfully Funded') }}</button>
    </div>

    <div class="container space-single">
        <div class="projects row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5 justify-content-md-center" style="min-height: 1600px">
            {{-- <div class="col mb-5 project-pipeline">
                <div class="card card-wrapper h-100 btn-border-blue position-relative">
                    <div class="project-info-overlay d-flex justify-content-center align-items-center position-absolute font-size-sm w-100 p-4">
                        <p>{!! __('We are currently sourcing co-investors for a 220M Gross Development Value real estate project in the most prestigious location of the Algarve – recognised as one of Europe’s finest luxury resorts. We have commitment from anchor investors and there are still opportunities to join for potential co-investors for ticket sizes between 25-75M. Please contact our head of funding Thomas Kottmann on :email for further information via NDA.', ['email' => '<a class="encoded-email text-white" data-track-email="Investment Projects - Quinta Do Lago: " data-email="' . str_rot13('tk@mespil.ie') . '">[email]</a>']) !!}</p>
                    </div>
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/investment-projects/quinta-do-lago-algarve-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('Satellite map overview of Quinta Do Lago Project, Algarve, Portugal') }}">
                    <div class="position-relative">
                        <div class="card-img-overlay">
                            <svg class="logo-white logo-project" viewBox="0 0 100 25.96">
                                <use xlink:href="#logo"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="h3 card-title title-border">{{ __('Quinta Do Lago Project') }}@fas('info-circle', 'float-right')<br><small>{{ __('Algarve, Portugal') }}</small></p>
                        <p class="card-text">{{ __('MESPIL are excited to bring the last remaining large development plots in Quinta Do Lago a world class luxury resort on the Algarve, Portugal to our investor club.') }}</p>
                    </div>
                </div>
            </div> --}}
            <div class="col mb-5 funding-required">
                <div class="card card-wrapper h-100 btn-border-orange">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-24-albufeira-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of the No.24 facade, Albufeira, Portugal') }}">
                    <div class="position-relative">
                        <div class="card-img-overlay">
                            <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-24-albufeira-portugal.svg') }}" alt="{{ __('Logo: No.24, Albufeira, Portugal') }}" height="100" width="66">
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="h3 card-title title-border">{{ __('No.24') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('Albufeira, Portugal') }}</small></p>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('investment-project', 'no-24-albufeira-portugal') }}">{{ __('MESPIL are excited to bring a fantastic regeneration/re-development project in the prime residential and commercial area of Albufeira, a major European holiday destination to our investor club.') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5 funding-required">
                <div class="card card-wrapper h-100 btn-border-orange">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-37-lisbon-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of the No.37 facade, Lisbon, Portugal') }}">
                    <div class="position-relative">
                        <div class="card-img-overlay">
                            <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-37-lisbon-portugal.svg') }}" alt="{{ __('Logo: No.37, Lisbon, Portugal') }}" height="100" width="66">
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="h3 card-title title-border">{{ __('No.37') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('Lisbon, Portugal') }}</small></p>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('investment-project', 'no-37-lisbon-portugal') }}">{{ __('A fantastic regeneration/re-development project in a prime residential area in close proximity to the Tagus river Lisbon, Portugal. 9 units, a mix of Studio to T3 apartments and 1 commercial space.') }}</a></p>
                    </div>
                </div>
            </div>
            {{-- <div class="col mb-5 funding-required">
                <div class="card card-wrapper h-100 btn-border-orange">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-59-lisbon-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('3D exterior photo of No.59, Lisbon, Portugal') }}">
                    <div class="position-relative">
                        <div class="card-img-overlay">
                            <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-59-lisbon-portugal.svg') }}" alt="{{ __('Logo: No.59, Lisbon, Portugal') }}" height="100" width="66">
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="h3 card-title title-border">{{ __('No.59') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('Lisbon, Portugal') }}</small></p>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('investment-project', 'no-59-lisbon-portugal') }}">{{ __('Introducing No.59 Lisbon within walking distance of Belém, the laid-back popular area on the Tagus River recognised for its many seafood restaurants and quintessential Portuguese tiled homes.') }}</a></p>
                    </div>
                </div>
            </div> --}}
            <div class="col mb-5 funding-required">
                <div class="card card-wrapper h-100 btn-border-orange">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/investment-projects/evaristo-algarve-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('Satellite map overview of Evaristo Project, Algarve, Portugal') }}">
                    <div class="position-relative">
                        <div class="card-img-overlay">
                            <svg class="logo-white logo-project" viewBox="0 0 100 25.96">
                                <use xlink:href="#logo"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="h3 card-title title-border">{{ __('Evaristo Project') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('Algarve, Portugal') }}</small></p>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('investment-project', 'evaristo-algarve-portugal') }}">{{ __('Excellent re-development project in a quaint upmarket area of Central-Algarve. This gated condominium is in walking distance to the unspoilt Praia do Castelo beach known for its crystal clear water and offers 56 x 1-bedroom apartments all with sea view.') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5 successfully-funded">
                <div class="card card-wrapper h-100 btn-border-green">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-faro-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('3D exterior photo of No.9, Faro, Portugal') }}">
                    <div class="position-relative">
                        <div class="card-img-overlay">
                            <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-9-faro-portugal.svg') }}" alt="{{ __('Logo: No.9, Faro, Portugal') }}" height="100" width="62">
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="h3 card-title title-border">{{ __('No.9') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('Faro, Portugal') }}</small></p>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('investment-project', 'no-9-faro-portugal') }}">{{ __('MESPIL are excited to bring a fantastic regeneration/re-development project in the capital of the Algarve, Faro City to our investor club.') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5 successfully-funded">
                <div class="card card-wrapper h-100 btn-border-green">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-57-lisbon-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('3D exterior photo of No.57, Lisbon, Portugal') }}">
                    <div class="position-relative">
                        <div class="card-img-overlay">
                            <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-57-lisbon-portugal.svg') }}" alt="{{ __('Logo: No.57, Lisbon, Portugal') }}" height="100" width="66">
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="h3 card-title title-border">{{ __('No.57') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('Lisbon, Portugal') }}</small></p>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('investment-project', 'no-57-lisbon-portugal') }}">{{ __('MESPIL are excited to bring a fantastic regeneration/re-development project to our Investor Club located in one of the best residential area’s of Lisbon cose to the famous Benfica Football Stadium. 8 residential apartments, a mix of T1 & T2 plus 1 commercial space.') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5 successfully-funded">
                <div class="card card-wrapper h-100 btn-border-green">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/investment-projects/no-9-lisbon-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('3D exterior photo of No.9, Lisbon, Portugal') }}">
                    <div class="position-relative">
                        <div class="card-img-overlay">
                            <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-no-9-lisbon-portugal.svg') }}" alt="{{ __('Logo: No.9, Lisbon, Portugal') }}" height="100" width="62">
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="h3 card-title title-border">{{ __('No.9') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('Lisbon, Portugal') }}</small></p>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('investment-project', 'no-9-lisbon-portugal') }}">{{ __('Our newest development consisting of 17 luxury apartments and 5 commercial units, situated in the center of Lisbon, Portugal’s capital. Be among the first to learn about this Golden Visa qualifying - off-market property investment.') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5 successfully-funded">
                <div class="card card-wrapper h-100 btn-border-green">
                    <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/investment-projects/pine-hills-vilamoura-portugal/main.jpg') }}" class="card-img img-fluid" alt="{{ __('Aerial view of Pine Hills, Vilamoura, Portugal') }}">
                    <div class="position-relative">
                        <div class="card-img-overlay">
                            <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/logo-pine-hills-vilamoura-portugal.svg') }}" alt="{{ __('Logo: Pine Hills, Vilamoura, Portugal') }}" height="51" width="100">
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="h3 card-title title-border">{{ __('Pine Hills') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('Vilamoura, Portugal') }}</small></p>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('investment-project', 'pine-hills-vilamoura-portugal') }}">{{ __('A fully managed multi-award winning luxury resort in the heart of Algarve’s golden triangle. 1, 2, 3 bedroom villa style apartments available for residential and rental income investment.') }}</a></p>
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
                    const grid = document.querySelector('.projects');
                    const buttons = document.querySelectorAll('.buttons-projects button');
                    let projects;

                    imagesLoaded(grid, function() {
                        /*document.fonts.load('16px Museo Sans').then(function() {

                        });*/

                        /*let maxHeight = 0;
                        const cols = document.querySelectorAll('.projects .col');
                        for (i = 0; i < cols.length; i++) {
                            if (cols[i].offsetHeight > maxHeight) {
                                maxHeight = cols[i].offsetHeight;
                            }
                        }

                        for (i = 0; i < cols.length; i++) {
                            cols[i].style.height = maxHeight + 'px';
                        }*/

                        projects = new Isotope(grid, {
                            itemSelector: '.col',
                            layoutMode: 'fitRows',
                            percentPosition: true,
                        });

                        const hash = window.location.href.split('#')[1];
                        if (hash) {
                            const btn = document.querySelector('.btn-' + hash);
                            if (btn) {
                                grid.style.minHeight = 0;
                                projects.arrange({ filter: '.' + hash });

                                for (i = 0; i < buttons.length; i++) {
                                    buttons[i].classList.remove('active');
                                    buttons[i].classList.remove('btn-dark');
                                    buttons[i].classList.add('btn-light');
                                }

                                btn.classList.add('active');
                                btn.classList.add('btn-dark');
                            }
                        }
                    });

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

                    document.querySelector('.btn-project-all').addEventListener('click', function(e) {
                        grid.style.minHeight = 0;
                        projects.arrange({ filter: '*' });
                        /*const show = document.querySelectorAll('.successfully-funded, .project-pipeline, .funding-required');
                        for (i = 0; i < show.length; i++) {
                            show[i].classList.remove('inactive');
                        }*/
                    });

                    document.querySelector('.btn-successfully-funded').addEventListener('click', function(e) {
                        grid.style.minHeight = 0;
                        projects.arrange({ filter: '.successfully-funded' });
                        /*const show = document.querySelectorAll('.successfully-funded');
                        for (i = 0; i < show.length; i++) {
                            show[i].classList.remove('inactive');
                        }

                        const hide = document.querySelectorAll('.project-pipeline, .funding-required');
                        for (i = 0; i < hide.length; i++) {
                            hide[i].classList.add('inactive');
                        }*/
                    });

                    document.querySelector('.btn-funding-required').addEventListener('click', function(e) {
                        grid.style.minHeight = 0;
                        projects.arrange({ filter: '.funding-required' });
                        /*const show = document.querySelectorAll('.funding-required');
                        for (i = 0; i < show.length; i++) {
                            show[i].classList.remove('inactive');
                        }

                        const hide = document.querySelectorAll('.project-pipeline, .successfully-funded');
                        for (i = 0; i < hide.length; i++) {
                            hide[i].classList.add('inactive');
                        }*/
                    });

                    /*document.querySelector('.btn-project-pipeline').addEventListener('click', function(e) {
                        grid.style.minHeight = 0;
                        projects.arrange({ filter: '.project-pipeline' });*/
                        /*const show = document.querySelectorAll('.project-pipeline');
                        for (i = 0; i < show.length; i++) {
                            show[i].classList.remove('inactive');
                        }

                        const hide = document.querySelectorAll('.funding-required, .successfully-funded');
                        for (i = 0; i < hide.length; i++) {
                            hide[i].classList.add('inactive');
                        }*/
                    /*});*/
                },
                async: false,
            }
        );
    </script>
@endpush
