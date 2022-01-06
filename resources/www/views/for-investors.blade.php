@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Portugal real estate investment opportunities in Algarve and Lisbon'))
@section('description', __('Partner with us and invest in Portugal ✪ We believe in Portugal as a robust and exciting investment option that offers higher ROI over other European markets.'))

@section('content')
    <div class="container space-single text-center">
        <h1 class="title-border text-center ml-auto mr-auto mb-5 max-width-lg">{{ __('Portugal real estate investment opportunities in the Algarve and Lisbon') }}</h1>
        <p class="mb-4 h2 text-center font-weight-normal">{{ __('Building Trust, Securing Futures') }}</p>
        <p>{!! __('We believe in :link as a robust and exciting investment option that offers potentially higher ROI over other European markets. We understand the market and nuances of doing business in Portugal with some of our executive team now calling it home. Co-investors in all projects we focus on in-demand locations such as the Algarve, :faro, :vilamoura and the capital city of :lisbon ensuring the asset is always in the right location, primary drivers in our investment results to date.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-real-estate-investment-guide') . '">' . __('Portugal') . '</a>', 'faro' => '<a class="internal-link" href="' . Helper::route('portugal', 'faro') . '">' . __('Faro') . '</a>', 'vilamoura' => '<a class="internal-link" href="' . Helper::route('portugal', 'vilamoura') . '">' . __('Vilamoura') . '</a>', 'lisbon' => '<a class="internal-link" href="' . Helper::route('portugal', 'lisbon') . '">' . __('Lisbon') . '</a>']) !!}</p>
    </div>

    <div class="container space-double">
        <div class="investor-actions row row-cols-1 row-cols-lg-2 mb-n5">
            <div class="col d-flex mb-5">
                <div class="card card-investors-front bg-secondary text-white p-4 text-center h-100 preserve-3d">
                    <div class="d-flex flex-column h-100">
                        <div class="card-body">
                            <p class="card-title h2">{{ __('MESPIL') }}<br>{{ __('Corporate Brochure') }}</p>
                            <p class="card-text">{{ __('We invite you to learn more about MESPIL by downloading the MESPIL corporate brochure.') }}</p>
                        </div>
                        <button type="button" class="preserve-3d btn btn-lg btn-outline-light align-self-center">{{ __('Download') }}</button>
                    </div>
                </div>
                <div class="card card-investors-back bg-primary text-white p-4 text-center h-100 position-relative">
                    <button type="button" class="close ml-auto text-white" aria-label="{{ __('Close') }}">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="replace-wrapper d-flex flex-column h-100">
                        <div class="card-body">
                            <p class="card-text">{{ __('At MESPIL we are on a mission to give more people the opportunity to improve their financial futures through our recently launched “MESPIL Investment Club (MIC)” with a focus on real estate investment in Portugal.') }}</p>
                        </div>
                        <form method="POST" action="{{ Helper::route('email-download-brochure') }}" id="download-form" class="position-relative container" data-ajax data-ajax-disable-alert-header data-ajax-alert-dismissible="false" data-ajax-alert=".card-investors-back" data-ajax-alert-position="replace" data-ajax-alert-class="lead text-white d-flex align-items-center border-0 m-0 h-100 bg-transparent">
                            @csrf

                            <div class="form-group text-left">
                                <label class="sr-only @error('email_download') is-invalid @enderror" for="email_download">{{ __('E-mail') }}</label>
                                <span class="invalid-feedback invalid-feedback-top" role="alert">
                                    @error('email_download')
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </span>
                                <input id="email_download" type="email" class="form-control border-0 @error('email_download') is-invalid @enderror" placeholder="{{ __('Type your e-mail...') }}" name="email_download" value="{{ old('email_download') }}" required autocomplete="email" inputmode="email" aria-describedby="emailDownload">
                                <small id="emailDownload" class="form-text">{{ __('We’ll never share your email with anyone else.') }}</small>
                            </div>
                            <button type="submit" class="btn btn-lg btn-outline-light align-self-center preserve-3d fa-left">{{ __('Confirm') }}</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col d-flex mb-5">
                <div class="card card-investors-front bg-secondary text-white p-4 text-center h-100 preserve-3d">
                    <div class="d-flex flex-column h-100">
                        <div class="card-body">
                            <p class="card-title h2">{{ __('MESPIL') }}<br>{{ __('Investor Club') }}</p>
                            <p class="card-text">{{ __('We invite you to learn more about MESPIL Investor Club (MIC) by joining us at our next event on the Algarve.') }}</p>
                        </div>
                        <button type="button" class="preserve-3d btn btn-lg btn-outline-light align-self-center">{{ __('Join Us') }}</button>
                    </div>
                </div>
                <div class="card card-investors-back bg-primary text-white p-4 text-center h-100 position-relative">
                    <button type="button" class="close ml-auto text-white" aria-label="{{ __('Close') }}">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="replace-wrapper d-flex flex-column h-100">
                        <div class="card-body">
                            <p class="card-text">{{ __('Take control of your wealth through the power of managed real estate investment and join our Investor Club - a partnership with your goals in mind backed by our strategic real estate investing and management approach.') }}</p>
                        </div>
                        <form method="POST" action="{{ Helper::route('email-join-investors') }}" id="join-form" class="position-relative container" data-ajax data-ajax-disable-alert-header data-ajax-alert-dismissible="false" data-ajax-alert=".card-investors-back" data-ajax-alert-position="replace" data-ajax-alert-class="lead text-white d-flex align-items-center border-0 m-0 h-100 bg-transparent">
                            @csrf

                            <div class="form-group text-left">
                                <label class="sr-only @error('email_join') is-invalid @enderror" for="email_join">{{ __('E-mail') }}</label>
                                <span class="invalid-feedback invalid-feedback-top" role="alert">
                                    @error('email_join')
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </span>
                                <input id="email_join" type="email" class="form-control border-0 @error('email_join') is-invalid @enderror" placeholder="{{ __('Type your e-mail...') }}" name="email_join" value="{{ old('email_join') }}" required autocomplete="email" inputmode="email" aria-describedby="emailJoin">
                                <small id="emailJoin" class="form-text">{{ __('We’ll never share your email with anyone else.') }}</small>
                            </div>
                            <button type="submit" class="btn btn-lg btn-outline-light align-self-center preserve-3d fa-left">{{ __('Confirm') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container space-single text-center">
        <h2 class="mb-5">{{ __('Partner with us and invest in MESPIL') }}</h2>
        <p>{{ __('Our team have capitalized on both our Portuguese market knowledge and our political, legal and banking networks to utilize those relationships and experience to create high performing investment opportunities for our partners.') }}</p>
        <p><img loading="eager" class="img-fluid" src="{{ Helper::autover('/svg/{subdomain}/infographic-mespil-network.svg') }}" alt="{{ __('Infographic: MESPIL Network - Political, Banking, Legal') }}" height="372" width="480"></p>
        <p>{{ __('MESPIL assists investors in the due diligence process to understand the specific investment vehicle’s strategy, risk processes, management, terms and projected performance helping our investors determine quickly, in principle, how the proposal can fit their investment objectives. ') }}</p>
        <p>{{ __('We understand the importance of efficient day-to-day operations post investment to increase the properties’ and consequently the overall projects operational and financial performance leading to above-market financial results.') }}</p>
    </div>

    <div class="container space-double">
        <div class="row row-cols-1 row-cols-md-2 mb-n5">
            <div class="col mb-5">
                <div class="card card-home text-center h-100">
                    <img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/for-investors/investment-projects.jpg') }}" class="card-img img-fluid" alt="{{ __('Woman and man talking about investing in Portugal') }}">
                    <div class="card-body">
                        <h3 class="card-title title-border text-uppercase">{{ __('Investment Projects') }}@fas('long-arrow-alt-right', 'ml-3')</h3>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('portugal-investment-projects') }}">{{ __('Investment properties to buy in the Algarve and Lisbon, Portugal. High demand properties in top locations, with strong IRR returns. Invest in fully managed Portuguese property eligible for Portugal Golden Visa.') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card-home text-center h-100">
                    <img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/for-investors/questions-and-answers.jpg') }}" class="card-img img-fluid" alt="{{ __('Woman and man talking | Customer support') }}">
                    <div class="card-body">
                        <h3 class="card-title title-border text-uppercase">{{ __('FAQ') }}@fas('long-arrow-alt-right', 'ml-3')</h3>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('for-investors/questions-and-answers') }}">{{ __('Do you have questions about your property investment? MESPIL make it easy for property investors to invest in quality real estate in the Algarve, Faro, Vilamoura and the capital city of Lisbon.') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid head-section space-single text-center">
        <div class="container">
            <h2 class="mb-5">{{ __('What we do at MESPIL') }}</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5">
                <div class="col mb-5">
                    <div class="card bg-secondary text-white p-4 text-center h-100">
                        <div class="card-body">
                            <img loading="lazy" data-src="{{ Helper::autover('/svg/{subdomain}/icon-selection.svg') }}" alt="{{ __('Icon: Site selection') }}" height="48" width="52">
                            <h3 class="card-title text-primary font-weight-normal text-uppercase mt-3">{{ __('Site Selection') }}</h3>
                            <p class="card-text">{{ __('Identication of suitable sites through commercial, banking, legal & political contacts.') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card bg-secondary text-white p-4 text-center h-100">
                        <div class="card-body">
                            <img loading="lazy" data-src="{{ Helper::autover('/svg/{subdomain}/icon-secure.svg') }}" alt="{{ __('Icon: Secure') }}" height="48" width="55">
                            <h3 class="card-title text-primary font-weight-normal text-uppercase mt-3">{{ __('Secure') }}</h3>
                            <p class="card-text">{{ __('Entering into agreements with asset owners whilst due diligence is being carried out.') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card bg-secondary text-white p-4 text-center h-100">
                        <div class="card-body">
                            <img loading="lazy" data-src="{{ Helper::autover('/svg/{subdomain}/icon-construction.svg') }}" alt="{{ __('Icon: Construction') }}" height="48" width="51">
                            <h3 class="card-title text-primary font-weight-normal text-uppercase mt-3">{{ __('Construction') }}</h3>
                            <p class="card-text">{{ __('Using local contacts / partnerships for refurb / construction.') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card bg-secondary text-white p-4 text-center h-100">
                        <div class="card-body">
                            <img loading="lazy" data-src="{{ Helper::autover('/svg/{subdomain}/icon-operation.svg') }}" alt="{{ __('Icon: Operation') }}" height="48" width="48">
                            <h3 class="card-title text-primary font-weight-normal text-uppercase mt-3">{{ __('Operation') }}</h3>
                            <p class="card-text">{{ __('Operation / Management team ensure smooth transition to operating asset.') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card bg-secondary text-white p-4 text-center h-100">
                        <div class="card-body">
                            <img loading="lazy" data-src="{{ Helper::autover('/svg/{subdomain}/icon-sales.svg') }}" alt="{{ __('Icon: Sales') }}" height="48" width="45">
                            <h3 class="card-title text-primary font-weight-normal text-uppercase mt-3">{{ __('Sales') }}</h3>
                            <p class="card-text">{{ __('Sales Team in country to manage Direct Sales. Indirect Sales through our network of agents.') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card bg-secondary text-white p-4 text-center h-100">
                        <div class="card-body">
                            <img loading="lazy" data-src="{{ Helper::autover('/svg/{subdomain}/icon-investor-relations.svg') }}" alt="{{ __('Icon: Investor Relations') }}" height="48" width="50">
                            <h3 class="card-title text-primary font-weight-normal text-uppercase mt-3">{{ __('Investor Relations') }}</h3>
                            <p class="card-text">{{ __('You will have a designated IR contact to manage the flow of information on your investment.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container space-single text-center">
        <h3 class="mb-5">{{ __('Investment Objectives') }}</h3>
        <ul class="list-unstyled bullets-check-mark mb-0 lead font-weight-normal text-left">
            <li>{{ __('The MESPIL Fund is a portfolio of Portuguese property.') }}</li>
            <li>{{ __('Properties are acquired at deep discounts through off market / distressed transactions.') }}</li>
            <li>{{ __('Properties are refurbished / upgraded to maximise exit value.') }}</li>
            <li>{{ __('Properties are sold by our sales team and through network of national / international agents.') }}</li>
            <li>{{ __('Our experienced management team ensures the portfolio will deliver strong, stable equity growth for investors.') }}</li>
        </ul>
    </div>
@endsection

@push('scripts')
    <script>
        const cards = document.querySelectorAll('.investor-actions .card');
        for (i = 0; i < cards.length; i++) {
            cards[i].addEventListener('click', function(e) {
                if (e.target.type == 'button') {
                    this.parentNode.classList.toggle('flip');
                }

                if (e.target.parentNode.classList.contains('close')) {
                    this.parentNode.classList.toggle('flip');
                    const wrapper = this.querySelector('.d-none');
                    if (wrapper) {
                        window.setTimeout(function (that) {
                            that.removeChild(that.querySelector('.alert'));
                            wrapper.classList.remove('d-none');
                        }, 1000, this);
                    }
                }
            });
        }
    </script>
@endpush
