@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Portugal Real Estate Investment Guide | Portugal Property Buying Guide'))
@section('description', __('Investing in Portuguese real estate is one of the most attractive investment options for foreign investors. Discover MESPIL location guides for property buyers.'))

@section('content')
    <div class="container space-single">
        <h1 class="title-border mb-5">{{ __('Portugal Real Estate Investment & Property Buying Guide') }}</h1>
        <p class="lead">{!! __('Portugal is one of the most attractive destinations for foreign investment in recent years. :link1, which was launched in 2012 and a number of other government initiatives such as :link2 has helped promote Portugal globally drawing investor’s attention.', ['link1' => '<a class="internal-link" href="' . Helper::route('portugal-golden-visa') . '">' . __('The Golden Visa program') . '</a>', 'link2' => '<a class="internal-link" href="' . Helper::route('nhr-portuguese-tax-residency') . '">' . __('the Non Habitual Residency tax status') . '</a>']) !!}</p>
        <div class="space-single">
            <div class="row row-cols-1 row-cols-md-2 mb-n5">
                <div class="col mb-5">
                    <div class="card card-home card-font-sm text-center h-100">
                        <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/portugal/properties-for-sale.jpg') }}" class="card-img img-fluid" alt="{{ __('Photo of Pine Hills Vilamoura living room') }}">
                        <div class="card-body">
                            <h3 class="card-title title-border text-uppercase">{{ __('Properties for Sale in Portugal') }}@fas('long-arrow-alt-right', 'ml-3')</h3>
                            <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('portugal-properties-for-sale') }}">{{ __('Buy large modern apartments in Algarve or Lisbon with 5% guaranteed rental yield, fully managed, golden visa eligible. Award winning apartments for sale in Portugal brought to market turn-key.') }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card card-home card-font-sm text-center h-100">
                        <img loading="eager" width="640" height="360" src="{{ Helper::autover('/img/{subdomain}/portugal/investment-projects.jpg') }}" class="card-img img-fluid" alt="{{ __('View from the Pine Hills Vilamoura balcony at sunset') }}">
                        <div class="card-body">
                            <h3 class="card-title title-border text-uppercase">{{ __('Investment Projects in Portugal') }}@fas('long-arrow-alt-right', 'ml-3')</h3>
                            <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('portugal-investment-projects') }}">{{ __('Take control of your wealth through the power of managed Portuguese real estate investment. High demand properties in top locations, with strong IRR returns, eligible for Portugal Golden Visa.') }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2>{{ __('Portugal Golden Visa') }}</h2>
        <p>{{ __('Portugal’s Golden Visa is an opportunity to obtain a valid residence permit in Portugal for investors outside the European Union (EU), the European Economic Area (EEA) or Switzerland. It gives to qualified investors and their family members the right to live, work and study in Portugal and allows free movement in the European Schengen area. This program was founded by Portugal to attract investments and help develop the local economy. Their low “stay requirement” (the number of days you have to spend in the country in order to have legal residency) is one of the main reasons why the program is so successful. Investors must spend just 7 days per year in the country.') }} <strong class="font-weight-bold">{{ __('This is one of the most successful investment programs for residence in the world!') }}</strong></p>
        <a href="{{ Helper::route('portugal-golden-visa') }}" class="btn btn-lg btn-primary mb-5">{{ __('Read our Portugal Golden Visa guide') }}@fas('long-arrow-alt-right', 'ml-3')</a>
        <h2>{{ __('Portugal Non-Habitual Residency Tax Status') }}</h2>
        <p>{{ __('Introduced in 2009 by the Portuguese government to attract individuals and their families to Portugal, NHR enables the individual becoming a tax resident in Portugal to avail of very favourable income tax advantages over a maximum 10 year period. Key advantages of being a non-habitual tax resident in Portugal аre: 20% flat rate for certain Portuguese source incomes, tax exemption on almost all foreign source income and more.') }}</p>
        <a href="{{ Helper::route('nhr-portuguese-tax-residency') }}" class="btn btn-lg btn-secondary mb-5">{{ __('More information about the NHR Tax Status') }}@fas('long-arrow-alt-right', 'ml-3')</a>
        <h2>{{ __('The Property Buying Process') }}</h2>
        <p>{{ __('We at MESPIL offer you quality Portuguese property for sale with strong capital appreciation and support the purchasing process every step of the way through our partners in legal, finance, and tax advise. We will guide you through the process and are always on hand to answer any questions you may have. We maintain a focus on operating all of our assets end‑to‑end ensuring commitment to each project.') }}</p>
        <a href="{{ Helper::route('the-property-buying-process') }}" class="btn btn-lg btn-secondary mb-5">{{ __('Understand the buying process in 9 simple steps') }}@fas('long-arrow-alt-right', 'ml-3')</a>
        <h2>{{ __('Portugal Property Investment Location Guides') }}</h2>
        <p class="lead">{!! __('To really know a location you have to get under its skin. MESPIL’s location guides cover the most popular destinations of our :link1 and features top locations across Portugal where our property buyers are looking for some of :link2 with guaranteed rental income, modern furniture and professional property management. Our guides highlights the property market and leisure activities, but also the interesting things that aren’t so widely known.', ['link1' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('real estate investment projects') . '</a>', 'link2' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('the best properties for sale in Portugal') . '</a>']) !!}</p>
        <p class="lead font-weight-light"><q>{{ __('One’s destination is never a place, but a new way of seeing things.') }}</q></p>
        <section class="space-single">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 mb-n5 justify-content-md-center">
                <article class="col mb-5">
                    <div class="card card-wrapper h-100">
                        <img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/faro/main.jpg') }}" class="card-img img-fluid" alt="{{ __('Faro, Portugal') }}">
                        <div class="card-body">
                            <h2 class="h3 card-title title-border">{{ __('Faro') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('The capital of the Algarve') }}</small></h2>
                            <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('portugal', 'faro') }}">{{ __('One of the most attractive investment locations, with a great range of natural parks, beautiful attractions, preserved lagoons and entertainment opportunities.') }} <strong>{{ __('Many options to keep everyone excited!') }}</strong></a></p>
                        </div>
                    </div>
                </article>
                <article class="col mb-5">
                    <div class="card card-wrapper h-100">
                        <img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/lisbon/main.jpg') }}" class="card-img img-fluid" alt="{{ __('Lisbon, Portugal') }}">
                        <div class="card-body">
                            <h2 class="h3 card-title title-border">{{ __('Lisbon') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('Oldest city in Western Europe') }}</small></h2>
                            <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('portugal', 'lisbon') }}">{{ __('The capital of Portugal is one of the oldest cities in Europe with impressive preserved architecture, warm climate with many sunny days and fascinating locations to visit.') }} <strong>{{ __('A truly desirable location for property investors!') }}</strong></a></p>
                        </div>
                    </div>
                </article>
                <article class="col mb-5">
                    <div class="card card-wrapper h-100">
                        <img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/portugal/vilamoura/main.jpg') }}" class="card-img img-fluid" alt="{{ __('Vilamoura, Portugal') }}">
                        <div class="card-body">
                            <h2 class="h3 card-title title-border">{{ __('Vilamoura') }}@fas('long-arrow-alt-right', 'float-right')<br><small>{{ __('International Marina of Distinction') }}</small></h2>
                            <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('portugal', 'vilamoura') }}">{{ __('One of the largest recreation centres in Europe, Vilamoura resort town is known for its natural beauty, warm climate, mineral springs and peaceful relaxation.') }} <strong>{{ __('The perfect place for seafood and wine lovers!') }}</strong></a></p>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <h2 class="title-border mb-5">{{ __('Why invest in real estate in Portugal?') }}</h2>
        <p class="lead">{{ __('What makes Portugal such a sought-after investment destination and why does it bring key tourism significance for Europe? What are the reasons for choosing Portugal for your new home and relocating there with your family? We will go through the biggest advantages of this country.') }}</p>
        <p>{{ __('Portugal offers one of the most dynamic and developing real estate markets in Europe. What makes it such an attractive destination for investment is the outstanding quality of life, the opportunity of acquiring a Golden Visa, business opportunities, security and economic stability plus some of the lowest costs of living in all of Europe.') }}</p>
        <p>{{ __('There are a number of determinants making Portugal an intelligent choice for property investment ranging from its intrinsic values such as landscape and climate to more temporal reasons driven by economic factors.') }}</p>
        <h3 class="mt-5">{{ __('Opportunity for immigration for the whole family') }}</h3>
        <p>{!! __(':link can give investors and their families a unique opportunity to obtain a residence permit through a Golden Visa. The golden visa program in Portugal is one of the most flexible and easy investment programs through which non-EU citizens can obtain a residence visa in the country and in Europe. One of the biggest advantages of the program is that the investor and his family members can join the application and obtain European citizenship.', ['link' => '<a class="internal-link" href="' . Helper::route('for-investors') . '">' . __('Investing in Portugal') . '</a>']) !!}</p>
        <p>{!! __('By investing €350,000 EUR in :link, holders of residence permits have the right to live in Portugal. They can also take advantage of visa-free travel within the 26 country members of the Schengen area. In addition, Golden Visa holders have the right to do business, work and study in Portugal.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('selected real estate projects') . '</a>']) !!}</p>
        <p>{{ __('One of the most attractive options is the opportunity to apply for permanent residence and citizenship after 5 years. The applicant and his family must have resided for two weeks every two years to renew Portuguese Golden Visa.') }}</p>
        <h3 class="mt-5">{{ __('Profitability of real estate') }}</h3>
        <p>{{ __('Portuguese real estate has one of the best price-to-rent ratios (a measure of the profitability of owning a house) and price-to-income ratios (a measure of affordability) in the region.') }}</p>
        <h3 class="mt-5">{{ __('Tax relief schemes') }}</h3>
        <p>{{ __('Portugal’s Non-Habitual Residency and Golden Visa programs offer retiree and investor residency programs that allow foreign investors purchase property and pay zero income tax as residents of Portugal.') }}</p>
        <p>{{ __('In 2009 Portugal introduced a beneficial voluntary Personal Income Tax (PIT) regime for non-habitual residents aiming to attract talent in high value added activities and Ultra and High Net Worth Individuals (UHNWI’s) and their families to Portugal.') }}</p>
        <p>{{ __('These programmes are much sought after internationally and this has been a crucial boost to both the market and to the success of MESPIL’s investment in Portugal.') }}</p>
        <h3 class="mt-5">{{ __('Leveraging a shortfall') }}</h3>
        <p>{{ __('The key issue in the Portugal property market is despite the boom in tourism and surge in demand for properties, construction has not increased in line with demand leaving a shortfall in supply in a time when recovery is allowing more buyers into a position of investment.') }}</p>
        <ul>
            <li><strong class="font-weight-bold">{{ __('Demand surge') }}</strong><p>{{ __('During 2018, a total of 178,691 dwellings were transacted, 16.6% more than in 2017. Transactions reached the 24.1 billion euros, which represents a yearly increase of 24.4% however, demand will continue to far exceed supply leveraging a price increase.') }}</p></li>
            <li><strong class="font-weight-bold">{{ __('Construction down') }}</strong><p>{{ __('Construction activity in Portugal has been in decline since 2002. In fact, the number of licensed dwellings in new constructions plummeted by about 90% to 6,785 units in 2014, from 65,650 units in 2007, according to the INE. Supply of property on the Algarve is at an all-time low.') }}</p></li>
            <li><strong class="font-weight-bold">{{ __('Tourism high') }}</strong><p>{{ __('In 2017, tourism revenues rose by 19.5 percent to a new record high of EUR 15.15 billion from EUR 12.68 billion in 2016. Faro Airport welcomed a record 8.7 million passengers in 2017, 1.1 million more than the previous year, with a total of over 61M tourists visiting in total to Portugal, with growth expected for the next number of years.') }}</p></li>
        </ul>
        <p>{{ __('Despite this industry boom, Portuguese banks / funds continue to hold a number of distressed tourism / leisure properties on their books.') }}</p>
        <h3 class="mt-5">{{ __('Strategic location') }}</h3>
        <p>{{ __('Undoubtedly, one of Portugal’s advantages is its strategic location. It is located between three continents - Europe, Africa and North America. This makes it very central, convenient for travel and business meetings. Brand new infrastructure and global connections make Portugal more and more attractive to both residents and international business.') }}</p>
        <p>{{ __('The quality of food and wine and the hospitality of the Portuguese people is internationally recognised. The food provided by Portugal is simple, fresh and delicious. In restaurants and shops, you will be warmly welcomed and will be helped if you need advice, most speak English and a number of other second languages.') }}</p>
        <p>{{ __('The weather in Portugal is mostly sunny with a temperate sea climate, hot summers and wet winters. The reason for this is the Atlantic, continental and Mediterranean influence. This makes the country a sought-after tourist destination and a wonderful opportunity for investment for tourism. In winter the sunlight is 4-6 hours, and in summer 10-12 hours with a maximum temperature of 25-28 ° C, making Portugal one of the countries with the mildest climates.') }}</p>
        <p>{!! __('In addition to the delicious and quality food, good wine, a pleasant climate, a well-developed infrastructure and a key location, the safety of cities also contributes to the high quality of life in Portugal. Portugal is ranked as the :3rd safest country in the world under the :link. And the three most popular destinations are Algarve, Lisbon and Porto, which are rated as extremely safe. In the big cities of Lisbon and Porto you can enjoy a variety of entertainment options suitable for the whole family.', ['3rd' => __('3rd'), 'link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.economicsandpeace.org/reports/">' . __('Global Peace Index') . '</a>']) !!}</p>
        <h3 class="mt-5">{{ __('Economic prosperity') }}</h3>
        <p>{{ __('Portugal regulates tax policies with other EU countries. The standard of living in the country is high and the costs are relatively low compared with those in other European countries. Labour costs and business development conditions are favourable, which also adds value to the reasons for investing. These advantages increase foreign investors and help to improve Portugal’s economy.') }}</p>
        <h3 class="mt-5">{{ __('Infrastructure') }}</h3>
        <p>{{ __('Portugal has a well-developed infrastructure and it is amongst the 10 countries in the world with the best road networks. It also offers opportunities for perfect connectivity to the world through well-developed telecommunications services and an optical network.') }}</p>
        <p>{{ __('Transport to airports is convenient and close to downtown Porto and Lisbon. Efficient movement is facilitated by a modern metro, luxury hotels and conference centers.') }}</p>
        <p>{{ __('Infrastructure is projected to continue to grow at a good pace. On October 22, 2020 the Prime Minister of Portugal announced 43 billion euros will be invested in public infrastructure, including a high-speed rail link between Lisbon and the country’s second largest city, Porto, which will be completed by 2030.') }}</p>
        <h3 class="mt-5">{{ __('Expat community') }}</h3>
        <p>{{ __('The Algarve has been attracting foreigners for decades and is home today to almost 500,000 resident expats through both the NHR and Golden Visa programmes. Portugal has been voted by Forbes magazine as the number one friendliest place to retire and won awards for the friendliest and most welcoming to expats.') }}</p>
        <h3 class="mt-5">{{ __('Coastline and beaches') }}</h3>
        <p>{{ __('The Algarve’s 100 miles of Atlantic coastline is punctuated by jagged rock formations, lagoons, and extensive sandy beaches, many awarded coveted Blue Flags from the European Blue Flag Association. The Algarve has won best European Beach Destination at the World Travel Awards several times.') }}</p>
        <h3 class="mt-5">{{ __('Golf') }}</h3>
        <p>{{ __('The Algarve boasts 42 golf courses in less than 100 miles and is internationally recognized as one of the top golfing destinations in continental Europe and the world. Golf rounds played continue to grown year-on-year with a surge even in the low season. Portugal continues to be awarded industry best accolades for best golf courses further bolstering its position as one of the best countries to play.') }}</p>
        <h3 class="mt-5">{{ __('Climate') }}</h3>
        <p>{{ __('The Algarve boasts 300 sunny days a year with temperatures staying above 14 degrees Celsius in winter. The climate facilitates outdoor living that contributes to quality of life of its residents.') }}</p>
        <h3 class="mt-5">{{ __('Growth and opportunities for tourism') }}</h3>
        <p>{!! __('Portugal, in particular the Algarve, is currently undergoing a tourism boom. Figures from :link show, occupancy rates are up year on year since 2015 with average occupancy rates of over 65% with expected rates to continue to grow. Portugal importantly enjoys a year-round holiday season.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.ine.pt/xportal/xmain?xpgid=ine_main&xpid=INE&xlang=en">' . __('National Statistics Institute') . '</a>']) !!}</p>
        <p>{!! __('One of Europe’s favourite tourist destinations, Portugal offers numerous opportunities for those visiting or relocating. In addition to the wonderful food, you can also enjoy the delicious wines that are created. One of Portugal’s most sought-after drinks is :port or :porto. It is ubiquitous throughout the country, especially in its home city, of which it shares the same name.', ['port' => '<em>' . __('port') . '</em>', 'porto' => '<em>' . __('porto') . '</em>']) !!}</p>
        <p>{{ __('Porto is the second largest city in the country, which was chosen as the best European destination in 2014, 2016 and 2017. Carved in two by the Duro River, the centre of Porto offers sophistication, and the sea suburbs bring an atmosphere of renaissance. The growing collection of bars, restaurants and cafes offer the opportunity to taste the authentic taste of local life.') }}</p>
        <p>{{ __('Thanks to numerous foreign investments and various programs supported by the government in recent years, many historic buildings have been restored. An impressive contrast can be observed between medieval architecture and modern life. Through the Golden Visa program, many investors helped renovate cities and at the same time immigrated to Portugal.') }}</p>
        <p>{{ __('The refined coast of Portugal, the reliable weather and the beautiful seaside resorts make it one of the best destinations in Europe for beach holidays. In addition, thanks to the rolling stock of the Atlantic Ocean, it is one of the best destinations for surfing in Europe with waves for each ability.') }}</p>
        <p>{{ __('All the listed advantages of Portugal contribute to it being one of the most desired tourist destinations. The wonderful opportunities for tourism offered by the country and the real estate business and the hotel industry makes it one of the most successful investment opportunities.') }}</p>
        <h2 class="title-border my-5">{{ __('Top 10 Reasons to live in Portugal') }}</h2>
        <ol>
            <li>{{ __('Portugal’s property market is booming with investment opportunities that generate real returns.') }}</li>
            <li>{{ __('Portugal offers incentives like Non-Habitual Residency and Golden Visa programs which allow foreign investors to enjoy very favorable tax on foreign income and a pathway to residency status.') }}</li>
            <li>{{ __('Portugal operates a modern banking system that offers advanced financial products. In fact, it oversees one of the world’s most advanced interbank networks.') }}</li>
            <li>{{ __('Portugal has excellent educational services both public and private with many international schools. You will enjoy a significantly lower cost of living compared to other European countries.') }}</li>
            <li>{{ __('Close proximity to other European countries, modern motorways and daily international flights.') }}</li>
            <li>{{ __('Portugal is one of the 5 most peaceful countries in the world and has one of the lowest crime rates in Europe.') }}</li>
            <li>{{ __('Portugal is known to embrace multiculturism and immigrants & several are spoken such as Portuguese, English, Spanish, German and French.') }}</li>
            <li>{{ __('Portugal’s capital city Lisbon is considered by many to be the new “IT Capital” often referred to as the San Francisco of Europe. With a booming tech industry Portugal is becoming a destination of choice for employers seeking skilled tech talent.') }}</li>
            <li>{{ __('You will enjoy universal access to a quality & highly rated health care system. Life expectancy is 81.5 years which gives Portugal a world ranking of 19.') }}</li>
            <li>{{ __('Portugal won 39 awards at this year’s 2019 World Travel Awards, taking home the top honor for Europe’s Leading Destination. Portugal averages 300 days of sun per year and has 600+ beaches.') }}</li>
        </ol>
        <div class="head-section mt-5">
            <h3>{{ __('Trust professional help on the way to buy property in Portugal and to acquire a Portugal Golden Visa') }}</h3>
            <p>{{ __('We at MESPIL, can help you on the way to acquiring a Portuguese Golden Visa. Our team has over 25 years of experience in new development projects, infrastructure construction, and extensive renovation projects in Europe. Today, MESPIL’s main goal is to locate, acquire and develop property in Algarve, Faro and Lisbon, Portugal at lower levels of replacement costs and then remarket through regeneration, rebranding and repositioning, creating successful investment opportunities for our project partners and bring much in demand property solutions to our end buyers.') }}</p>
            <p>{{ __('All our award-winning apartments for sale in Portugal are Golden Visa eligible and brought to market turnkey, fully furnished with a 5% guaranteed rental yield. Make the choice to invest in a spacious, modern and fully managed apartment in the top areas of Algarve, Faro and Lisbon.') }}</p>
        </div>
    </div>
@endsection
