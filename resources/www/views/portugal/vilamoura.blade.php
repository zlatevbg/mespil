@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Vilamoura Portugal | Vilamoura Real Estate Investment & Property Guide'))
@section('description', __('Vilamoura is the leading tourist resort in Portugal offering golden beaches, crystal waters, luxury buildings, world-class golf courses and international marina'))

@section('content')
    <div class="container container-md-fluid space-single-top">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-start align-items-center mr-3" href="{{ Helper::route('portugal', 'lisbon') }}">@fas('long-arrow-alt-left', 'mr-3 fa-2x')<span class="text-nowrap">{{ __('Previous location guide') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('Lisbon, Portugal') }}</span></a>
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-end align-items-center ml-3 text-right" href="{{ Helper::route('portugal', 'faro') }}"><span class="text-nowrap">{{ __('Next location guide') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('Faro, Portugal') }}</span>@fas('long-arrow-alt-right', 'ml-3 fa-2x')</a>
        </div>
    </div>
    <div class="container space-single">
        <h1 class="title-border mb-5">{{ __('Vilamoura Real Estate Investment & Property Buying Guide') }}</h1>
        <p class="lead">{!! __('MESPIL’s :link1 cover the most popular destinations of our :link2 and features top locations across Portugal where our end buyers are looking for some of :link3 with guaranteed rental income, modern furniture and professional property management.', ['link1' => '<a class="internal-link" href="' . Helper::route('portugal-real-estate-investment-guide') . '">' . __('Portugal property investment location guides') . '</a>', 'link2' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('real estate investment projects') . '</a>', 'link3' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('the best properties for sale in Portugal') . '</a>']) !!}</p>
        <p>{{ __('The Vilamoura real estate location guide highlights the property market and leisure activities, but also the interesting things that aren’t so widely known.') }}</p>
        <p>{!! __('Vilamoura is one of the largest recreation centres in Europe. The resort town is known for its natural beauty, warm climate, mineral springs and peaceful relaxation. :strong In this article you will learn more about Vilamoura and what are the investment opportunities it offers.', ['strong' => '<strong>' . __('The perfect place for seafood and wine lovers!') . '</strong>']) !!}</p>
        <img loading="eager" width="1320" height="700" src="{{ Helper::autover('/img/{subdomain}/portugal/vilamoura/hero.jpg') }}" class="img-fluid" alt="{{ __('Vilamoura, Aerial view') }}">
        <h2 class="mt-5">{{ __('Why invest in real estate in Vilamoura?') }}</h2>
        <p>{{ __('Vilamoura is one of the leading tourist destinations in Portugal and is on the way of becoming one of the most popular in Europe. Golden beaches and crystal waters, numerous opportunities for sports and entertainment, luxury buildings and the internationally famous port, make it a modern city with extremely high life quality.') }}</p>
        <p>{{ __('The resort is in the heart of Algarve and it is constantly expanding its borders and investors’ interest in it is growing. What are the reasons for this and why it is worth investing in properties in Vilamoura?') }}</p>
        <ul class="list-unstyled mt-5 multicolumn head-section">
            <li>
                <h3>{{ __('Popular tourist destination') }}</h3>
                <p>{{ __('Vilamoura welcomes more than 500,000 tourists a year, with the trend to increase. The resort offers opportunities for relaxation to those who seek peace in luxury and beautiful natural views, as well as to lovers of dynamic nightlife and water activities.') }}</p>
                <p>{{ __('Vilamoura is a modern and developed resort with 6 world-class golf courses, a tidy and comfortable road network and many green small parks. The world-famous port is a starting point for many adventures.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Security for the real estate market') }}</h3>
                <p>{{ __('The real estate market in Portugal is secure, requiring all necessary registrations in the process of purchasing.') }}</p>
                <p>{{ __('The Central European Bank manages inflation, the exchange rate and interest rates, so the financial risks in the country are minimal.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Relieved tax system and ease of bureaucracy') }}</h3>
                <p>{{ __('Portugal has introduced many tax breaks to attract more investors. In this way, it stimulates the development of its economy.') }}</p>
                <p>{{ __('In 2004 inheritance tax has been removed and income tax outside the country is the most minimal. Fiscal benefits for retirees have been introduced. All this contributes to the interest in the Portuguese citizenship and business opportunities for the foreigners.') }}</p>
                <p>{!! __('Another option for foreigners coming to Portugal is to apply for :link. This tax status offers an exemption from income tax generated outside the country during the 10 years of the program.', ['link' => '<a class="internal-link" href="' . Helper::route('nhr-portuguese-tax-residency') . '">' . __('Non-Habitual Residence') . '</a>']) !!}</p>
                <p>{{ __('To help the businesses even more, the government has drastically cut the bureaucracy.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('High return on investment') }}</h3>
                <p>{{ __('Property prices in Vilamoura can range from €1,800 EUR to €3,300 EUR per square meter, depending on how luxurious they are.') }}</p>
                <p>{{ __('The return on investment from rents in Portugal is one of the highest in Europe. According to statistics, gross rental income varies from 5% to 14%.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Real estate investors are expected to benefit from the crisis') }}</h3>
                <p>{{ __('Despite the crisis over the COVID-19 pandemic, the interest of foreign investors has not diminished, actually it is even expected to have a strong economic return after the crisis is resolved.') }}</p>
                <p>{{ __('According to the director of Millennium BCP, real estate investors will be one of the main winners of the crisis. He believes that the reason for rising property prices in recent years is the pursuit of recovery from the previous crisis.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Safe place for a new home') }}</h3>
                <p>{{ __('Due to the pandemic, many families have an interest in becoming citizens of the safest countries in the world. The Portuguese government is working hard for good living conditions. Portuguese citizenship is preferred because of support programs, tax breaks and security.') }}</p>
                <p>{{ __('In May 2020, there were record number of applicants for the acquisition of residence permits through the Golden Visa program. Thanks to this, more than €146 million euros have been invested in the country.') }}</p>
                <p>{!! __('By acquiring a :link, non-EU citizens who invest in a property worth at least €500,000 EUR have the opportunity to reside in Portugal for 5 years and travel to the Schengen countries. After these five years, they may apply for permanent citizenship.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('Portuguese Golden Visa') . '</a>']) !!}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Good time for investment') }}</h3>
                <p>{{ __('From the crisis in 2014, property prices in Algarve rose 14.7%. Despite the increase, properties in Vilamoura are continuing to attract foreign investors.') }}</p>
                <p>{{ __('Trends are showing that the prices are going their rise. Given the values of the euro, this is a good period for investing in real estate.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Quality of life') }}</h3>
                <p>{{ __('Algarve is one of the best destinations for living, investing, retiring and implementing projects. A well-arranged health system, good internet, low costs and safety contribute to the high quality of life.') }}</p>
                <p>{{ __('Here are some of the most beautiful beaches in Europe with more than 300 sunny days a year. Clean air and beautiful nature are one of the priceless riches of this area.') }}</p>
            </li>
        </ul>
        <h4 class="mt-5">{{ __('MESPIL - professional assistance and support in the buying process') }}</h4>
        <p>{{ __('We at MESPIL can be your partner and be with you through the whole process of acquiring a new home in Vilamoura and a Golden Visa with which you can travel freely in Europe.') }}</p>
        <p>{{ __(' MESPIL is a European real estate investment and management company awarded many awards in the Algarve. What distinguishes us is that we are not just a sales agent, but we actively participate in the daily operations of all of our projects, striving to ensure the best customer experience.') }}</p>
        <p>{!! __('Our :team has 25 years of experience in development projects, infrastructure construction, and extensive renovation projects in Europe. Our main goal is to provide affordable and successful investment opportunities for our partners.', ['team' => '<a class="internal-link" href="' . Helper::route('about') . '#team">' . __('team') . '</a>']) !!}</p>
        <p class="bg-secondary text-white my-3 p-5 lead text-center">{{ __('All MESPIL properties for sale are turnkey and have the prospect of a good rental income. We know the Portugal market well and focus on places in the Algarve like Vilamoura that have many advantages and wonderful living and business conditions.') }}</p>
        <h4 class="mt-5">{{ __('Investing in Vilamoura properties that need restoration') }}</h4>
        <p>{{ __('One of the investment opportunities eligible for the Golden Visa is the acquisition of real estate at least 30 years old or located in an urban rehabilitation area. The requirement for this option is for the investment to be at least €350,000 EUR.') }}</p>
        <p>{{ __('We at MESPIL guarantee our quality of work to achieve your dream home or profitable investment.') }}</p>
        <p>{{ __('We offer professional consultations and assistance in the procedures for preparing the necessary documentation. We will be by your side at every step to make sure you invest wisely for your better future. We will answer all your questions and help you make the right decisions.') }}</p>
    </div>

    @if ($count)
        <div class="container-fluid space-single head-section">
            <div class="container">
                <h4 class="mt-5">{{ __('We present you project Pine Hills Vilamoura, Portugal') }}</h4>
                <p class="lead font-weight-normal">{!! __('Pine Hills Vilamoura is a fully managed luxury complex in the heart of the golden triangle of Algarve and has won numerous awards such as :strong1, :strong2, :strong3 and :strong4. Contact us to find out why the apartments are almost sold out and see for yourself the tranquillity and quality of life that awaits you. :strong5.', ['strong1' => '<strong class="font-weight-bold">' . __('Best Apartment Portugal') . '</strong>', 'strong2' => '<strong class="font-weight-bold">' . __('Best Residential Development Portugal') . '</strong>', 'strong3' => '<strong class="font-weight-bold">' . __('Best Mixed-use Development Portugal') . '</strong>', 'strong4' => '<strong class="font-weight-bold">' . __('Best Leisure Interior Europe') . '</strong>', 'strong5' => '<strong class="font-weight-bold">' . __('Pine Hills is truly a paradise - a sanctuary of Algarve’s tranquillity') . '</strong>']) !!}</p>
                <p>{{ __('This luxury complex is 2.5 km from the Marina Vilamoura and 3.1 km from the beach Falésia - Rocha Baixinha. The Roman ruins Sero da Villa are 2.2 km away, and Faro Airport is 14 km from the property.') }}</p>
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
                                        <li data-target="#carousel-exterior" data-slide-to="5"></li>
                                    </ol>
                                    <div class="carousel-inner photoswipe-wrapper" data-photoswipe-gid="exterior">
                                        <div class="carousel-item active">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/exterior/aerial-1.jpg') }}" data-photoswipe-pid="aerial-1" data-photoswipe-size="2560x1705" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/exterior/thumbnails/aerial-1.jpg') }}" class="card-img img-fluid" alt="{{ __('Pine Hills Vilamoura aerial view at sunset') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/exterior/aerial-2.jpg') }}" data-photoswipe-pid="aerial-2" data-photoswipe-size="2560x1705" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/exterior/thumbnails/aerial-2.jpg') }}" class="card-img img-fluid" alt="{{ __('Pine Hills Vilamoura aerial view') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/exterior/pool.jpg') }}" data-photoswipe-pid="pool" data-photoswipe-size="2560x1920" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/exterior/thumbnails/pool.jpg') }}" class="card-img img-fluid" alt="{{ __('Pine Hills Vilamoura pool view') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/exterior/terrace.jpg') }}" data-photoswipe-pid="terrace" data-photoswipe-size="2560x1709" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/exterior/thumbnails/terrace.jpg') }}" class="card-img img-fluid" alt="{{ __('Pine Hills Vilamoura terrace view') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/exterior/gardens.jpg') }}" data-photoswipe-pid="gardens" data-photoswipe-size="2560x1709" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/exterior/thumbnails/gardens.jpg') }}" class="card-img img-fluid" alt="{{ __('Pine Hills Vilamoura gardens view') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/exterior/exterior.jpg') }}" data-photoswipe-pid="exterior" data-photoswipe-size="2560x1709" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/exterior/thumbnails/exterior.jpg') }}" class="card-img img-fluid" alt="{{ __('Pine Hills Vilamoura exterior view') }}"></a>
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
                                    <p class="card-text">{{ __('Pine Hills Vilamoura has an outdoor pool and impressive maintained green areas. It is a combination of calm, luxury, comfort and style.') }}</p>
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
                                    </ol>
                                    <div class="carousel-inner photoswipe-wrapper" data-photoswipe-gid="interior">
                                        <div class="carousel-item active">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/apartments/three-bed-living-room.jpg') }}" data-photoswipe-pid="three-bed-living-room" data-photoswipe-size="2560x1709" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/apartments/thumbnails/three-bed-living-room.jpg') }}" class="card-img img-fluid" alt="{{ __('Living Room | Three-bedroom penthouse') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/apartments/three-bed-master-bedroom.jpg') }}" data-photoswipe-pid="three-bed-master-bedroom" data-photoswipe-size="2560x1709" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/apartments/thumbnails/three-bed-master-bedroom.jpg') }}" class="card-img img-fluid" alt="{{ __('Master Bedroom | Three-bedroom penthouse') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/apartments/three-bed-twin-bedroom.jpg') }}" data-photoswipe-pid="three-bed-twin-bedroom" data-photoswipe-size="2560x1920" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/apartments/thumbnails/three-bed-twin-bedroom.jpg') }}" class="card-img img-fluid" alt="{{ __('Twin Bedroom | Three-bedroom penthouse') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/apartments/three-bed-bathroom.jpg') }}" data-photoswipe-pid="three-bed-bathroom" data-photoswipe-size="2560x1819" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/apartments/thumbnails/three-bed-bathroom.jpg') }}" class="card-img img-fluid" alt="{{ __('Bathroom | Three-bedroom penthouse') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/apartments/three-bed-kitchen.jpg') }}" data-photoswipe-pid="three-bed-kitchen" data-photoswipe-size="2560x1709" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/apartments/thumbnails/three-bed-kitchen.jpg') }}" class="card-img img-fluid" alt="{{ __('Kitchen | Three-bedroom penthouse') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/apartments/three-bed-terrace.jpg') }}" data-photoswipe-pid="three-bed-terrace" data-photoswipe-size="2560x1440" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/pine-hills-vilamoura-portugal/apartments/thumbnails/three-bed-terrace.jpg') }}" class="card-img img-fluid" alt="{{ __('Terrace | Three-bedroom penthouse') }}"></a>
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
                                    <p class="card-text">{{ __('Deluxe penthouse with three bedrooms with private lift from the garage to the apartment living area, and then again to the roof terrace.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mb-5"><a class="btn btn-lg btn-primary mr-2" href="{{ Helper::route('property-for-sale', 'pine-hills-vilamoura-portugal') }}">{{ __('Click here to visit the Pine Hills Vilamoura sales page') }}</a></p>
                <p>{{ __('Don’t miss the moment for this good investment. We at MESPIL know the market in Portugal well and specialize in finding the best investment solutions for our clients. The properties we offer show excellent returns and Pine Hills is another example of our success.') }}</p>
                <p>{{ __('In addition to the opportunity to invest in properties, MESPIL also offers lease agreements after the completion of the purchase process. Our team of specialists will manage the full rental process for you, so there is no need to do anything while your property generates income and at the same time- it is managed professionally.') }}</p>
            </div>
        </div>
    @endif

    <div class="container space-single">
        <h2 class="title-border mb-5 mt-5">{{ __('Why buy property in Vilamoura?') }}</h2>
        <p>{{ __('Considered “the heart” of Algarve, Vilamoura is known for its natural beauty and sunny sandy holidays. Tourism in the area thrives on luxury mineral springs, exquisite golf courses and natural food products. Vilamoura is a place suitable for peaceful relaxation and seclusion from large and fast-paced cities.') }}</p>
        <p>{!! __('Here are some of the best beaches in Algarve, and also the lively :faro is only a few kilometers away. In fact, some of the best sailing in Portugal takes place on the nearest beaches to the city. This is a favorite place for seafood lovers and wine lovers. Watch the boats dock while enjoying some fresh tuna in Vilamoura marina, or catch a sunset by the beach while having tapas on the promenade.', ['faro' => '<a class="internal-link" href="' . Helper::route('portugal', 'faro') . '">' . __('Faro') . '</a>']) !!}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/vilamoura/view-of-praia-da-rocha-beach-near-vilamoura.jpg') }}" class="img-fluid mb-3" alt="{{ __('View of Praia Da Rocha beach near Vilamoura') }}">
        <h3 class="mt-5">{{ __('Location') }}</h3>
        <p>{{ __('Vilamoura is a small town located on the southern coast of Portugal. In particular - located in the middle of the coast of Algarve and only 15 km from the main airport in Faro. Its accessibility is one of the reasons it thrives and becomes one of the largest beach resorts in Europe. It is about 20 square kilometers and offers a wide variety of sports activities, entertainment and attractions. The road network is conveniently located, and the numerous small gardens and 6 golf courses contribute to attracting more and more tourists.') }}</p>
        <p>{!! __('Along with :link1 and :link2, the stunning marina town of Vilamoura, is one of the three corners of the Algarve’s coveted :link3. The area is famed for its abundance of tournament-quality golf courses, luxurious accommodation options, designer retail, quality local restaurants, and of course the beautiful climate and myriad of pristine halcyon beaches on which to enjoy this.', ['link1' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.quintadolago.com/en/">' . __('Quinta Do Lago') . '</a>', 'link2' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.valedolobo.com/en/">' . __('Vale Do Lobo') . '</a>', 'link3' => '<a rel="nofollow" target="_blank" class="external-link" href="https://en.wikipedia.org/wiki/Golden_Triangle_(Algarve)">' . __('Golden Triangle') . '</a>']) !!}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/vilamoura/vilamoura-aerial-view.jpg') }}" class="img-fluid mb-3" alt="{{ __('Vilamoura, aerial view') }}">
        <h3 class="mt-5">{{ __('Climate') }}</h3>
        <p>{{ __('The climate in Vilamoura is warm and moderate.') }}</p>
        <p>{{ __('The average annual temperature is 17.2° C. The hottest month of the year is August with an average temperature of 23.4° C, and the coldest month is January with an average temperature of 11.8° C.') }}</p>
        <p>{{ __('July is the driest month of the year, with the amount of precipitation being nearly 1 mm and January being the month with the most rain with an average of 87 mm of precipitation.') }}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/vilamoura/view-of-praia-do-amado-beach-near-vilamoura.jpg') }}" class="img-fluid mb-3" alt="{{ __('View of Praia do Amado beach near Vilamoura') }}">
        <h3 class="mt-5">{{ __('Marina Vilamoura') }}</h3>
        <p>{!! __('It is the :link, which was officially opened in 1974. More than 1,000 vessels can gather in its waters. There are many large hotels and luxury holiday villages around the marina. In addition, many restaurants, cafes and lively bars and a large casino can be visited on your holiday. The port offers renting fishing boats, jets and more. Not far away, there are sports clubs, a shooting range and nightclubs. The local tourism is very well developed, and various resorts with three to five stars serve the arriving tourists. Due to the fact that the resort is private, it is very well maintained.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="http://www.marinadevilamoura.com/en/">' . __('largest marina in Portugal') . '</a>']) !!}</p>
        <p>{{ __('For the entertainment of the locals and tourists in the city there is a wide variety of activities, excursions and boat trips, departing from the Marina with coastal trips to Lagos. Dolphin observation trips can also be included. There are also fishing opportunities for large species like large marlin. Various sports such as parasailing, water skiing, diving and jet skiing are also practiced in the area.') }}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/vilamoura/marina-vilamoura.jpg') }}" class="img-fluid mb-3" alt="{{ __('Marina Vilamoura') }}">
        <h3 class="mt-5">{{ __('Coastline & Beaches') }}</h3>
        <p>{{ __('Vilamoura is popular with its favorable climate and beautiful beaches, which fans of sunbathing and beach sports can enjoy.') }}</p>
        <p>{{ __('The most affordable beach is Praia da Marina. It has all kinds of entertainment facilities. It is located east of Marina and reaches to Quarteira. Tourists can take advantage of the large luxury hotels along the coastline.') }}</p>
        <p>{{ __('Heading west of the Marina is the other large beach Praia da Falésia, a six kilometer stretch of golden sand, all the way from Vilamoura to Albufeira, and is dotted with beach bars and restaurants. It was awarded the Blue Flag for purity and water quality. Its name which translates literally as ‘Beach of Cliffs’ comes from the impressive red and orange coloured rocks that stop the wild north winds. Praia da Falésia is one of the most popular beaches because of its safety. It’s long enough never to be overly crowded and has a wealth of activities available such as paragliding, surfing, jet-skiing or even just lounging on the pristine sand. Low tides allow rowing quite far from the shore before the water becomes deep.') }}</p>
        <p>{!! __('The beach made it to the list of the Top 25 Beaches in the World by TripAdvisor’s 2018 Traveler’s Choice. It is ranked :11th and it is the only beach from Portugal that has entered the list. In 2018 Praia da Falésia was also considered the number one beach in Portugal, and the third best beach in Europe.', ['11th' => __('11th')]) !!}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/vilamoura/falesia-sandy-beach-and-cliffs-at-sunset.jpg') }}" class="img-fluid mb-3" alt="{{ __('Falésia sandy beach and cliffs at sunset. Bright seascape near Vilamoura.') }}">
        <h3 class="mt-5">{{ __('Golf') }}</h3>
        <p>{!! __('Whether you’re an enthusiast or not, you’ll notice the abundance of world-class golf courses signposted in the surrounds of Vilamoura, so the avid golfer can have access to multiple greens like the famous :link1 or the :link2 which will challenge and delight even the most experienced of golfers. :link3, Vale De Lobo and Quinta Do Lago are within easy reach by car, and offer spectacular quality courses that the area has become famous for.', ['link1' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.pestanagolf.com/en/golf/vila-sol/">' . __('Pestana Vila Sol 27-hole championship golf course') . '</a>', 'link2' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.dompedrogolf.com/en/">' . __('Dom Pedro golf') . '</a>', 'link3' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.pinecliffs.com/en/golf-sports/golf/">' . __('Pine Cliffs') . '</a>']) !!}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/vilamoura/vilamoura-golf.jpg') }}" class="img-fluid mb-3" alt="{{ __('Vilamoura Golf') }}">
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
