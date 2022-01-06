@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('The Property Investment Process | MESPIL real estate investment steps'))
@section('description', __('Portugal real estate investment process ✪ MESPIL make the property investment process easy by providing access to off-market distressed property transactions.'))

@section('content')
    <div class="container space-single">
        <h1 class="title-border mb-5">{{ __('The Property Investment Process') }}</h1>
        <p>{!! __('We at MESPIL offer you quality :link with strong capital appreciation and support the investment process every step of the way through our partners in legal, finance, and tax advise. We will guide you through the process and are always on hand to answer any questions you may have.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('Portuguese real estate investment projects') . '</a>']) !!}</p>
        <p>{!! __('We believe in :link as a robust and exciting investment option that offers potentially higher ROI over other European markets. We understand the market and nuances of doing business in Portugal with some of our executive team now calling it home. Co-investors in all projects we focus on in-demand locations such as the Algarve, :faro, :vilamoura and the capital city of :lisbon ensuring the asset is always in the right location, primary drivers in our investment results to date. We also maintain a focus on operating all of our assets end to end ensuring commitment to each project.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-real-estate-investment-guide') . '">' . __('Portugal') . '</a>', 'faro' => '<a class="internal-link" href="' . Helper::route('portugal', 'faro') . '">' . __('Faro') . '</a>', 'vilamoura' => '<a class="internal-link" href="' . Helper::route('portugal', 'vilamoura') . '">' . __('Vilamoura') . '</a>', 'lisbon' => '<a class="internal-link" href="' . Helper::route('portugal', 'lisbon') . '">' . __('Lisbon') . '</a>']) !!}</p>
    </div>

    <div class="container space-single">
        <h2 class="mt-5 mb-4">{{ __('The investment process in 4 simple steps') }}</h2>
        <ol>
            <li><strong class="font-weight-bold">{{ __('Join the MESPIL Investment Club (MIC)') }}</strong><br>{{ __('Take control of your wealth through the power of managed real estate investment and join our Investor Club - a partnership with your goals in mind backed by our strategic real estate investing and management approach. Our MIC club run a number of events and orientation tours showcasing our products.') }}<br><br></li>
            <li><strong class="font-weight-bold">{{ __('Speak to our Director of Funding') }}</strong><br>{!! __('Contact our director of funding :link1 so he can give you an overview of our company and team. MESPIL have capitalized on both our Portuguese market knowledge and our political, legal and banking networks to utilize those relationships and experience to create high performing investment opportunities for our partners. See some of our current available :link2', ['link1' => '<a class="internal-link" href="' . Helper::route('profile', 'tom-oconnor') . '">' . __('Tom O’Connor') . '</a>', 'link2' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('real estate investment projects in Portugal') . '</a>']) !!}<br><br></li>
            <li><strong class="font-weight-bold">{{ __('Orientation Tour') }}</strong><br>{{ __('Visit us in Portugal, we can arrange an orientation tour to meet our team in person and see our real estate investment opportunities.') }}<br><br></li>
            <li><strong class="font-weight-bold">{{ __('Due Diligence/Follow Up') }}</strong><br>{{ __('MESPIL assists investors in the due diligence process to understand the specific investment vehicle’s strategy, risk processes, management, terms and projected performance helping our investors determine quickly, in principle, how the proposal can fit their investment.') }}<br><br></li>
        </ol>

        <p>{!! __('For further info on investing as a partner with MESPIL please see our :link.', ['link' => '<a class="internal-link" href="' . Helper::route('for-investors/questions-and-answers') . '">' . __('FAQ for property investors') . '</a>']) !!}</p>
    </div>

    <div class="container-fluid head-section space-single">
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
@endsection
