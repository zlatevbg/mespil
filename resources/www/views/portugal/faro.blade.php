@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Faro, Portugal | Faro Real Estate Investment & Property Buying Guide'))
@section('description', __('Faro is a wonderful paradise on earth that is worth investing in. The affordable property prices and the simplified tax system attract major foreign investors.'))

@section('content')
    <div class="container container-md-fluid space-single-top">
        <div class="d-flex flex-wrap justify-content-center align-items-center">
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-start align-items-center mr-3" href="{{ Helper::route('portugal', 'vilamoura') }}">@fas('long-arrow-alt-left', 'mr-3 fa-2x')<span class="text-nowrap">{{ __('Previous location guide') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('Vilamoura, Portugal') }}</span></a>
            <a class="prev-next-font internal-link d-flex flex-fill justify-content-end align-items-center ml-3 text-right" href="{{ Helper::route('portugal', 'lisbon') }}"><span class="text-nowrap">{{ __('Next location guide') }}</span><span class="text-nowrap prev-next-hidden">: {{ __('Lisbon, Portugal') }}</span>@fas('long-arrow-alt-right', 'ml-3 fa-2x')</a>
        </div>
    </div>
    <div class="container space-single">
        <h1 class="title-border mb-5">{{ __('Faro Real Estate Investment & Property Buying Guide') }}</h1>
        <p class="lead">{!! __('MESPIL’s :link1 cover the most popular destinations of our :link2 and features top locations across Portugal where our end buyers are looking for some of :link3 with guaranteed rental income, modern furniture and professional property management.', ['link1' => '<a class="internal-link" href="' . Helper::route('portugal-real-estate-investment-guide') . '">' . __('Portugal property investment location guides') . '</a>', 'link2' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('real estate investment projects') . '</a>', 'link3' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('the best properties for sale in Portugal') . '</a>']) !!}</p>
        <p>{{ __('The Faro real estate location guide highlights the property market and leisure activities, but also the interesting things that aren’t so widely known.') }}</p>
        <p>{!! __('Faro is one of the most attractive property investment locations, with a great range of natural parks, beautiful attractions, preserved lagoons and entertainment opportunities. :strong In this article you will learn more about Faro and what are the investment opportunities it offers.', ['strong' => '<strong>' . __('Many options to keep everyone excited!') . '</strong>']) !!}</p>
        <img loading="eager" width="1320" height="700" src="{{ Helper::autover('/img/{subdomain}/portugal/faro/hero.jpg') }}" class="img-fluid" alt="{{ __('Faro, Aerial view') }}">
        <h2 class="mt-5">{{ __('Why invest in real estate in Faro?') }}</h2>
        <p>{{ __('With more than 300 sunny days a year, Faro is a wonderful paradise on earth that is worth investing in. The year-round interest of tourists in the city, the affordable prices of the properties and the simplified tax system of the country are just some of the reasons that attract foreign investors. See why it is still worth investing in a property in Faro.') }}</p>
        <ul class="list-unstyled mt-5 multicolumn head-section">
            <li>
                <h3>{{ __('The real estate market is still evolving') }}</h3>
                <p>{{ __('The real estate market in this area is very lively and still developing. Here you can buy a house or apartment at almost twice lower price than in the capital.') }}</p>
                <p>{!! __('According to the :link, the price in central Lisbon for a standard 120sq.m. apartment is about €2,500 EUR per square meter, and the average price in Algarve is about €1,800 EUR per square meter.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.globalpropertyguide.com/Europe/Portugal">' . __('Global Property Guide') . '</a>']) !!}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Good return on investment') }}</h3>
                <p>{{ __('Average rental income statistics report good values. The gross return on rents in the Algarve apartments varies from 3.6% to 3.8%, while in Faro it is about 4.5%. This is statistics on long-term rents, and in short-term rents the final income may be higher.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Stable economy') }}</h3>
                <p>{{ __('Portugal has had a stable political atmosphere over the past few years and is one of the countries in Europe with the least crime. The Portuguese economy has managed to recover after a long period of crisis, benefiting from external factors such as tourism, low oil prices and rising sales of Portuguese goods.') }}</p>
                <p>{{ __('When buying real estate, the procedures are one of the simplest compared to other European countries and are carried out with exceptional transparency.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Relieved tax system') }}</h3>
                <p>{{ __('The government has further motivated foreign investment by lifting restrictions on foreign property and pursuing a simplified policy on taxes and remittances abroad.') }}</p>
                <p>{!! __('After receiving :link, foreigners coming to Portugal may benefit from an income tax exemption acquired outside the country for a period of 10 years.', ['link' => '<a class="internal-link" href="' . Helper::route('nhr-portuguese-tax-residency') . '">' . __('Non-Habitual Residence status') . '</a>']) !!}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Portugal Golden Visa') }}</h3>
                <p>{!! __('More and more families are choosing to take advantage of :link by investing in real estate and obtaining a permanent residence permit. Portugal’s golden visa gives qualified investors and their family members the right to live, work and study in Portugal and allows free movement in the European Schengen area. Acquiring a Portugal Golden Visa is one of the easiest ways to obtain a residence permit and possible citizenship.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('Portugal’s Golden Visa program') . '</a>']) !!}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Tourism') }}</h3>
                <p>{{ __('Faro continues to be an attractive tourist destination. Visitors of the city have the opportunity to take advantage of all the favours of the modern city and at the same time to enjoy the beauty of the coast and try the many activities the city has to offer. In 2019, Faro Airport welcomed a record 9 million passengers, indicating that the area is very popular and continues to grow.') }}</p>
                <p>{{ __('One of the factors for Portugal’s tourism boom is the mild climate. Algarve enjoys more than 3,000 hours of sun a year, which is yet another reason why so many families prefer Algarve for their new home.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Safety') }}</h3>
                <p>{{ __('Portugal is the third safest country in the world in 2020 according to the Global Peace Index. It is ranked ahead even by countries such as France and Spain. And only Iceland and New Zealand are considered safer.') }}</p>
            </li>
            <li>
                <h3 class="mt-5">{{ __('Quality of life') }}</h3>
                <p>{{ __('Faro is a modern and lively city that offers excellent quality of life and relatively low costs. The area is rich in offering different types of entertainment and sports facilities, such as golf courses, tennis courts, horseback riding and various water sports. The road network is well maintained, and sunny weather, fresh air and good food are contributive to the good health of the residents.') }}</p>
            </li>
        </ul>
        <h4 class="mt-5">{{ __('MESPIL - professional assistance and support in the buying process') }}</h4>
        <p>{{ __('We at MESPIL can be your partner and be with you through the whole process of acquiring a new home in Faro and a Golden Visa with which you can travel freely in Europe.') }}</p>
        <p>{{ __('MESPIL is a European real estate investment and management company awarded many awards in the Algarve. What distinguishes us is that we are not just a sales agent, but we actively participate in the daily operations of all of our projects, striving to ensure the best customer experience.') }}</p>
        <p>{!! __('Our :team has 25 years of experience in development projects, infrastructure construction, and extensive renovation projects in Europe. Our main goal is to provide affordable and successful investment opportunities for our partners.', ['team' => '<a class="internal-link" href="' . Helper::route('about') . '#team">' . __('team') . '</a>']) !!}</p>
        <p class="bg-secondary text-white my-3 p-5 lead text-center">{{ __('All MESPIL properties for sale are turnkey and have the prospect of a good rental income. We know the Portugal market well and focus on places in the Algarve like Faro that have many advantages and wonderful living and business conditions.') }}</p>
        <h4 class="mt-5">{{ __('Investing in Faro properties that need restoration') }}</h4>
        <p>{{ __('One of the investment opportunities eligible for the Golden Visa is the acquisition of real estate at least 30 years old or located in an urban rehabilitation area. The requirement for this option is for the investment to be at least €350,000 EUR.') }}</p>
        <p>{{ __('We at MESPIL guarantee our quality of work to achieve your dream home or profitable investment.') }}</p>
        <p>{{ __('We offer professional consultations and assistance in the procedures for preparing the necessary documentation. We will be by your side at every step to make sure you invest wisely for your better future. We will answer all your questions and help you make the right decisions.') }}</p>
    </div>

    @if ($count)
        <div class="container-fluid space-single head-section">
            <div class="container">
                <h4 class="mt-5">{{ __('We present you project No.9 Faro, Portugal') }}</h4>
                <p class="lead font-weight-normal">{{ __('One of our last projects is located in Faro, the capital of Algarve. The building has a central location. There is a local high school opposite it. Shops and supermarkets are within walking distance. Bus stops, a park, restaurants and cafes are also nearby.') }}</p>
                <p>{{ __('The No.9 Faro project offers beautifully designed two-bedroom apartments at a price of €370,000 EUR. This makes it suitable for the conditions of the Golden Visa program. Each apartment is furnished to the core and has all the necessary furniture. 5% guaranteed return on rent and management of your investment property is included as well.') }}</p>
                <div class="space-single">
                    <div class="row row-cols-1 row-cols-md-2 mb-n5 justify-content-md-center">
                        <div class="col mb-5">
                            <div class="card card-apartments h-100 text-center">
                                <div id="carousel-exterior" class="carousel slide" data-interval="false">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-exterior" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-exterior" data-slide-to="1"></li>
                                    </ol>
                                    <div class="carousel-inner photoswipe-wrapper" data-photoswipe-gid="exterior">
                                        <div class="carousel-item active">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/exterior/facade-1.jpg') }}" data-photoswipe-pid="facade-1" data-photoswipe-size="2560x1440" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/exterior/thumbnails/facade-1.jpg') }}" class="card-img img-fluid" alt="{{ __('3D Facade') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/exterior/facade-2.jpg') }}" data-photoswipe-pid="facade-2" data-photoswipe-size="2560x1440" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/exterior/thumbnails/facade-2.jpg') }}" class="card-img img-fluid" alt="{{ __('3D Facade') }}"></a>
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
                                    <p class="card-text">{!! __('The project is a development of 3 buildings, each with 6 large apartments in a building from 1950, and each apartment is furnished to the core. With a total area of 400 :m2 in each of the buildings, this project offers a number of different options.', ['m2' => __('m2')]) !!}</p>
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
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/apartments/living-room.jpg') }}" data-photoswipe-pid="living-room" data-photoswipe-size="2560x1829" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/apartments/thumbnails/living-room.jpg') }}" class="card-img img-fluid" alt="{{ __('Living Room') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/apartments/master-bedroom.jpg') }}" data-photoswipe-pid="master-bedroom" data-photoswipe-size="2560x1829" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/apartments/thumbnails/master-bedroom.jpg') }}" class="card-img img-fluid" alt="{{ __('Master Bedroom') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/apartments/bathroom.jpg') }}" data-photoswipe-pid="bathroom" data-photoswipe-size="2048x2560" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/apartments/thumbnails/bathroom.jpg') }}" class="card-img img-fluid" alt="{{ __('Bathroom') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/apartments/kitchen.jpg') }}" data-photoswipe-pid="kitchen" data-photoswipe-size="2048x2560" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/apartments/thumbnails/kitchen.jpg') }}" class="card-img img-fluid" alt="{{ __('Kitchen') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/apartments/rooftop.jpg') }}" data-photoswipe-pid="rooftop" data-photoswipe-size="2560x1387" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/apartments/thumbnails/rooftop.jpg') }}" class="card-img img-fluid" alt="{{ __('Rooftop') }}"></a>
                                        </div>
                                        <div class="carousel-item">
                                            <a href="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/apartments/terrace.jpg') }}" data-photoswipe-pid="terrace" data-photoswipe-size="2560x1552" class="photoswipe"><img loading="lazy" width="768" height="500" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 768 500'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/properties-for-sale/no-9-faro-portugal/apartments/thumbnails/terrace.jpg') }}" class="card-img img-fluid" alt="{{ __('Terrace') }}"></a>
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
                                    <p class="card-text">{{ __('On the ground floor there is a two-bedroom apartment with a private garden, and the apartments on the first and second floor have balconies and access to a private rooftop garden. The roof reveals a beautiful view of the sea and the nature park Ria Formosa.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center mb-5"><a class="btn btn-lg btn-primary mr-2" href="{{ Helper::route('property-for-sale', 'no-9-faro-portugal') }}">{{ __('Click here to visit the No.9 Faro sales page') }}</a></p>
                <p>{{ __('The No.9 Faro project includes properties suitable for both buyers looking for a home in an exciting European city and real estate investors looking for investment opportunities to increase capital and guaranteed rental income. In the sales page you can find videos of the building itself, the apartments, a short introduction to the surroundings and landmarks of Faro as well as more information about the project.') }}</p>
            </div>
        </div>
    @endif

    <div class="container space-single">
        <h2 class="title-border mb-5 mt-5">{{ __('Why buy property in Faro?') }}</h2>
        <p>{!! __('Faro is the capital of Algarve and "the door" to southern Portugal. It is one of the most attractive tourist destinations in this part of the country. Situated on the shore, the city reveals fabulous views of the protected :link, from where nature lovers can see over 270 species of birds. Faro hides numerous cultural and historical treasures that are worth visiting.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://natural.pt/protected-areas/parque-natural-ria-formosa?locale=en">' . __('nature park Ria Formosa') . '</a>']) !!}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/faro/view-of-ria-formosa-natural-park-near-faro.jpg') }}" class="img-fluid mb-3" alt="{{ __('A view of natural park Ria Formosa near Faro') }}">
        <p>{!! __('Faro is a Portuguese city located on the Atlantic coast. In 2005 it was elected and proclaimed by the government as the national capital of culture. There are 5 museums in the city, and the famous :link is located in its surroundings. There are 3 football clubs in Faro, the largest of which is the Farense Sporting Club.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://en.wikipedia.org/wiki/Est%C3%A1dio_Algarve">' . __('Estádio Algarve Stadium') . '</a>']) !!}</p>
        <p>{!! __('Faro is a large educational center, with its many technical schools, schools and :link, established in 1979 - the only state university of Algarve with a base on campus Penya, in the settlement.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.ualg.pt/en">' . __('University of Algarve') . '</a>']) !!}</p>
        <p>{{ __('The capital of the province of Algarve, Faro is the most southern city in mainland Portugal and the most famous region of the Algarve region. Home to the only airport in the province of Algarve, located 4 km west of the city center, Faro is a very popular tourist destination for visitors from northern Europe due to its warm climate.') }}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/faro/street-scene-in-faro.jpg') }}" class="img-fluid mb-3" alt="{{ __('Street scene in Faro with Arco da Vila in the distance') }}">
        <p>{{ __('With more than 300 sunny days a year and located almost in the middle of the southern Portuguese coast, it is no wonder that Faro is an attractive center for sun seekers and for people who use the city as a starting point for exploring more remote areas in the region. With so much sun even in winter, with more than 20 beautiful beaches and a bustling nightlife, the city offers wonderful opportunities for recreation and tourism. For travel lovers, there is no better way to look at Faro and everything South Portugal has to offer, than a motorcycle or scooter to rent.') }}</p>
        <p>{{ __('Although quite small in size, the cathedral, Igreja do Carmo Church deserve a visit. In the city you can see the historic old town with its wonderfully preserved medieval neighborhoods, beautiful harbor, well-maintained parks and squares. Faro is colorful, calm, unpretentious. Like most coastal cities here, you can enjoy local coastal restaurants, which offer freshly caught fish or seafood, which are served in a traditional copper vessel.') }}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/faro/igreja-do-carmo-church-in-faro.jpg') }}" class="img-fluid mb-3" alt="{{ __('Igreja do Carmo - 18th century Catholic church in Faro') }}">
        <p>{{ __('Faro is also a starting point for exploring the sandy beaches of Algarve, golf courses or the stunning Ria Formosa Nature Park, a protected area of lagoons. It is one of the seven natural wonders of Portugal.') }}</p>
        <p>{{ __('The city also offers many opportunities to visit museums, shopping from the local market, which offers local fruits and vegetables, fresh fish and seafood, nuts, honey and many more. On the main street you can find all the famous brands from which you may like to buy clothes, shoes, accessories and more. Faro combines modern and authentic diversity.') }}</p>
        <h3 class="mt-5">{{ __('Location') }}</h3>
        <p>{{ __('Faro is divided into two areas. One includes the coastal strip of the protected nature park Ria Formosa, and the other - an area of hills and valleys on which the typical local vegetation grows.') }}</p>
        <p>{!! __('Ria Formosa Nature Park is considered one of the seven natural wonders of Portugal. It has an area of over 170 km, and it includes a beach located 7 km away from the city centre, a river and a lagoon system. These wonders of nature have formed dunes that preserve numerous swamps, canals and islands. Faro’s beaches are located along the coast of Culatra Island and the Ancao Peninsula. Find out more about the :link on :em.', ['link' => '<a target="_blank" class="external-link" href="https://www.myguidealgarve.com/regionalinfo/ria-formosa-islands">' . __('Ria Formosa Islands') . '</a>', 'em' => '<em>' . __('My Guide Algarve (the locals guide to Algarve, written by local experts)') . '</em>']) !!}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/faro/ria-formosa-sandy-bay-and-waves.jpg') }}" class="img-fluid mb-3" alt="{{ __('Ria Formosa Sandy Bay and waves - view from the sky') }}">
        <p>{{ __('Bird lovers can enjoy a unique view. Ria Formosa Park is a place where hundreds of different birds can be observed. Every year, migratory species pass through Northern Europe and nest there during the winter. Among them you can see flamingos, terns drinking avocets and Eurasion pigeons') }}</p>
        <p>{{ __('Faro has several other gardens that complement the natural diversity of the city. Thanks to this, the region is preferred for ecotourism, a place for bird watching, boat trips on rivers and coasts, hiking, cycling adventures or renting a motorcycle and touring nearby and more distant attractions. Through the municipality of Faro passes the bicycle chain Ecovia do Algarve, which connects Algarve with the rest of Europe.') }}</p>
        <h3 class="mt-5">{{ __('Climate') }}</h3>
        <p>{{ __('The climate in Faro is Mediterranean with a hot summer. Summer days are long and temperatures reach 27-35° C, and the season may last until October. The winter is characterized by a mild climate, and the length of the day reaches 6 hours with an average temperature of 8-16° C. The more significant rainfall is in the winter, and the period between June and September is considered dry. The average annual temperature is 17.5 to 18.5° C.') }}</p>
        <p>{{ __('Faro is considered one of the sunniest cities in Europe. All these conditions make it ideal for activities throughout the year and therefore the interest of tourists is constant. Faro is one of the popular destinations for investing and buying housing, especially for people looking for the combination of the modern with the authentic.') }}</p>
        <img loading="lazy" width="1320" height="600" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1320 600'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/faro/i-love-faro.jpg') }}" class="img-fluid mb-3" alt="{{ __('I love Faro sign with the marina to the rear') }}">
        <h3 class="mt-5">{{ __('Faro - the door to the world of Algarve') }}</h3>
        <p>{!! __('Faro has the second most important airport in Portugal, which contributes to the development of tourism and the city. The :link is the door to the great tourist region of Algarve, with direct links to Lisbon and the most important European capitals.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.aeroportofaro.pt/en/fao/home">' . __('International Faro Airport') . '</a>']) !!}</p>
        <p>{{ __('The airport is located 4 km west of downtown Faro and is operated by many scheduled and charter flights from Europe, England and Canada.') }}</p>
        <p>{{ __('Over 8.7M passengers arrive through Faro airport alone each year resulting in Ryanair making it a new European hub. Ryanair have based seven aircraft at the airport with 31 routes which have increased passenger numbers to over 1.7 million per year.') }}</p>
        <p>{{ __('Faro has a railway connection to the entire coast of Algarve and developed intercity and city bus lines.') }}</p>
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
