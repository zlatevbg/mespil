@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('The Property Buying Process | MESPIL’s sales process in 9 simple steps'))
@section('description', __('Portugal real estate sales process ✪ We support the property purchasing process every step of the way through our partners in legal, finance, and tax advise.'))

@section('content')
    <div class="container space-single">
        <h1 class="title-border mb-5">{{ __('The Property Buying Process') }}</h1>
        <p>{!! __('We at MESPIL offer you quality :link with strong capital appreciation and support the purchasing process every step of the way through our partners in legal, finance, and tax advise. We will guide you through the process and are always on hand to answer any questions you may have. We maintain a focus on operating all of our assets end‑to‑end ensuring commitment to each project.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('Portuguese property for sale') . '</a>']) !!}</p>
    </div>

    <div class="container space-single">
        <h2 class="mt-5 mb-4">{{ __('The sales process in 9 simple steps') }}</h2>
        <ol class="multicolumn">
            <li><strong class="font-weight-bold">{{ __('Book an inspection trip with us') }}</strong><br>{!! __('Either in person or via SKYPE video call. In advance, you will be sent a short questionnaire so that we are crystal clear on the exact criteria for your property purchase. We will then provide you with a proposed itinerary to show you either Algarve, :faro, :vilamoura or :lisbon properties for sale.', ['faro' => '<a class="internal-link" href="' . Helper::route('portugal', 'faro') . '">' . __('Faro') . '</a>', 'vilamoura' => '<a class="internal-link" href="' . Helper::route('portugal', 'vilamoura') . '">' . __('Vilamoura') . '</a>', 'lisbon' => '<a class="internal-link" href="' . Helper::route('portugal', 'lisbon') . '">' . __('Lisbon') . '</a>']) !!}<br><br></li>
            <li><strong class="font-weight-bold">{{ __('Make your property choice') }}</strong><br>{{ __('Make your property choice, agree terms and conditions including a closing date that suits you and a suitable furniture fit out.') }}<br><br></li>
            <li><strong class="font-weight-bold">{{ __('Booking form & initial payment') }}</strong><br>{!! __('Sign our :link and pay the required €5000 booking deposit. At this stage the property is reserved in your name and is taken off the market.', ['link' => '<a id="download-booking-form" class="internal-link" href="' . Helper::download('booking-form') . '">' . __('booking form') . '</a>']) !!}<br><br></li>
            <li><strong class="font-weight-bold">{{ __('The sales process') }}</strong><br>{!! __('MESPIL will send the details of your purchase to our lawyers in Lisbon to begin the sales process. Our legal representatives are :link.', ['link' => '<a rel="nofollow" class="external-link" target="_blank" href="https://www.glawyers.eu/?lang=en">' . __('Global Lawyers') . '</a>']) !!}<br><br></li>
            <li><strong class="font-weight-bold">{{ __('Engage with a suitable lawyer') }}</strong><br>{{ __('You will now engage with a suitable lawyer to act on your behalf. Your lawyer will carry out the necessary due diligence checks to ensure the property is free from any existing debts – that the seller is the legal owner of the property and start to collate the various legal documentation on your behalf. You can arrange to sign the title deed and close on your property in person or by Power of Attorney (POA). We can help recommend the very best lawyers to represent you in Portugal.') }}<br><br></li>
            <li><strong class="font-weight-bold">{{ __('Portugal’s Golden Visa program') }}</strong><br>{!! __(':link is a popular residency-byinvestment programme that is attracting a growing number of investors, retirees and expats from all over the world. We have helped many clients through this process by partnering with the best specialist legal firms to seamlessly manage all of the steps.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('Portugal’s Golden Visa program') . '</a>']) !!}<br><br></li>
            <li><strong class="font-weight-bold">{{ __('Finance your property') }}</strong><br>{{ __('Consider your buying options, with very low interest rates available in Portugal it is most definitely worth considering a chat with MESPIL’s finance partners who can get decisions in as little as 48 hrs.') }}<br><br></li>
            <li><strong class="font-weight-bold">{{ __('Your promissory contract') }}</strong><br>{{ __('At this stage the main purchase funds will now need to be put in place and you will sign the promissory contract. The promissory contract is legally binding and a deposit of usually 10% is paid. Approximately 30 days later, you will be invited to the Notary Public’s office (if not signing by POA) along with your legal representation to execute the purchase deed. You will receive the keys and deeds to your new property investment.') }}<br><br></li>
            <li><strong class="font-weight-bold">{{ __('Legal fees & ownership costs') }}</strong><br>{{ __('There are associated costs both during the purchasing process and in general when owning a property in Portugal. We have broken down the detail so it is clear and transparent.') }}<br><br></li>
            <li class="text-muted text-unmute-hover"><strong class="font-weight-bold">{{ __('Completion time-frame') }}</strong><br>{{ __('The time-frame will depend if you require finance or not. If no bank finance is required, the process can be completed within 10 days. If finance is required, the process will take slightly longer due to the mortgage application process but still can be completed within 3-4 weeks. MESPIL are flexible and we will work around our clients needs.') }}<br><br></li>
            <li class="text-muted text-unmute-hover"><strong class="font-weight-bold">{{ __('Rental options') }}</strong><br>{{ __('You may decide to rent out your property and generate an income while not in use. MESPIL offer a guaranteed rental yield on all of our projects and a complete rental and management service. After the purchase transaction has taken place MESPIL will get in touch with you and send you the rental options for your review.') }}<br><br></li>
            <li class="text-muted text-unmute-hover"><strong class="font-weight-bold">{{ __('The non-habitual residency tax') }}</strong><br>{!! __(':link is a very popular Portuguese tax status. It enables the individual becoming a tax resident in Portugal to avail of generous tax advantages for the first 10 years of residency. MESPIL works with the best partners to assist our clients through this process.', ['link' => '<a class="internal-link" href="' . Helper::route('nhr-portuguese-tax-residency') . '">' . __('The Non-habitual Residency (NHR)') . '</a>']) !!}</li>
        </ol>

        <h2 class="mt-5 mb-4">{{ __('Rental contract & rental income tax') }}</h2>
        <div class="multicolumn">
            <p>{{ __('MESPIL offer two types of rental contracts which can be signed after the purchase process is complete.MESPIL will manage the full rental process for you so you don’t need to do anything while your property generates income and is managed professionally.') }}</p>
            <p><strong class="font-weight-bold">{{ __('Type 1 - Full Contract') }}</strong><br>{{ __('Select one month personal use between October and April. We offer a guaranteed 5% return on the purchase price. All costs are included with 25% tax deducted plus yearly condominium fees (management and maintenance fees).') }}</p>
            <p><strong class="font-weight-bold">{{ __('Type 2 - Flexible Contract') }}</strong><br>{{ __('This contract is split 60/40 of generated revenue with the owners receiving 60%. The owners tell us when we can use the apartment for rentals and that goes into the contract. All costs i.e. utilities, cleaning, condominium fees are paid by the owner and the owner receives the net amount. The net amount is variable as it depends on the times and periods the apartment is available to rent. Clients have full transparency on usage.') }}</p>
        </div>

        <h2 class="mt-5 mb-4">{{ __('The seven steps in applying for a mortgage') }}</h2>
        <ol>
            <li>{{ __('Details of the property are sent to the mortgage broker') }}</li>
            <li>{{ __('You are provided with a mortgage simulation which is a breakdown of the costs and monthly repayments') }}</li>
            <li>{{ __('Financial documentation and property documentation are sent to the bank to analyse') }}</li>
            <li>{{ __('Complete mortgage application and wait for approval. An approval decision takes approximately 2 weeks') }}</li>
            <li>{{ __('Once approved the mortgage broker will request a valuation from the bank') }}</li>
            <li>{{ __('Approval letters are received from the bank') }}</li>
            <li>{{ __('The approval letter is signed, and completion of the purchase can be arranged') }}</li>
        </ol>

        <h2 class="mt-5 mb-4">{{ __('Who are our buyers?') }}</h2>
        <div id="chart-top-sales-countries" class="chart" style="--chart-height: 600px"></div>
    </div>
@endsection

@push('scripts')
    <script>
        if (typeof gtag != 'undefined') {
            document.querySelector('#download-booking-form').addEventListener('click', function () {
                gtag('event', 'download', {'event_category': 'Downloads', 'event_action': 'Download', 'event_label': 'Booking Form / The Property Buying Process'});
            });
        }

        loadjs(
            [
                'https://www.gstatic.com/charts/loader.js',
            ],
            {
                success: function() {
                    google.charts.load('current', {
                        'packages': [
                            'corechart',
                        ],
                    });

                    google.charts.setOnLoadCallback(drawTopSalesCountries);
                },
                async: false,
            }
        );

        var horizontalColumnChartOptions = {
            'orientation': 'vertical',
            'fontName': 'Museo Sans',
            'fontSize': 16,
            'colors': ['#bc954d'],
            'height': '600',
            'chartArea': {
                'height': '500',
            },
            'annotations': {
                'textStyle': {
                    'bold': true,
                },
            },
            'hAxis': {
                'format': 'percent',
            },
            'tooltip': {
                'trigger': 'none',
            },
            'legend': {
                'position': 'none',
            },
        };

        function drawTopSalesCountries() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', '{{ __('Country') }}');
            data.addColumn('number', '{{ __('Sales') }}');
            data.addColumn({type: 'string', role: 'annotation'});
            data.addRows(@json($countries));

            var chart = new google.visualization.ColumnChart(document.getElementById('chart-top-sales-countries'));
            chart.draw(data, horizontalColumnChartOptions);
        }
    </script>
@endpush
