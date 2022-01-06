<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Apartment;
use App\Models\Sale;
use Helper;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('www::contact', function ($view) {
            $options = [
                'general' => __('General Enquiry'),
                'properties' => __('Properties for Sale'),
                'projects' => __('Investment Projects'),
                'vrtour' => __('Request Virtual Tour'),
                'callback' => __('Request Call-Back'),
                'mic' => __('MESPIL Investment Club'),
                'visa' => __('Golden Visa Q’s'),
                'nhr' => __('Non Habitual Residency Q’s'),
                'process' => __('MESPIL Sales Process'),
            ];

            $view->with('options', $options);
        });

        View::composer('www::the-property-buying-process', function ($view) {
            $countries = Sale::topCountries();
            $view->with('countries', $countries);
        });

        View::composer('www::portugal-properties-for-sale.pine-hills-vilamoura-portugal', function ($view) {
            $apartments = Apartment::select('apartments.unit', 'apartments.apartment_area', 'apartments.price', DB::raw('(SELECT statuses.name FROM apartment_status LEFT JOIN statuses ON statuses.id = apartment_status.status_id /*AND statuses.id IN (10, 34)*/ WHERE apartment_status.apartment_id = apartments.id AND apartment_status.deleted_at IS NULL ORDER BY apartment_status.created_at DESC LIMIT 1) AS status'), 'beds.name AS bed', 'floors.name AS floor', 'blocks.name AS block')->leftJoin('beds', 'apartments.bed_id', '=', 'beds.id')->leftJoin('floors', 'apartments.floor_id', '=', 'floors.id')->leftJoin('blocks', 'apartments.block_id', '=', 'blocks.id')->where('apartments.project_id', 1)->where('apartments.public', 1)->havingRaw('status IS NOT NULL')->get();

            $available = $apartments->whereIn('status', ['Available', 'Pipeline']);
            $sold = $apartments->whereNotIn('status', ['Available', 'Pipeline']);

            $view->with('available', $available)->with('sold', $sold);
        });

        View::composer('www::portugal-properties-for-sale.no-9-lisbon-portugal', function ($view) {
            $apartments = Apartment::select('apartments.unit', 'apartments.total_area', 'apartments.price', DB::raw('(SELECT statuses.name FROM apartment_status LEFT JOIN statuses ON statuses.id = apartment_status.status_id /*AND statuses.id IN (10, 34)*/ WHERE apartment_status.apartment_id = apartments.id AND apartment_status.deleted_at IS NULL ORDER BY apartment_status.created_at DESC LIMIT 1) AS status'), 'beds.name AS bed', 'floors.name AS floor')->leftJoin('beds', 'apartments.bed_id', '=', 'beds.id')->leftJoin('floors', 'apartments.floor_id', '=', 'floors.id')->where('apartments.project_id', 2)->where('apartments.public', 1)->havingRaw('status IS NOT NULL')->get();

            $available = $apartments->whereIn('status', ['Available', 'Pipeline']);
            $sold = $apartments->whereNotIn('status', ['Available', 'Pipeline']);

            $view->with('available', $available)->with('sold', $sold);
        });

        View::composer('www::portugal-properties-for-sale.no-57-lisbon-portugal', function ($view) {
            $apartments = Apartment::select('apartments.unit', 'apartments.total_area', 'apartments.price', DB::raw('(SELECT statuses.name FROM apartment_status LEFT JOIN statuses ON statuses.id = apartment_status.status_id /*AND statuses.id IN (10, 34)*/ WHERE apartment_status.apartment_id = apartments.id AND apartment_status.deleted_at IS NULL ORDER BY apartment_status.created_at DESC LIMIT 1) AS status'), 'beds.name AS bed', 'floors.name AS floor')->leftJoin('beds', 'apartments.bed_id', '=', 'beds.id')->leftJoin('floors', 'apartments.floor_id', '=', 'floors.id')->where('apartments.project_id', 11)->where('apartments.public', 1)->havingRaw('status IS NOT NULL')->get();

            $available = $apartments->whereIn('status', ['Available', 'Pipeline']);
            $sold = $apartments->whereNotIn('status', ['Available', 'Pipeline']);

            $view->with('available', $available)->with('sold', $sold);
        });

        View::composer('www::portugal-properties-for-sale.no-9-faro-portugal', function ($view) {
            $apartments = Apartment::select('apartments.unit', 'apartments.total_area', 'apartments.price', DB::raw('(SELECT statuses.name FROM apartment_status LEFT JOIN statuses ON statuses.id = apartment_status.status_id /*AND statuses.id IN (10, 34)*/ WHERE apartment_status.apartment_id = apartments.id AND apartment_status.deleted_at IS NULL ORDER BY apartment_status.created_at DESC LIMIT 1) AS status'), 'beds.name AS bed', 'floors.name AS floor')->leftJoin('beds', 'apartments.bed_id', '=', 'beds.id')->leftJoin('floors', 'apartments.floor_id', '=', 'floors.id')->where('apartments.project_id', 12)->where('apartments.public', 1)->havingRaw('status IS NOT NULL')->get();

            $available = $apartments->whereIn('status', ['Available', 'Pipeline']);
            $sold = $apartments->whereNotIn('status', ['Available', 'Pipeline']);

            $view->with('available', $available)->with('sold', $sold);
        });

        View::composer('www::portugal.faro', function ($view) {
            $count = Apartment::select(DB::raw('(SELECT statuses.name FROM apartment_status LEFT JOIN statuses ON statuses.id = apartment_status.status_id AND statuses.id IN (10, 34) WHERE apartment_status.apartment_id = apartments.id AND apartment_status.deleted_at IS NULL ORDER BY apartment_status.created_at DESC LIMIT 1) AS status'))->where('apartments.project_id', 12)->where('apartments.public', 1)->havingRaw('status IS NOT NULL')->get()->count();

            $view->with('count', $count);
        });

        View::composer('www::portugal.vilamoura', function ($view) {
            $count = Apartment::select(DB::raw('(SELECT statuses.name FROM apartment_status LEFT JOIN statuses ON statuses.id = apartment_status.status_id AND statuses.id IN (10, 34) WHERE apartment_status.apartment_id = apartments.id AND apartment_status.deleted_at IS NULL ORDER BY apartment_status.created_at DESC LIMIT 1) AS status'))->where('apartments.project_id', 1)->where('apartments.public', 1)->havingRaw('status IS NOT NULL')->get()->count();

            $view->with('count', $count);
        });

        View::composer('www::portugal.lisbon', function ($view) {
            $count = Apartment::select(DB::raw('(SELECT statuses.name FROM apartment_status LEFT JOIN statuses ON statuses.id = apartment_status.status_id AND statuses.id IN (10, 34) WHERE apartment_status.apartment_id = apartments.id AND apartment_status.deleted_at IS NULL ORDER BY apartment_status.created_at DESC LIMIT 1) AS status'))->where('apartments.project_id', 2)->where('apartments.public', 1)->havingRaw('status IS NOT NULL')->get()->count();

            $view->with('count', $count);
        });

        View::composer('www::portugal-investment-projects.pine-hills-vilamoura-portugal', function ($view) {
            $count = Apartment::select(DB::raw('(SELECT statuses.name FROM apartment_status LEFT JOIN statuses ON statuses.id = apartment_status.status_id AND statuses.id IN (10, 34) WHERE apartment_status.apartment_id = apartments.id AND apartment_status.deleted_at IS NULL ORDER BY apartment_status.created_at DESC LIMIT 1) AS status'))->where('apartments.project_id', 1)->where('apartments.public', 1)->havingRaw('status IS NOT NULL')->get()->count();

            $view->with('count', $count);
        });

        View::composer('www::portugal-investment-projects.no-9-lisbon-portugal', function ($view) {
            $count = Apartment::select(DB::raw('(SELECT statuses.name FROM apartment_status LEFT JOIN statuses ON statuses.id = apartment_status.status_id AND statuses.id IN (10, 34) WHERE apartment_status.apartment_id = apartments.id AND apartment_status.deleted_at IS NULL ORDER BY apartment_status.created_at DESC LIMIT 1) AS status'))->where('apartments.project_id', 2)->where('apartments.public', 1)->havingRaw('status IS NOT NULL')->get()->count();

            $view->with('count', $count);
        });

        View::composer('www::portugal-investment-projects.no-57-lisbon-portugal', function ($view) {
            $count = Apartment::select(DB::raw('(SELECT statuses.name FROM apartment_status LEFT JOIN statuses ON statuses.id = apartment_status.status_id AND statuses.id IN (10, 34) WHERE apartment_status.apartment_id = apartments.id AND apartment_status.deleted_at IS NULL ORDER BY apartment_status.created_at DESC LIMIT 1) AS status'))->where('apartments.project_id', 11)->where('apartments.public', 1)->havingRaw('status IS NOT NULL')->get()->count();

            $view->with('count', $count);
        });

        View::composer('www::portugal-investment-projects.no-9-faro-portugal', function ($view) {
            $count = Apartment::select(DB::raw('(SELECT statuses.name FROM apartment_status LEFT JOIN statuses ON statuses.id = apartment_status.status_id AND statuses.id IN (10, 34) WHERE apartment_status.apartment_id = apartments.id AND apartment_status.deleted_at IS NULL ORDER BY apartment_status.created_at DESC LIMIT 1) AS status'))->where('apartments.project_id', 12)->where('apartments.public', 1)->havingRaw('status IS NOT NULL')->get()->count();

            $view->with('count', $count);
        });

        View::composer('www::for-end-buyers.questions-and-answers', function ($view) {
            $questionsArray = [
                [
                    'category' => __('MESPIL - GENERAL'),
                    'questions' => [
                        1 => [
                            'question' => __('Who are MESPIL?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL are bringing full service real estate investment opportunities and lifestyle destinations in Portugal to our :link, MESPIL focuses on property in the Algarve and Lisbon areas. MESPIL acquires off market distressed property offering value and uplift, an operational team on the ground and fast selling through our client direct channels and an established global agency network.', ['link' => '<a class="internal-link" href="' . Helper::route('for-end-buyers') . '">' . __('end buyers') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        2 => [
                            'question' => __('Who founded MESPIL?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL was founded by :tom and :andrew in 2006 in Dublin, Ireland. Tom O’Connor is MESPIL’s Managing Director responsible for the company’s strategic direction and operations whilst Andrew McAdam acts as Finance Director supporting strategy direction, funding mitigation and risk, company financials and statutory compliance. Today, MESPIL has evolved with the addition of a Chairperson, additional Board members and an Advisory Board plus an experienced leadership team several of whom are based full time in Portugal.', ['tom' => '<a class="internal-link" href="' . Helper::route('profile', 'tom-oconnor') . '">' . __('Tom O’Connor') . '</a>', 'andrew' => '<a class="internal-link" href="' . Helper::route('profile', 'andrew-mcadam') . '">' . __('Andrew McAdam') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        3 => [
                            'question' => __('Where is MESPIL based?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('We are headquartered in Dublin, Ireland with an office in Algarve, Portugal. You can find our contact details :here', ['here' => '<a class="internal-link" href="' . Helper::route('contact') . '">' . __('here') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        4 => [
                            'question' => __('Who makes up the MESPIL team?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL is a team of professionals with significant experience in real estate, infrastructure, tax and finance. You can learn more about our Board and Leadership team :here', ['here' => '<a class="internal-link" href="' . Helper::route('about') . '#team">' . __('here') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        5 => [
                            'question' => __('How is MESPIL funded?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL is funded by strategic investors on a project by project basis. In June 2017 we completed our first capital raise in Portugal purchasing :link a 55-villa apartment development from Novo Banco with a combination of senior debt and equity from MESPIL’s Principals and an European private equity firm. Since then we have acquired a further 2 regeneration projects in Lisbon, Portugal using the same funding model. MESPIL is part investor in all of our projects ensuring your investment is ours too.', ['link' => '<a class="internal-link" href="' . Helper::route('property-for-sale', 'pine-hills-vilamoura-portugal') . '">' . __('Pine Hills, Vilamoura') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        6 => [
                            'question' => __('How many Portuguese projects have MESPIL completed?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('As of 2021 MESPIL have completed several projects in both the Algarve and Lisbon, please see our :link. The principals of MESPIL have collectively raised over 500M Euro that has been invested in real estate projects across Europe to date, 50M Euro of which are assets under management in Portugal.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('completed and available properties for sale in Portugal') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        7 => [
                            'question' => __('What are the benefits of purchasing through MESPIL?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL make it easy for property buyers to purchase quality real estate in the Algarve, and Lisbon. MESPIL make the process frictionless allowing you to screen all of our current projects and availability and have access to your MESPIL agent ensuring you have full support in the purchasing process and then visibility on your investment post sales.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('completed and available properties for sale in Portugal') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'category' => __('MESPIL – INSPECTION TRIP AND/OR PROPERTY VIEWINGS'),
                    'questions' => [
                        8 => [
                            'question' => __('How do I arrange a consultation with MESPIL?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('An initial real estate consultation with a MESPIL agent is the first step in your process to finding the right property investment or one that you will call home. This is an important part of the process, since we will be working to support you in the process from start to finish saving you  the end buyer a lot of time and energy from having to research that information on their own. During the consultation, we will examine market conditions in the area of Portugal you are interested in, discuss which locations best appeal to you, review purchasing budgets, recommend legal, tax etc professionals and discuss any questions or concerns you may have.'),
                                        __('To book a consultation whether in person or via teleconference or phone please :link with us.', ['link' => '<a class="internal-link" href="' . Helper::route('contact') . '">' . __('get in touch') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        9 => [
                            'question' => __('What type of properties are available?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL have a number of residential units in both Lisbon and several locations in the Algarve, from Studio to T3 Penthouse apartments, all :link1 eligible. Browse MESPIL’s current available :link2.', ['link1' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('Portugal Golden Visa') . '</a>', 'link2' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('properties for sale in Portugal') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        10 => [
                            'question' => __('What is the minimum duration of an inspection trip?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL offer both private 1:1 inspection/orientation trips for clients and their families in addition to small group inspection trips for those clients that are travelling with an international sales agent. Most clients come between 1-3 days whereby viewings can take place, discussions with MESPIL’s team, and a number of other administration items such as opening up a bank account/organising a NIF number.'),
                                    ],
                                ],
                            ],
                        ],
                        11 => [
                            'question' => __('Is accommodation arranged or can this be done?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL can organise accommodation in one of our developments subject to availability.'),
                                    ],
                                ],
                            ],
                        ],
                        12 => [
                            'question' => __('On the inspection trip will we see surrounding areas?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Yes, your MESPIL agent will showcase all of the amenities and attractions that your preferred area has to offer. For eg: if you were interested in our project :link our agent would show you the beaches, golf, marina, international school, shopping, casino etc.', ['link' => '<a class="internal-link" href="' . Helper::route('property-for-sale', 'pine-hills-vilamoura-portugal') . '">' . __('Pine Hills in Vilamoura') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        13 => [
                            'question' => __('On the inspection trip can I meet with a legal and tax advisor?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Of course, MESPIL will recommend a list of professionals we partner with and will assist in arranging meetings at a suitable time during your inspection trip.'),
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'category' => __('MESPIL – END BUYERS'),
                    'questions' => [
                        14 => [
                            'question' => __('How is MESPIL’s approach different than its peers?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL employs a different approach to investment – we acquire, develop and manage all of our :link as co-investors and believe this longer-term view is critical to the cyclicality of markets. Your investment is our investment too. We focus on quality investments in the right location over quantity and evaluate on a long-term strategy basis in building a yielding asset portfolio. To date we have not invested in a ground up development and instead we de-risk our investments by focusing on distressed assets that offer solid cash flow. We use a rigorous Ideal Project Parameter weighting matrix to scrutinise all potential projects and believe limiting what we invest in has been a primary driver of our investment results to date.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('real estate investment projects in Portugal') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        15 => [
                            'question' => __('There will inevitably because of Covid-19 be a slowdown in travel through Europe and Portugal, what impact in sales or project development do you foresee?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Although Covid-19 impacted the market it also resulted in an uplift in demand from Asia & the Middle East. In addition, purchasers are now completing sales online which is speeding up the closing process. In general, MESPIL believe that the demand for real estate will remain robust since Portugal remains a highly attractive proposition globally due to its :link, it’s safety and its very high quality of life stats. The Covid-19 outbreak has been well managed by its government and as a result its citizens have showed relatively low exposure.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('Golden Visa program') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        16 => [
                            'question' => __('Who are MESPIL’s end buyers?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL end buyers to date include HNWI’s relocating due to a favourable tax regime, real estate investors, retirees and those that are relocating to Portugal, many of which do so through the :link. Our end buyers in order of nationality come from the UK, Germany, Belgium, Ireland, The Netherlands, Sweden, China, India and the UAE.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('Golden Visa Programme') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        17 => [
                            'question' => __('Why buy property in Portugal?'),
                            'answer' => [
                                [
                                    'ul' => [
                                        __('The opportunity to own a home where there is sunshine 320 days of the year, one of the softest climates in Europe.'),
                                        __('The cost of living in Portugal is one of the lowest in Europe'),
                                        __('Portugal is a safe place to live with a high level of political stability and has won international awards to recognise same'),
                                        __('It is a beautiful country with unspoiled nature and myriad of golden beaches'),
                                        __('Portugal offers a very high quality of life'),
                                        __('Portugal is far less densely populated than most other countries in western Europe with only 113 people per square kilometre'),
                                        __('Portugal is ex-pat friendly and have won international awards recognising same'),
                                        __('International Schools'),
                                        __('Portugal is easily accessible from Europe, Africa, and the US'),
                                        __('Public infrastructure such as healthcare and transportation high quality, widely available and accessible'),
                                        __('Portugal is a golf haven with the Algarve alone offering over 30 different options'),
                                        __('Property in Portugal’s south coast is one of the most popular luxury resorts; Algarve area is a firm favourite and provides solid and steady rental yield performance'),
                                        __('The real estate market in Portugal is quietly booming offering strong capital appreciation'),
                                        __('Very attractive tax incentives through the :link which was introduced in 2009 with the aim of attracting more people to the country by offering fantastic financial incentive in becoming resident.', ['link' => '<a class="internal-link" href="' . Helper::route('nhr-portuguese-tax-residency') . '">' . __('NHR scheme') . '</a>']),
                                        __('Purchasing and keeping ownership of a property for at least five years can make you eligible for Portuguese citizenship.'),
                                        __('A strong stable economy backed by EU investment ensures a strong and growing economy'),
                                    ],
                                ],
                            ],
                        ],
                        18 => [
                            'question' => __('Where to buy property in Portugal?'),
                            'answer' => [
                                [
                                    'ul' => [
                                        __(':strongLisbon is the capital city and the major economic hub of :link1. It is a beautiful city filled with history and culture that has seen a dramatic rise in tourism, foreign direct investment, new business and ex-pats relocating. This makes it a perfect place to :link2, whether for commercial purposes or for living. A recent change in legislation means that properties in Lisbon will no longer be eligible for Golden Visa after July 2021.It is important to note that property prices in Lisbon have seen a sharp increase, however demand and rental yields are high.', ['strong' => '<strong>' . __('Lisbon') . '</strong><br>', 'link1' => '<a class="internal-link" href="' . Helper::route('portugal-real-estate-investment-guide') . '">' . __('Portugal') . '</a>', 'link2' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('buy a property in Portugal') . '</a>']),
                                        __(':strongProperties in the Algarve attract everyone from retirees to second homeowners and investors. It is one of the most popular holiday destinations in Portugal, known for its sunshine, stunning coastline, fresh seafood, top-class golfing, and innate natural beauty. Easily reachable by plane to and from the UK, it’s no surprise as to why there are so many English-speaking homeowners in this part of Portugal who own properties such as holiday homes, villas, and beach houses.', ['strong' => '<strong>' . __('Algarve') . '</strong><br>']),
                                    ],
                                ],
                            ],
                        ],
                        19 => [
                            'question' => __('Financing a property in Portugal – Mortgage Info?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('There are a number of banks lending in Portugal all at very low favourable rates. Our recommendation is to use one of our agents that have relationships with all of the banks, ensuring the process is streamlined and they can get the best offer for your requirements. Please email us for more info or book one of our initial consultations so we can discuss.'),
                                        __('Example of docs you will need to start compiling:'),
                                    ],
                                ],
                                [
                                    'ul' => [
                                        __('ID Card or Citizen Card'),
                                        __('Duplicates of the last three payroll documents'),
                                        __('Floor plan of the apartment or house in Portugal that you intend to buy'),
                                        __('Documents about other incoming sources (if any)'),
                                        __('Credit Report'),
                                        __('Last Income Tax Return and its Notice of Settlement'),
                                        __('Plan of the building'),
                                        __('Bank Statements (in Portugal and Overseas)'),
                                        __('Employment confirmation letter'),
                                    ],
                                ],
                                [
                                    'p' => [
                                        __('The bank evaluates the property and determine the Loan-to-Value ratio. Once an offer has been made you will need to arrange life insurance as it is a legal requirement, again this is something that your Solicitor can arrange easily on your behalf.'),
                                    ],
                                ],
                                [
                                    'h4' => [
                                        __('You need a NIF number to apply for a mortgage'),
                                    ],
                                ],
                                [
                                    'p' => [
                                        __('For a nominal fee your Solicitor will be able to arrange a NIF number for you, if you are not in the country this can be down through Power of Attorney and is a straight forward process.'),
                                    ],
                                ],
                                [
                                    'h4' => [
                                        __('What is a NIF number?'),
                                    ],
                                ],
                                [
                                    'p' => [
                                        __('This is a tax registration number. A NIF number in Portugal is a nine-digit number unique to each individual. This number is on all correspondence between yourself and the Portuguese tax authority.'),
                                    ],
                                ],
                            ],
                        ],
                        20 => [
                            'question' => __('Do I need a lawyer when purchasing a property?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Yes, we can recommend several excellent professionals to assist you.'),
                                    ],
                                ],
                            ],
                        ],
                        21 => [
                            'question' => __('How much deposit do I need to purchase a property?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('This is dependant on a number of factors such as age, deposit, loan to value etc. Our mortgage consultant partners can give preliminary figures during the initial consultation with you.'),
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'category' => __('MESPIL – PURCHASE PROCESS'),
                    'questions' => [
                        22 => [
                            'question' => __('Will my personal details be secure?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL is committed to protecting the privacy and confidentiality of our end buyers information. This includes but is not limited to physical and electronic procedures that protect information from loss, misuse, damage or modification by unauthorised access. Some of the central features of our security processes are:'),
                                    ],
                                ],
                                [
                                    'ul' => [
                                        __('Use of specialist software that scans for viruses and malicious content'),
                                        __('Software that protects from DDoS and Brute-force attacks'),
                                        __('A Web Application Firewall'),
                                    ],
                                ],
                                [
                                    'p' => [
                                        __('MESPIL is following EU Data Protection Directives in order to protect the data of its investors and end buyers.'),
                                    ],
                                ],
                            ],
                        ],
                        23 => [
                            'question' => __('Does MESPIL run background checks on potential purchasers?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Yes, MESPIL carry out a number of anti-money laundering checks with all potential purchasers through our legal team that will work with your legal representation.'),
                                    ],
                                ],
                            ],
                        ],
                        24 => [
                            'question' => __('How will end buyers be updated about their property purchase?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('You will work directly with an sales representative of MESPIL who will be your point of contact through the entire process. You will have both their email and mobile phone number and they will assist and support you as and when needed. Our team have processed over 100 sales in Portugal and worked with many clients from all over the world including those investing for investment purposes, those purchasing to acquire the Golden Visa and those relocating to retire.'),
                                    ],
                                ],
                            ],
                        ],
                        25 => [
                            'question' => __('What taxes/fees need to be paid when purchasing property in Portugal?'),
                            'answer' => [
                                [
                                    'ul' => [
                                        __('IMI purchase tax (paid by the buyer after the deed, of which the cost varies);'),
                                        __('Stamp Duty (paid by the buyer on signing the deed, of which the cost varies up to 0.8% of the cost of the property);'),
                                        __('Lawyer fees (paid by the buyer, of which the cost varies);'),
                                        __('Notary and Registration taxes (paid by the buyer after the deed, of which the value is €750.00 EUR);'),
                                        __('Estate agent fees (paid by the seller, of which the value varies);'),
                                        __('Property price (paid by the buyer on signing the deed, value minus any deposit already made).'),
                                    ],
                                ],
                            ],
                        ],
                        26 => [
                            'question' => __('After purchasing a property in Portugal, do I have any annual taxes?'),
                            'answer' => [
                                [
                                    'ul' => [
                                        __('The IMT tax is a property purchase tax paid as a once off payment after the deed is executed and is calculated and charged by the local revenue office.'),
                                        __('Every year it is obligatory to pay IMI property tax, this is a nominal payment and is a yearly tax set by the council the property is located in.'),
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'category' => __('MESPIL – RENTAL CONTRACTS'),
                    'questions' => [
                        27 => [
                            'question' => __('What rental contracts are offered through MESPIL?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL offer a number of rental options on all of their projects whether you wish to give full access to your property or only a number of months, the choice is yours and you will be able to discuss options directly with your sales representative from MESPIL.'),
                                    ],
                                ],
                            ],
                        ],
                        28 => [
                            'question' => __('When are rental payments made by MESPIL to end buyers?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL make quarterly rental payments to their end buyers signed to a rental contract.'),
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ];

            $view->with('questionsArray', $questionsArray);
        });

        View::composer('www::for-investors.questions-and-answers', function ($view) {
            $questionsArray = [
                [
                    'category' => __('MESPIL INVESTMENT CLUB (MIC) - GENERAL'),
                    'questions' => [
                        1 => [
                            'question' => __('What is MESPIL Investment Club (MIC) and how does it work?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL Investment Club is a boutique real estate investment club whereby we connect investors with an appetite for :link1 with off-market quality :link2 primarily in Lisbon, and Algarve.', ['link1' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('Portuguese property') . '</a>', 'link2' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('real estate investment opportunities in Portugal') . '</a>']),
                                        __('Through MESPIL Investment Club investors have the opportunity to learn and invest in real estate opportunities through a private consultation with our Director of Funding :tom, through our monthly investment offer e-shots and/or through a number of events we hold regularly on the Algarve. Investors are welcome to review investment documents, analyse due diligence material, meet our team and sign any legal documentation at that time. Once invested, investors will have access to an investor dashboard through our CRM proprietary tool giving 24/7 access to watch how your money is working for you. You will also be introduced to a dedicated Investor Relations Manager who will be at your disposal for any reporting or further details you require.', ['tom' => '<a class="internal-link" href="' . Helper::route('profile', 'tom-oconnor') . '">' . __('Tom O’Connor') . '</a>']),
                                        __('MESPIL are here to simplify :link through our full-service offering.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-real-estate-investment-guide') . '">' . __('real estate investing in Portugal') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        2 => [
                            'question' => __('Will my investment details be secure online?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL Investment Club (MIC) is committed to protecting the privacy and confidentiality of our investor information. This includes but is not limited to physical and electronic procedures that protect information from loss, misuse, damage or modification by unauthorised access. Some of the central features of our security processes are:'),
                                    ],
                                ],
                                [
                                    'ul' => [
                                        __('Use of specialist software that scans for viruses and malicious content'),
                                        __('Software that protects from DDoS and Brute-force attacks'),
                                        __('A Web Application Firewall'),
                                    ],
                                ],
                                [
                                    'p' => [
                                        __('M.I.C. is following EU Data Protection Directives in order to protect the data of its investors and members.'),
                                    ],
                                ],
                            ],
                        ],
                        3 => [
                            'question' => __('How do I get started with MESPIL Investment Club (MIC)?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Feel welcome to contact MESPIL Head of Funding Director Tom O’Connor for an initial discussion on :phone or via email :email', ['phone' => '<a class="internal-link" data-track-phone="Q&A #3: " href="tel:' . __('mespil.phone.portugal') . '">' . __('mespil.phone.portugal') . '</a>', 'email' => '<a class="internal-link encoded-email" data-track-email="Q&A #3: " data-email="' . str_rot13('tom@mespil.ie') . '">[email]</a>']),
                                    ],
                                ],
                            ],
                        ],
                        4 => [
                            'question' => __('Who is MESPIL?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL are bringing full service real estate investment to clients and investors alike. Currently creating investment opportunities and lifestyle destinations in Portugal for our :link, MESPIL investors focus on property in the Algarve and Lisbon areas. MESPIL Investment Club benefits from acquiring off market distressed property offering value and uplift, an operational team on the ground and fast selling through our client direct channels and an established global agency network.', ['link' => '<a class="internal-link" href="' . Helper::route('for-end-buyers') . '">' . __('end buyers') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        5 => [
                            'question' => __('Who founded MESPIL?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL was founded by :tom and :andrew in 2006 with MESPIL Investment Club formally launched in 2016. Tom O’Connor is MESPIL’s Managing Director responsible for the company’s strategic direction and operations whilst Andrew McAdam acts as Finance Director supporting strategy direction, funding mitigation and risk, company financials and statutory compliance. Today, MESPIL has evolved with the addition of a Chairperson, additional Board members and an Advisory Board plus an experienced leadership team.', ['tom' => '<a class="internal-link" href="' . Helper::route('profile', 'tom-oconnor') . '">' . __('Tom O’Connor') . '</a>', 'andrew' => '<a class="internal-link" href="' . Helper::route('profile', 'andrew-mcadam') . '">' . __('Andrew McAdam') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        6 => [
                            'question' => __('Who makes up the MESPIL team?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL is a team of professionals with significant experience in real estate, infrastructure, tax and finance. You can learn more about our Board and Leadership team :here.', ['here' => '<a class="internal-link" href="' . Helper::route('about') . '#team">' . __('here') . '</a>']),
                                        __('We are headquartered in Dublin, Ireland with an office in Algarve, Portugal. You can find our contact details :here.', ['here' => '<a class="internal-link" href="' . Helper::route('contact') . '">' . __('here') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        7 => [
                            'question' => __('How is MESPIL Investment Club (MIC) capitalised?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL is funded by strategic investors on a project by project basis. In June 2017 we completed our first capital raise in Portugal purchasing :link a 55-villa apartment development from Novo Banco with a combination of senior debt and equity from MESPIL’s Principals and an European private equity firm. Since then we have acquired a further 2 regeneration projects in Lisbon, Portugal using the same funding model.', ['link' => '<a class="internal-link" href="' . Helper::route('property-for-sale', 'pine-hills-vilamoura-portugal') . '">' . __('Pine Hills, Vilamoura') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        8 => [
                            'question' => __('How much money has been raised and invested through MESPIL?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('The principals of MESPIL have collectively raised over 500M Euro that has been invested in real estate projects across Europe to date. Most recently, MESPIL has over 40M Euro worth of assets under management in Portugal.'),
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'category' => __('MESPIL INVESTMENT CLUB (MIC) – INVESTOR QUESTIONS'),
                    'questions' => [
                        9 => [
                            'question' => __('Who invests through MESPIL?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL investors to date include HNWI’s, private equity and private investors.'),
                                    ],
                                ],
                            ],
                        ],
                        10 => [
                            'question' => __('What are the benefits of using MESPIL to invest?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL make it easy for investors with an appetite for :link1 by providing access to off-market distressed property transactions. Our team focus on sourcing and acquiring :link2 in the Algarve, and Lisbon allowing our investors diversify their portfolios and getting access to a number of debt and equity investment options. MESPIL make the process frictionless allowing you to screen investment projects online and have access to your investment dashboard through our proprietary CRM system ensuring you have 24/7 visibility on your investment.', ['link1' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('Portuguese real estate') . '</a>', 'link2' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('Portuguese real estate investments') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        11 => [
                            'question' => __('How is MESPIL’s approach different than its peers?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL employs a different approach to investment – we acquire, develop and manage all of our :link as co-investors and believe this longer-term view is critical to the cyclicality of markets. Your investment is our investment too. We focus on quality investments in the right location over quantity and evaluate on a long-term strategy basis in building a yielding asset portfolio. To date we have not invested in a ground up development and instead we de-risk our investments by focusing on distressed assets that offer solid cash flow. We use a rigorous Ideal Project Parameter weighting matrix to scrutinise all potential projects and believe limiting what we invest in has been a primary driver of our investment results to date.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('real estate investment projects in Portugal') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        12 => [
                            'question' => __('How does MESPIL use technology to reduce expenses?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('We have built a proprietary CRM tool that in real time manages all of our real estate projects, financials, sales and marketing including individual investor dashboard access. We are a small :team that relies on a number of different technologies to support our business.', ['team' => '<a class="internal-link" href="' . Helper::route('about') . '#team">' . __('team') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        13 => [
                            'question' => __('When is an investment opportunity proposed to investors by MESPIL?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL have built a dynamic database of potential :link all of which go through an in-depth financial and due diligence process. Along with our legal team Global Lawyers, Lisbon a decision is made whether the project is a good fit to propose to the MESPIL Investor Club. We are good at scenario planning and understand the variables of each transaction including return structure, market statistics and demand, quality of the property and have a 3rd party independent valuation completed. At MESPIL, we typically fund residential buildings that provide cash flow to investors as quickly as possible through sales off-plan and that increase cash flow over the life of the investment as a yielding asset.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('Portuguese real estate investment opportunities') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        14 => [
                            'question' => __('Are the investments with MESPIL secure?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Although no investment is guaranteed, by investing in a MESPIL project you are investing in physical assets in Portugal and we usually structure investments that provide first charge security to our investor.'),
                                    ],
                                ],
                            ],
                        ],
                        15 => [
                            'question' => __('Are the investments risky?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('There is no guarantee when investing in real estate due to dynamic economic cycles however real estate provides a chance for better returns requiring investors to perform a cost-benefit analysis to determine where their money is best held.'),
                                    ],
                                ],
                            ],
                        ],
                        16 => [
                            'question' => __('Does MESPIL run background and/or credit checks when in discussions with new investors?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Yes, MESPIL carry out a number of KYC (know your customer) and anti-money laundering checks with all potential investors as part of our investor onboarding process.'),
                                    ],
                                ],
                            ],
                        ],
                        17 => [
                            'question' => __('Who is eligible to invest with MESPIL?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Qualified investors who pass our KYC requirements are eligible to make investments with MESPIL.'),
                                        __('MESPIL can only take investment from professional investors'),
                                        __('“Qualified investor (QI)” is defined with income >€200k pa and net worth of >€5 Mio.'),
                                    ],
                                ],
                            ],
                        ],
                        18 => [
                            'question' => __('Is there a minimum investment sum?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Yes, however it is different for each investment opportunity. The minimum to date invested in any one project has been EURO 1M. However, we are currently pursuing a number of Lisbon refurbishment opportunities which have smaller investment requirements.'),
                                    ],
                                ],
                            ],
                        ],
                        19 => [
                            'question' => __('How does the investment process work?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('When an investment has been transferred via bank, monies are held securely in our Portuguese client account. An investment is not final until all legal documents are signed, and funding has been cleared.'),
                                    ],
                                ],
                            ],
                        ],
                        20 => [
                            'question' => __('How will investors be updated about their investment status?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL has a dedicated Investor Relations Manager who will manage the communication between our company and clients. Your IR Manager will provide timely updates at least quarterly via both email and the investor dashboard on our CRM tool. The dashboard will provide key metrics on project milestones, sales analysis, and financials.'),
                                    ],
                                ],
                            ],
                        ],
                        21 => [
                            'question' => __('Is my investment liquid?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Real estate by its nature is illiquid. However, liquidity is released as sales complete over the life cycle of the investment term and this provides liquidity for MESPIL clients.'),
                                    ],
                                ],
                            ],
                        ],
                        22 => [
                            'question' => __('When will I get my investment back?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Each MESPIL real estate project will have different hold periods for investment funds. The hold periods are the anticipated time investors will be involved with the specific investment until the underlying asset is sold or the loan on it is paid off. Each investment term is different however typical timeframes are between 12-24 months.'),
                                    ],
                                ],
                            ],
                        ],
                        23 => [
                            'question' => __('What would happen in the case of MESPIL financial difficulty?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Investors who invest with MESPIL are either investing in a project that we manage, or that we co-invest in however these are standalone SPV’s which are not subsidiaries of MESPIL. Each SPV is a sole, separate and legal entity meaning if ever MESPIL was in financial difficulty these SPV’s would remain standalone. Also, in most cases, investors have a first lien pledge over the asset/building.'),
                                    ],
                                ],
                            ],
                        ],
                        24 => [
                            'question' => __('Who are MESPIL’s end buyers?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Our clients are looking at :link, lifestyle, retirement and golden visa reasons. For the :visa market, much interest comes from Asia, India and Brazil.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('real estate in Portugal for investment') . '</a>', 'visa' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('Golden Visa') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        25 => [
                            'question' => __('There will inevitably because of Covid-19 be a slowdown in travel through Europe and Portugal, what impact in sales for your projects do you foresee?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Although Covid-19 impacted the market it also resulted in an uplift in demand from Asia & the Middle East. In addition, purchasers are now completing sales online which is speeding up the closing process. In general, MESPIL believe that the demand for real estate will remain robust since Portugal remains a highly attractive proposition globally due to its :visa, it’s safety and its very high quality of life stats. The Covid-19 outbreak has been well managed by its government and as a result its citizens have showed relatively low exposure.', ['visa' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('Golden Visa program') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        26 => [
                            'question' => __('What additional costs are expected for a delay in sales? After what timeframe will the profit be zero?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL will work with our investors on scenario planning however worst-case situation will be renting some or all of the units. All projects acquired by MESPIL have high rental demand which mitigates investor risk. Lisbon followed by the Algarve have the highest demand for both short and long-term rentals.'),
                                    ],
                                ],
                            ],
                        ],
                        27 => [
                            'question' => __('What would be the worst-case outcome of an unsuccessful investment?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Worse case is a collapse in the Lisbon/Algarve property market and MESPIL cannot sell any of the units. In this situation and as part of our scenario planning, we will provide estimates on minimum rental yields and would propose refinancing the deal and replacing a lender in the transaction.'),
                                    ],
                                ],
                            ],
                        ],
                        28 => [
                            'question' => __('Why doesn’t MESPIL typically get the capital as a loan from a bank and increase profit?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Banks in Portugal are not an efficient and effective option for MESPIL, they are not very agile when it comes to doing short-term project financings for the size we are targeting. Our preference is to work with co-investors/private lenders so as to keep full control and flexibility and also to continue building our MESPIL Investment Club membership.'),
                                    ],
                                ],
                            ],
                        ],
                        29 => [
                            'question' => __('Is there insurance on the real estate assets?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('The day MESPIL take ownership of the asset a fully comprehensive insurance cover will be activated on the property.'),
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'category' => __('INVEST WITH MESPIL INVESTMENT CLUB (MIC)'),
                    'questions' => [
                        30 => [
                            'question' => __('What types of properties are available through MESPIL Investment Club (MIC)?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL offers access to investment opportunities in residential, commercial and holiday letting real estate projects in the Lisbon, and Algarve areas of Portugal.'),
                                    ],
                                ],
                            ],
                        ],
                        31 => [
                            'question' => __('How are MESPIL investments typically structured?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL structure investments on a case by case and we try to match the investors preference. We are flexible but typical structures are as follows:'),
                                    ],
                                ],
                                [
                                    'ul' => [
                                        __('An investor can be a lender to the SPV with a fixed coupon or'),
                                        __('An option that works quite well in Portugal, an investor can lend to the SPV at an interest rate that tracks profits (i.e. the more profits, the higher the coupon) or'),
                                        __('An investor can participate as an equity investor.'),
                                    ],
                                ],
                            ],
                        ],
                        32 => [
                            'question' => __('When I invest equity with MESPIL, what do I own?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL Investors will acquire shares in the SPV that owns the building. If the SPV is funded entirely through equity, then there will be no charge on the building ranking ahead of the equity. If the SPV borrows money, then this lender will hold a first charge over the building / asset.'),
                                    ],
                                ],
                            ],
                        ],
                        33 => [
                            'question' => __('When I invest debt with MESPIL, what do I own?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL Investors typically lend directly to the company that owns the real estate property. If there is no senior bank debt, MESPIL Investors are given a first lien pledge over the asset/building.'),
                                    ],
                                ],
                            ],
                        ],
                        34 => [
                            'question' => __('What if I invested equity and more money was needed for the real estate asset in the future? Am I obligated to invest more as an equity owner?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL have not to date required a capital call from any of its investors. We do detailed scenario analysis along with alternative exit strategies, to ensure that this requirement does not arise.'),
                                    ],
                                ],
                            ],
                        ],
                        35 => [
                            'question' => __('What equity/debt does MESPIL contribute to each investment?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL usually invests in the project by way of equity. MESPIL’s investment will be subordinate to investor debt and will rank pari passu with investor equity.'),
                                    ],
                                ],
                            ],
                        ],
                        36 => [
                            'question' => __('Does MESPIL charge a management fee?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('MESPIL usually charges a management fee for the operation of each project and this allows are investors to be truly passive. This typically includes a profit share dependent on results. This is negotiated project by project and details are included in the investment summary sheet provided. '),
                                    ],
                                ],
                            ],
                        ],
                        37 => [
                            'question' => __('Who makes decisions in MESPIL investor projects?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('For each of our :link we structure an asset owning company and, if required, an operational company as part of the transaction. We believe in active asset management and this position allows MESPIL to add value and proactively do our best to protect investor capital. Decision-making authority differs investment to investment.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('investments in Portugal') . '</a>']),
                                    ],
                                ],
                            ],
                        ],
                        38 => [
                            'question' => __('Have any of your previous project investors participated again in a transaction?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Yes, we have had investors re-invest and each potential project is reviewed and proposed to different investor types depending on the size and type of opportunity presented.'),
                                    ],
                                ],
                            ],
                        ],
                        39 => [
                            'question' => __('What if you fail to collect enough capital for a certain project?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('As part of our project onboarding process, MESPIL line up sufficient commitments from investors before signing the purchase contract.'),
                                    ],
                                ],
                            ],
                        ],
                        40 => [
                            'question' => __('How often is interest paid to investors?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Interest payments differ investment to investment however MESPIL typically distributes interest payments on investments quarterly.'),
                                    ],
                                ],
                            ],
                        ],
                        41 => [
                            'question' => __('What taxes and fees will have to be paid for buying and selling real estate in Portugal within a 12-month period?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('Typically the real estate asset will be purchased through a tax-exempt vehicle to allow IMT / stamp duty to be deferred. We then have a three-year period to sell the property before IMT / stamp duty would become payable.'),
                                    ],
                                ],
                            ],
                        ],
                        42 => [
                            'question' => __('What are the tax implications of investing in real estate investments with MESPIL?'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('By investing in an IMT / Stamp Duty exempt SPV we can avoid these significant transactional taxes. Each SPV is then formulated in a way to be as tax efficient as possible, whilst being cognisant of investors personal circumstances. We use one of the large accountancy firms in Portugal to guide our decision making here.'),
                                        __('For debt investors, interest can typically be paid to investors without deduction of any withholding tax (once they aren’t located in a black listed offshore location).'),
                                        __('For equity investors, profit share will be subject to Portuguese Corporation Tax. However, we can normally structure it so that your return is a combination of interest / profit share and this can make it more tax efficient.'),
                                    ],
                                ],
                                [
                                    'em' => [
                                        __('MESPIL and its affiliated companies do not provide tax, legal or financial advice. This text is for informational purposes only, and all investors should consult with their own tax, legal and financial advisors before engaging in any transaction.'),
                                    ],
                                ],
                            ],
                        ],
                        43 => [
                            'question' => __('Will this be a bankable security e.g. visible in a bank depot in Switzerland'),
                            'answer' => [
                                [
                                    'p' => [
                                        __('No, this is a classic direct investment.'),
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ];

            $view->with('questionsArray', $questionsArray);
        });
    }
}
