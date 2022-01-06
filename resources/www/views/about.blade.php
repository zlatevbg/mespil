@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Learn about MESPIL – our history, team, core values, mission & vision'))
@section('description', __('MESPIL has a strong history investing across various sectors ✪ We are passionate about bringing real estate investment potential of Algarve, Lisbon and Faro.'))

@section('content')
    <div class="container space-single text-center">
        <h1 class="title-border mb-5 text-center">{{ __('The MESPIL Way') }}</h1>
        <p><strong class="font-weight-bold">{{ __('MESPIL is a successful European property developer with established operations and real estate arms.') }}</strong></p>
        <p>{{ __('MESPIL has a strong history investing across various sectors including Private Equity, Energy and Infrastructure delivering over 2,500 residential units in Europe with a sales value in excess of €300 million, 1,500 hotel rooms and a further €100 million in infrastructure projects in the UK.') }}</p>
        <p>{!! __('Real estate investment and development is in our DNA and we are proud to have an experienced leadership team with lifelong careers in investment banking, real estate and the hospitality industries. We believe in :link1 and are passionate about bringing :link2 potential to our partners and much in demand :link3 to our end buyers.', ['link1' => '<a class="internal-link" href="' . Helper::route('portugal-real-estate-investment-guide') . '">' . __('Portugal') . '</a>', 'link2' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('Portuguese real estate investment') . '</a>', 'link3' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('properties for sale in Portugal') . '</a>']) !!}</p>
        <p>{{ __('We are direct, decisive and, above all, accountable. We practice sound judgment and common sense in all our investment transactions. We do things the right way, are driven by our passion for Portugal, we are constantly learning but are here to win.') }}</p>
    </div>

    <div class="container space-double">
        <div class="row row-cols-1 row-cols-md-2 mb-n5">
            <div class="col mb-5">
                <div class="card bg-secondary p-4 text-center h-100">
                    <div class="card-body">
                        <h2 class="card-title text-white">{{ __('Our Vision') }}</h2>
                        <p class="card-text lead text-primary">{{ __('Bringing Portugal To The World') }}</p>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card bg-secondary text-white p-4 text-center h-100">
                    <div class="card-body">
                        <h2 class="card-title">{{ __('Our Mission') }}</h2>
                        <p class="card-text">{{ __('Your partner in Portugal, working hard every day to support our clients make educated property investment decisions for a better tomorrow.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container space-single text-center">
        <h2 class="mb-4">{{ __('Values') }}</h2>
        <p>{{ __('At MESPIL we feel strongly that our shared values are authentic and thoughtfully guide our team and business. We embrace doing the right thing, we foster a sense of family and we lead with relationships') }}</p>
    </div>

    <div class="container-fluid head-section container-light space-single-top">
        <div class="container values text-center">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5 justify-content-md-center position-relative">
                <div class="col mb-5 value-top-left">
                    {{-- <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/icon-integrity.svg') }}" alt="{{ __('Icon: Integrity') }}" height="60" width="52"> --}}
                    <h3>{{ __('Integrity') }}</h3>
                    <p>{{ __('We uphold and expect the highest standards of business practice, from both ourselves and our chosen business partners, fostering a bedrock of honesty and principled execution of all our activities.') }}</p>
                </div>
                <div class="col mb-5 value-top-center">
                    {{-- <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/icon-excellence.svg') }}" alt="{{ __('Icon: Excellence') }}" height="60" width="47"> --}}
                    <h3>{{ __('Excellence') }}</h3>
                    <p>{{ __('One look at a completed MESPIL property developments crystallises the level of excellence upon which we insist. Truly breath-taking properties finished to the zenith of quality. This degree of excellence is also incorporated into our investment business services.') }}</p>
                </div>
                <div class="col mb-5 value-top-right">
                    {{-- <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/icon-passion.svg') }}" alt="{{ __('Icon: Passion') }}" height="60" width="67"> --}}
                    <h3>{{ __('Passion') }}</h3>
                    <p>{{ __('We love what we do and are motivated to inspire ourselves, each other and our clients every day. Only by really enjoying the service we provide, passionately challenging ourselves in the relentless pursuit of doing better, can we do so to such a high standard.') }}</p>
                </div>
            </div>
            <div class="value-infographic"><img loading="eager" class="img-fluid" src="{{ Helper::autover('/svg/{subdomain}/infographic-mespil-values.svg') }}" alt="{{ __('Infographic: MESPIL Values - Integrity, Excellence, Passion, Relationships, Reputation') }}" height="538" width="481"></div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5 justify-content-md-center position-relative">
                <div class="col mb-5 value-bottom-left">
                    {{-- <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/icon-relationships.svg') }}" alt="{{ __('Icon: Relationships') }}" height="60" width="60"> --}}
                    <h3>{{ __('Relationships') }}</h3>
                    <p>{{ __('Connected relationships are at the heart of what we do, and our reputation means everything. We build trust with our clients and business partners cultivating ease and enjoyment in all engagements and negotiations for today and the future.') }}</p>
                </div>
                <div class="col mb-5 value-bottom-right">
                    {{-- <img loading="eager" src="{{ Helper::autover('/svg/{subdomain}/icon-reputation.svg') }}" alt="{{ __('Icon: Reputation') }}" height="60" width="63"> --}}
                    <h3>{{ __('Reputation') }}</h3>
                    <p>{{ __('Our reputation is everything to us, as is maintaining yours. By providing the best-in-class investment and asset management, our reputation grows and strengthens, as will yours as our clients, investors and business partners.') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid container-primary primary-section space-single-bottom">
        <div class="container text-center">
            <p class="text-white h4 font-weight-normal">{{ __('Outstanding service enables enduring trust and maximum value to you.') }}</p>
        </div>
    </div>

    <div id="team" class="container space-double text-center">
        <h2 class="mb-4">{{ __('Our People') }}</h2>
        <p>{{ __('Our team is the backbone of our core values, no service can be delivered without the professionals behind it, and the MESPIL team is testament to its success.') }}</p>
    </div>

    <div class="container buttons-profiles space-single d-flex justify-content-center align-items-center mb-n3">
        <button class="btn-profiles-all w-100 mb-3 mx-2 btn btn-dark active font-weight-bold">{{ __('All') }}</button>
        <button class="btn-profiles-executive-board w-100 mb-3 mx-2 btn btn-light font-weight-bold">{{ __('Executive Board') }}</button>
        <button class="btn-profiles-leadership-team w-100 mb-3 mx-2 btn btn-light font-weight-bold">{{ __('Leadership Team') }}</button>
        <button class="btn-profiles-advisory-board w-100 mb-3 mx-2 btn btn-light font-weight-bold">{{ __('Advisory Board') }}</button>
    </div>

    <div class="container space-single">
        <div class="profiles row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5" style="min-height: 1666px">
            <div class="col mb-5 profile-executive-board">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'aidan-donnelly') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/aidan-donnelly.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of Aidan Donnelly') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/aidanwdonnelly/">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'aidan-donnelly') }}"></a>
                        <p class="h3 card-title">{{ __('Aidan Donnelly') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('Chairperson') }}</small></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5 profile-executive-board">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'tom-oconnor') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/tom-oconnor.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of Tom O’Connor') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/tom-o-connor-090b9318/">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'tom-oconnor') }}"></a>
                        <p class="h3 card-title">{{ __('Tom O’Connor') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('Managing Director') }}</small></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5 profile-executive-board">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'andrew-mcadam') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/andrew-mcadam.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of Andrew McAdam') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/andrew-mcadam-95a77930/">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'andrew-mcadam') }}"></a>
                        <p class="h3 card-title">{{ __('Andrew McAdam') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('Director - Finance') }}</small></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5 profile-executive-board">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'aaron-tracey') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/aaron-tracey.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of Aaron Tracey') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/aaron-tracey-56b673154/">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'aaron-tracey') }}"></a>
                        <p class="h3 card-title">{{ __('Aaron Tracey') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('Director - Sales') }}</small></p>
                    </div>
                </div>
            </div>
            {{-- <div class="col mb-5 profile-leadership-team">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'thomas-kottmann') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/thomas-kottmann.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of Thomas Kottmann') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/thomas-kottmann-3431102/">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'thomas-kottmann') }}"></a>
                        <p class="h3 card-title">{{ __('Thomas Kottmann') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('Director - Funding') }}</small></p>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col mb-5 profile-leadership-team">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'erica-cash') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/erica-cash.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of Erica Cash') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/erica-m-cash-29478992/">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'erica-cash') }}"></a>
                        <p class="h3 card-title">{{ __('Erica Cash') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('VP Investor Relations') }}</small></p>
                    </div>
                </div>
            </div> --}}
            <div class="col mb-5 profile-leadership-team">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'david-horan') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/david-horan.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of David Horan') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/dhoran2/">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'david-horan') }}"></a>
                        <p class="h3 card-title">{{ __('David Horan') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('Financial Controller') }}</small></p>
                    </div>
                </div>
            </div>
            {{-- <div class="col mb-5 profile-leadership-team">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'deborah-talhadas') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/deborah-talhadas.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of Deborah Talhadas') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/deborah-morrissey-talhadas-9a3bb883/">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'deborah-talhadas') }}"></a>
                        <p class="h3 card-title">{{ __('Deborah Talhadas') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('Algarve Resort Manager') }}</small></p>
                    </div>
                </div>
            </div> --}}
            <div class="col mb-5 profile-leadership-team">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'erwin-rodenburg') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/erwin-rodenburg.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of Erwin Rodenburg') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/erwin-rodenburg-13888479/">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'erwin-rodenburg') }}"></a>
                        <p class="h3 card-title">{{ __('Erwin Rodenburg') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('Sales Manager - Algarve') }}</small></p>
                    </div>
                </div>
            </div>
            {{-- <div class="col mb-5 profile-leadership-team">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'raj-yedav') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/raj-yedav.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of Raj Yedav') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/raj-yadav-6a121b37">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'raj-yedav') }}"></a>
                        <p class="h3 card-title">{{ __('Raj Yedav') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('Sales Manager - India') }}</small></p>
                    </div>
                </div>
            </div> --}}
            <div class="col mb-5 profile-leadership-team">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'carlos-henrique') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/carlos-henrique.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of Carlos Henrique') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/carlos-henrique-angelico-a5259070/">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'carlos-henrique') }}"></a>
                        <p class="h3 card-title">{{ __('Carlos Henrique') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('Business Support Manager') }}</small></p>
                    </div>
                </div>
            </div>
            {{-- <div class="col mb-5 profile-leadership-team">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'pedro-moreira') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/pedro-moreira.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of Pedro Moreira') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/pedro-moreira-01a79018/">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'pedro-moreira') }}"></a>
                        <p class="h3 card-title">{{ __('Pedro Moreira') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('Construction Project Manager') }}</small></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5 profile-advisory-board">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'guilherme-barroso') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/guilherme-barroso.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of Guilherme Barroso') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/guilherme-dur%C3%A3o-barroso-a5633631/">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'guilherme-barroso') }}"></a>
                        <p class="h3 card-title">{{ __('Guilherme Barroso') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('Advisory Board') }}</small></p>
                    </div>
                </div>
            </div> --}}
            <div class="col mb-5 profile-advisory-board">
                <div class="card card-wrapper h-100">
                    <a href="{{ Helper::route('profile', 'antonio-rebelo') }}"><img loading="lazy" width="400" height="400" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 400 400'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/team/antonio-rebelo.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of António Rebelo') }}"></a>
                    <div class="position-relative">
                        <a class="fa-brand p-3 bg-primary text-white position-absolute border-0" target="_blank" href="https://www.linkedin.com/in/ant%C3%B3nio-coutinho-rebelo-033339/">@fab('linkedin-in')</a>
                    </div>
                    <div class="card-body position-relative">
                        <a class="stretched-link" href="{{ Helper::route('profile', 'antonio-rebelo') }}"></a>
                        <p class="h3 card-title">{{ __('António Rebelo') }}@fas('long-arrow-alt-right', 'float-right')<br><small class="h5 font-weight-normal">{{ __('Advisory Board') }}</small></p>
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
                    const grid = document.querySelector('.profiles');
                    let profiles;

                    imagesLoaded(grid, function() {
                        /*document.fonts.load('16px Museo Sans').then(function() {

                        });*/

                        /*let maxHeight = 0;
                        const cols = document.querySelectorAll('.profiles .col');
                        for (i = 0; i < cols.length; i++) {
                            if (cols[i].offsetHeight > maxHeight) {
                                maxHeight = cols[i].offsetHeight;
                            }
                        }

                        for (i = 0; i < cols.length; i++) {
                            cols[i].style.height = maxHeight + 'px';
                        }*/

                        profiles = new Isotope(grid, {
                            itemSelector: '.col',
                            layoutMode: 'fitRows',
                            percentPosition: true,
                        });
                    });

                    const buttons = document.querySelectorAll('.buttons-profiles button');
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

                    document.querySelector('.btn-profiles-all').addEventListener('click', function(e) {
                        grid.style.minHeight = 0;
                        profiles.arrange({ filter: '*' });
                        /*const show = document.querySelectorAll('.profile-advisory-board, .profile-executive-board, .profile-leadership-team');
                        for (i = 0; i < show.length; i++) {
                            show[i].classList.remove('inactive');
                        }*/
                    });

                    document.querySelector('.btn-profiles-advisory-board').addEventListener('click', function(e) {
                        grid.style.minHeight = 0;
                        profiles.arrange({ filter: '.profile-advisory-board' });
                        /*const show = document.querySelectorAll('.profile-advisory-board');
                        for (i = 0; i < show.length; i++) {
                            show[i].classList.remove('inactive');
                        }

                        const hide = document.querySelectorAll('.profile-executive-board, .profile-leadership-team');
                        for (i = 0; i < hide.length; i++) {
                            hide[i].classList.add('inactive');
                        }*/
                    });

                    document.querySelector('.btn-profiles-executive-board').addEventListener('click', function(e) {
                        grid.style.minHeight = 0;
                        profiles.arrange({ filter: '.profile-executive-board' });
                        /*const show = document.querySelectorAll('.profile-executive-board');
                        for (i = 0; i < show.length; i++) {
                            show[i].classList.remove('inactive');
                        }

                        const hide = document.querySelectorAll('.profile-advisory-board, .profile-leadership-team');
                        for (i = 0; i < hide.length; i++) {
                            hide[i].classList.add('inactive');
                        }*/
                    });

                    document.querySelector('.btn-profiles-leadership-team').addEventListener('click', function(e) {
                        grid.style.minHeight = 0;
                        profiles.arrange({ filter: '.profile-leadership-team' });
                        /*const show = document.querySelectorAll('.profile-leadership-team');
                        for (i = 0; i < show.length; i++) {
                            show[i].classList.remove('inactive');
                        }

                        const hide = document.querySelectorAll('.profile-advisory-board, .profile-executive-board');
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
