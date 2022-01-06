@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Lisbon, Portugal | Lisbon Real Estate Investment & Property Guide'))
@section('description', __('The Lisbon real estate location guide highlights the property market and leisure activities, but also the interesting things that aren’t so widely known.'))

@section('content')
    <div class="container container-md-fluid space-single-top">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-start align-items-center mr-3" href="{{ Helper::route('portugal', 'faro') }}">@fas('long-arrow-alt-left', 'mr-3 fa-2x')<span class="text-nowrap">{{ __('Previous location guide') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('Faro, Portugal') }}</span></a>
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-end align-items-center ml-3 text-right" href="{{ Helper::route('portugal', 'vilamoura') }}"><span class="text-nowrap">{{ __('Next location guide') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('Vilamoura, Portugal') }}</span>@fas('long-arrow-alt-right', 'ml-3 fa-2x')</a>
        </div>
    </div>
    <div class="container space-single">
        <h1 class="title-border mb-5">{{ __('Lisbon Real Estate Investment & Property Buying Guide') }}</h1>
        <p class="lead">{!! __('MESPIL’s :link1 cover the most popular destinations of our :link2 and features top locations across Portugal where our end buyers are looking for some of :link3 with guaranteed rental income, modern furniture and professional property management.', ['link1' => '<a class="internal-link" href="' . Helper::route('portugal-real-estate-investment-guide') . '">' . __('Portugal property investment location guides') . '</a>', 'link2' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('real estate investment projects') . '</a>', 'link3' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('the best properties for sale in Portugal') . '</a>']) !!}</p>
        <p>{{ __('The Lisbon real estate location guide highlights the property market and leisure activities, but also the interesting things that aren’t so widely known.') }}</p>
        <p>{!! __('Lisbon, the capital of Portugal, is one of the oldest cities in Europe with impressive preserved architecture, warm climate with many sunny days and fascinating locations to visit. :strong In this article you will learn more about Lisbon and what are the investment opportunities it offers.', ['strong' => '<strong>' . __('A truly desirable location for property investors!') . '</strong>']) !!}</p>
        <img loading="eager" width="1320" height="700" src="{{ Helper::autover('/img/{subdomain}/portugal/lisbon/hero.jpg') }}" class="img-fluid" alt="{{ __('Lisbon, Aerial view') }}">
        <h2 class="mt-5">{{ __('Why invest in real estate in Lisbon?') }}</h2>
        <p>{{ __('Impressive with its architecture, centuries-old history and preserved traditions, the city attracts countless tourists and more and more people prefer it as a place to live and invest in property. And this is no accident. Lisbon is known for its warmth and coziness, the romantic atmosphere and hospitality of the Portuguese.') }}</p>
        <p>{{ __('Lisbon is preferred when deciding on a new home by many families, and trends show that real estate demands in the capital continue to grow. Many travel agencies predict that Portugal will be the place, to where people will travel the most in the nearby future, which is a wonderful prerequisite for investment.') }}</p>
        <ul class="list-unstyled mt-5 multicolumn head-section">
            <li>
                <h3>{{ __('Economic growth') }}</h3>
                <p>{{ __('Portugal’s economy has grown steadily, especially over the last three years, with the real estate market also developing.') }}</p>
                <p>{{ __('The country stimulates investors through tax breaks, cutting bureucracy and more and more real estate investment programs. In this way, Portugal managed to get out of the long crisis and stabilize its economy.') }}</p>
                <p>{{ __('Lisbon has some of the lowest unemployment rates in Europe. Many business centers are expected to open in the coming years and create hundreds of thousands of additional jobs.') }}</p>
                <p>{{ __('Until 2023 it is also expected new airport to be opened t in Montijo, which will increase the city’s capacity by 43 million passengers.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Continuous development of the capital') }}</h3>
                <p>{{ __('Thanks to the many investments in various businesses and properties for restoration, the appearance of the capital is constantly changing. In the last few years, great efforts have been made to renovate the old city center. The trends are for the development of tourism and the continuation of the policy for investing in real estate in order to restore and rent.') }}</p>
                <p>{{ __('The capital is projected to continue to develop, with plans to invest in public and private business sectors. It is also planned to improve the city’s infrastructure. All this will fuel the economy and the real estate market and will lead to an increase in rental income.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Tax relief') }}</h3>
                <p>{{ __('Portugal is pursuing a stimulating policy of attracting investors. In 2004 inheritance tax has been removed, fiscal benefits have been introduced for pensioners, and profits acquired outside Portugal are not taxed. This is also the reason why qualified professionals are coming to the country, looking for opportunities for quality life and profitable investments.') }}</p>
                <p>{!! __('One of Portugal’s most attractive programs is :link. Through NHR, the country’s fiscal residents can benefit from tax breaks for income that has not been acquired in the country and from a flat tax of between 20% and 28% on income generated in the country for 10 years.', ['link' => '<a class="internal-link" href="' . Helper::route('nhr-portuguese-tax-residency') . '">' . __('Non-Habitual Residence (NHR)') . '</a>']) !!}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Portugal Golden Visa') }}</h3>
                <p>{!! __('The reasons for investing in real estate in Lisbon are numerous. More and more families are choosing to take advantage of :link by investing in real estate and obtaining a permanent residence permit. Lisbon is one of the cities in Portugal that provides opportunities to acquire a Golden Visa when buying real estate.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('Portugal’s Golden Visa program') . '</a>']) !!}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Business opportunities') }}</h3>
                <p>{{ __('Businesses are growing thanks to good conditions and programs that stimulate investors.') }}</p>
                <p>{{ __('The Portuguese market is known for its pursuit of development and is open to technological innovation, which is why a number of international companies are implementing their projects there.') }}</p>
                <p>{{ __('The European Union has recognized Portugal as one of the countries with the simplest bureaucracy. This eased and supported business development. It is possible to set up a company in less than an hour. The OECD has put Portugal in the top 10 countries with the lowest expenditures and taxes.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Property prices are affordable') }}</h3>
                <p>{!! __('Although property prices continue to rise, investor interest has not decreased. Compared to other major European capitals, Lisbon offers much more affordable investment properties. The average price per apartment in the most attractive central part of the city is €2,500 EUR per square meter for a standard home of 120 square meters, and these are some of the most affordable urban centrally located properties in Europe according to the :link.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.globalpropertyguide.com/Europe/Portugal">' . __('Global Property Guide') . '</a>']) !!}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('High return on rents') }}</h3>
                <p>{{ __('Along with rising property prices, rental prices are also rising. The yield on apartment rents varies between 4.5% and 6.7%, as smaller homes are getting higher returns.') }}</p>
                <p>{{ __('Tourists’ interest in renting housing in central Lisbon is great. The rents of the apartments in this part of town are between €12 EUR and €16 EUR per square meter per month, which means that an apartment of 120 square meters can be rented for about €1,578 EUR a month.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Quality of life') }}</h3>
                <p>{{ __('Lisbon is one of the most beautiful European capitals, offering a high quality of life. Infrastructure is well settled, costs are relatively low, the health system is among the best in Europe, and the climate is favorable all year round. The capital has a beautiful coastline with golden beaches and many sunny days. All this makes Lisbon a paradise for living.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Safety') }}</h3>
                <p>{{ __('Portugal is the third safest country in the world in 2020 according to the Global Peace Index. It is ranked ahead even by countries such as France and Spain. And only Iceland and New Zealand are considered safer.') }}</p>
            </li>
        </ul>
        <h4 class="mt-5">{{ __('MESPIL - professional assistance and support in the buying process') }}</h4>
        <p>{{ __('We at MESPIL can be your partner and be with you through the whole process of acquiring a new home in Lisbon and a Golden Visa with which you can travel freely in Europe.') }}</p>
        <p>{{ __('MESPIL is a European real estate investment and management company awarded many awards in the Algarve. What distinguishes us is that we are not just a sales agent, but we actively participate in the daily operations of all of our projects, striving to ensure the best customer experience.') }}</p>
        <p>{!! __('Our :team has 25 years of experience in development projects, infrastructure construction, and extensive renovation projects in Europe. Our main goal is to provide affordable and successful investment opportunities for our partners.', ['team' => '<a class="internal-link" href="' . Helper::route('about') . '#team">' . __('team') . '</a>']) !!}</p>
        <p class="bg-secondary text-white my-3 p-5 lead text-center">{{ __('All MESPIL properties for sale are turnkey and have the prospect of a good rental income. We know the Portugal market well and focus on places in the Algarve and Lisbon that have many advantages and wonderful living and business conditions.') }}</p>
        <h4 class="mt-5">{{ __('Investing in Lisbon properties that need restoration') }}</h4>
        <p>{{ __('One of the investment opportunities eligible for the Golden Visa is the acquisition of real estate at least 30 years old or located in an urban rehabilitation area. The requirement for this option is for the investment to be at least €350,000 EUR.') }}</p>
        <p>{{ __('We at MESPIL guarantee our quality of work to achieve your dream home or profitable investment.') }}</p>
        <p>{{ __('We offer professional consultations and assistance in the procedures for preparing the necessary documentation. We will be by your side at every step to make sure you invest wisely for your better future. We will answer all your questions and help you make the right decisions.') }}</p>
    </div>

    @if ($count)
        <div class="container-fluid space-single head-section">
            <div class="container">
                <h4 class="mt-5">{{ __('We present you project No.9 Lisbon, Portugal') }}</h4>
                <p class="lead font-weight-normal">{{ __('This project is located in the center of Lisbon, close to all the necessary shops and stops, close to numerous tourist attractions, restaurants and cafes. The building consists of 17 luxury apartments and 5 retail spaces located in a first class residential neighborhood. They are qualified for the conditions for acquiring a Golden Visa.') }}</p>
                <div class="space-single">
                    <div class="row row-cols-1 row-cols-md-2 mb-n5 justify-content-md-center">
                        <div class="col mb-5">
                            <div class="card card-apartments h-100 text-center">
                                <div id="carousel-exterior" class="carousel slide" data-interval="false">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-exterior" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-exterior" data-slide-to="1"></li>
                                        <li data-target="#carousel-exterior" data-slide-to="2"></li>
                                        <li data-target="#carousel-exterior" data-slide-to="3"></li>
                                        <li data-target="#carousel-exterior" data-slide-to="4"></li>
                                    </ol>
                                    <div class="carousel-inner photoswipe-wrapper" data-photoswipe-gid="exterior">
                                        <div class="carousel-item active">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/exterior/facade-1.jpg') }}" data-photoswipe-pid="facade-1" data-photoswipe-size="2500x2083" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/exterior/thumbnails/facade-1.jpg') }}" class="card-img img-fluid" alt="{{ __('3D Facade') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/exterior/facade-2.jpg') }}" data-photoswipe-pid="facade-2" data-photoswipe-size="2500x2083" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/exterior/thumbnails/facade-2.jpg') }}" class="card-img img-fluid" alt="{{ __('3D Facade') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/exterior/coffee-shop.jpg') }}" data-photoswipe-pid="coffee-shop" data-photoswipe-size="2083x2500" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/exterior/thumbnails/coffee-shop.jpg') }}" class="card-img img-fluid" alt="{{ __('Coffee Shop') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/exterior/corridor.jpg') }}" data-photoswipe-pid="corridor" data-photoswipe-size="1888x2000" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/exterior/thumbnails/corridor.jpg') }}" class="card-img img-fluid" alt="{{ __('Corridor') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/exterior/staircase.jpg') }}" data-photoswipe-pid="staircase" data-photoswipe-size="2360x2500" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/exterior/thumbnails/staircase.jpg') }}" class="card-img img-fluid" alt="{{ __('Staircase') }}"></a>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel-exterior" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">{{ __('Previous') }}</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-exterior" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">{{ __('Next') }}</span>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{  __('This is a project for urban renewal of Portuguese architecture, including cozy apartments with large terraces and panoramic views of the sunny capital of Portugal. On the ground floor we also have 5 commercial units.') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card card-apartments h-100 text-center">
                                <div id="carousel-interior" class="carousel slide" data-interval="false">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-interior" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-interior" data-slide-to="1"></li>
                                        <li data-target="#carousel-interior" data-slide-to="2"></li>
                                        <li data-target="#carousel-interior" data-slide-to="3"></li>
                                        <li data-target="#carousel-interior" data-slide-to="4"></li>
                                        <li data-target="#carousel-interior" data-slide-to="5"></li>
                                        <li data-target="#carousel-interior" data-slide-to="6"></li>
                                    </ol>
                                    <div class="carousel-inner photoswipe-wrapper" data-photoswipe-gid="interior">
                                        <div class="carousel-item active">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/living-room.jpg') }}" data-photoswipe-pid="living-room" data-photoswipe-size="2560x1920" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/thumbnails/living-room.jpg') }}" class="card-img img-fluid" alt="{{ __('Living Room') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/master-bedroom.jpg') }}" data-photoswipe-pid="master-bedroom" data-photoswipe-size="2560x1551" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/thumbnails/master-bedroom.jpg') }}" class="card-img img-fluid" alt="{{ __('Master Bedroom') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/bathroom1.jpg') }}" data-photoswipe-pid="bathroom1" data-photoswipe-size="2560x2560" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/thumbnails/bathroom1.jpg') }}" class="card-img img-fluid" alt="{{ __('Bathroom') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/bathroom2.jpg') }}" data-photoswipe-pid="bathroom2" data-photoswipe-size="2560x3413" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/thumbnails/bathroom2.jpg') }}" class="card-img img-fluid" alt="{{ __('Bathroom') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/kitchen.jpg') }}" data-photoswipe-pid="kitchen" data-photoswipe-size="1680x1400" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/thumbnails/kitchen.jpg') }}" class="card-img img-fluid" alt="{{ __('Kitchen') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/dining-room.jpg') }}" data-photoswipe-pid="dining-room" data-photoswipe-size="2560x3200" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/thumbnails/dining-room.jpg') }}" class="card-img img-fluid" alt="{{ __('Dining Room') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/terrace.jpg') }}" data-photoswipe-pid="terrace" data-photoswipe-size="2100x1500" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-lisbon-portugal/apartments/thumbnails/terrace.jpg') }}" class="card-img img-fluid" alt="{{ __('Terrace | Three-bedroom penthouse') }}"></a>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel-interior" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">{{ __('Previous') }}</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-interior" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">{{ __('Next') }}</span>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ __('You can choose from beautifully designed one-bedroom apartments, spacious and elegant two-bedroom apartments or a three-bedroom Deluxe penthouse with a private roof terrace and elevator. The apartments are large, bright and ethereal.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mb-5"><a class="btn btn-lg btn-primary mr-2" href="{{ Helper::route('property-for-sale', 'no-9-lisbon-portugal') }}">{{ __('Click here to visit the No.9 Lisbon sales page') }}</a></p>
                <p>{{ __('The No.9 Lisbon project includes properties suitable for both buyers looking for a home in an exciting European city and real estate investors looking for investment opportunities to increase capital and guaranteed rental income.') }}</p>
                <p>{{ __('Don’t miss this opportunity! We at MESPIL will make sure you make the right decisions and choose the right investment for you. We always help our partners understand how the proposal can meet their investment goals.') }}</p>
            </div>
        </div>
    @endif

    <div class="container space-single">
        <h2 class="title-border mb-5 mt-5">{{ __('Why buy property in Lisbon?') }}</h2>
        <p>{{ __('Lisbon is the sunny capital of Portugal and the country’s main political, economic and cultural center. It is one of the oldest cities in Europe and is the second oldest European capital since Athens. Lisbon combines the rich heritage of the past with modernism and the pursuit of constant progress. This is a tourist destination that offers a colorful and interesting story, a dynamic and lively nightlife, a mild and pleasant climate.') }}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/lisbon/commerce-square-lisbon.jpg') }}" class="img-fluid mb-3" alt="{{ __('Commerce Square (Praça do Comércio) is Lisbon’s monumental riverside square') }}">
        <p>{!! __('Lisbon is recognized as a global city because of its importance in finance, trade, the media, entertainment, the arts, international trade, education and tourism. It is one of the main economic centers on the continent, with a growing financial sector and one of the largest container ports on the European Atlantic coast. The city is the :9th most visited city in Southern Europe, after Istanbul, Rome, Barcelona, Milan, Venice, Madrid and Florence.', ['9th' => __('9th')]) !!}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/lisbon/lisbon-pink-street.jpg') }}" class="img-fluid mb-3" alt="{{ __('Lisbon Pink Street (Rua Nova do Carvalho) is among the most beautiful in Europe') }}">
        <p>{{ __('Driven by a network of narrow streets, small squares, old buildings and countless churches, Lisbon spreads over seven hills, reminiscent of Rome. Despite the ancient and romantic atmosphere, it is one of the most charming, modern and lively cities in Europe, intertwined with past and present, tranquility and dynamics in a unique and magical way.') }}</p>
        <p>{{ __('The history of the Portuguese capital is as dynamic and intriguing as the city itself. Finns, Greeks, Romans and Moors have influenced its development over the centuries.') }}</p>
        <h3 class="mt-5">{{ __('Location') }}</h3>
        <p>{{ __('Lisbon is located in western Portugal, where the Tagus River flows into the Atlantic Ocean. It has several separate areas, including Amadora, Keluz (Sintra), Odivelas, Lures, Almada, Barreiro. In the western part of this magical city is located one of the largest city parks in Europe - Monsanto Forest Park. It is a protected nature park and is the largest green zone in Lisbon.') }}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/lisbon/tagus-river-lisbon.jpg') }}" class="img-fluid mb-3" alt="{{ __('Tagus river Lisbon is the longest river in the Iberian Peninsula') }}">
        <h3 class="mt-5">{{ __('Climate') }}</h3>
        <p>{{ __('Lisbon has a Mediterranean climate with mild, wet winters and warm to hot, dry summers. The average annual temperature in the city is 17.4° C. This is one of the capitals with the warmest winter, and snowfall is extremely rare.') }}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/lisbon/lisbon-aerial-view.jpg') }}" class="img-fluid mb-3" alt="{{ __('Lisbon Aerial view') }}">
        <h3 class="mt-5">{{ __('Economics') }}</h3>
        <p>{!! __('The region of the capital is the richest in Portugal and produces 45% of the country’s gross domestic product. The area around the Tagus River is highly industrialized. One of the largest technological events in the world :link is held in the city.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://websummit.com/">' . __('Web Summit') . '</a>']) !!}</p>
        <p>{{ __('The seaport is the most important commercial port on the Iberian Peninsula. Being the capital, it is constantly developing as an important financial and technological center. It has the largest and most successful sector for media communication.') }}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/lisbon/the-marina-of-doca-de-alcantara-in-lisbon.jpg') }}" class="img-fluid mb-3" alt="{{ __('The marina of Doca de Alcantara in Lisbon') }}">
        <p>{{ __('The industry is deploying in growing oil sectors, and refineries are located right in Tagus, including textile mills, shipyards and fishing.') }}</p>
        <p>{{ __('Tourism is one of the main units developing the city, welcoming an average of 4.5 million tourists a year. In 2018 Lisbon was chosen as the "Leading City Destination in the World and a leading destination for urban vacation in the world".') }}</p>
        <h3 class="mt-5">{{ __('Transport') }}</h3>
        <p>{{ __('The metro is the oldest and largest city network in Portugal, 44.2 km long. This is the fastest way to get around the city, and can be combined with other types of transport. From the airport to the center the travel is about 25 minutes.') }}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/lisbon/lisbon-tram.jpg') }}" class="img-fluid mb-3" alt="{{ __('Lisbon Tram 28') }}">
        <p>{{ __('Traveling by tram is one of the main ways to move around Lisbon. The tram system includes both modern and small yellow trams with a design from the XIX century, which are part of the tourist attractions.') }}</p>
        <p>{{ __('In addition, Lisbon has trains, bus lines, and extensive highways, which reach to the city’s suburbs.') }}</p>
        <h3 class="mt-5">{{ __('Airport') }}</h3>
        <p>{!! __(':link is positioned within the city limits - 7km northeast of the center. It is the main international connection with other countries and is the 20<sup>th</sup> largest airport in Europe.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.aeroportolisboa.pt/en/lis/home">' . __('Umberto Delgado Airport, Lisbon') . '</a>']) !!}</p>
        <p>{{ __('You can catch the metro to the airport, which runs directly to Lisbon. Aerobus shuttle regularly awaits arrivals outside the terminal and transports them to the city center, stopping at many of the larger hotels along the way.') }}</p>
        <p>{{ __('The buses of the municipal bus company Carris move daily between the airport and the city center. Taxis, meanwhile, are numerous and quite cheap. They can be found outside the arrival terminal.') }}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/lisbon/eduardo-vii-park-lisbon.jpg') }}" class="img-fluid mb-3" alt="{{ __('Eduardo VII Park, Lisbon') }}">
    </div>
@endsection

@push('styles')
    <link href="{{ Helper::autover('/css/{subdomain}/vendor/photoswipe.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script>
        loadjs(
            [
                '{{ Helper::autover('/js/{subdomain}/vendor/photoswipe.js') }}',
                '{{ Helper::autover('/js/{subdomain}/photoswipe.js') }}',
            ],
            {
                success: function() {
                    photoswipe.setup('.photoswipe-wrapper')
                },
                async: false,
            }
        );
    </script>
@endpush
