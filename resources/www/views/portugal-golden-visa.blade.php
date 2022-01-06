@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Portugal Golden Visa | Portugal residency-by-investment program'))
@section('description', __('Portugal’s Golden Visa is Europe’s most successful residency-by-investment program ✪ Information, process, benefits, key requirements, documents required.'))

@section('content')
    <div class="container space-single">
        <h1 class="title-border mb-5">{{ __('Golden Visa Portugal') }}</h1>
        <p class="lead">{{ __('See below info on the process to acquire a Golden Visa and the advantages of the Golden Visa Portugal.') }}</p>
        <p class="text-muted font-size-sm">{{ __('Disclaimer') }}: <em>{{ __('The information provided on this page does not, and is not intended to, constitute legal advice; instead, all information, content, and materials available on this page are for general informational purposes only.') }}</em></p>

        <div class="head-section">
            <h2>{{ __('Changes to the conditions for a Portuguese Golden Visa in 2022') }}</h2>
            <p>{!! __('In early 2020, the Portuguese government proposed changing the conditions for issuing Golden Visas and :link1. The adoption of the proposals would limit :link2, with the aim of excluding from the list of the premium real estate areas in Lisbon, Porto and algarve from January 2022.', ['link1' => '<a class="internal-link" href="' . Helper::route('portugal-real-estate-investment-guide') . '">' . __('investing in real estate in Portugal') . '</a>', 'link2' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('investment opportunities in Portuguese real estate') . '</a>']) !!}</p>
            <p><strong class="font-weight-bold">{{ __('The adoption of these changes was initially postponed in June 2020 due to the situation with the pandemic of COVID-19 but was officially accepted and declared in February, 2021.') }}</strong></p>
            <p>{{ __('When introducing this legislation, investors applying for a Golden Visa will only be able to acquire real estate located in the eligible areas as deemed by government.') }}</p>
            <p>{{ __('The measures proposed by the Portuguese government will limit investment options. The government’s goal is to tackle price growth in large cities, which has been a problem for locals to attain a foothold.') }}</p>
            <p>{{ __('In general the required Golden Visa minimum investment amounts for the capital investment, job creation and donation routes will increase from €350,000 EUR to €500,000 EUR in 2022') }}</p>
        </div>

        <h2 class="mt-5">{{ __('What is a Portuguese Golden Visa?') }}</h2>
        <p class="bg-secondary text-white my-3 p-5 lead text-center">{!! __('Officially called ARI :span1, the Golden Visa in Portugal is :span2.', ['span1' => '<span lang="pt">(“' . __('Autorização de Residência para Actividade de Investimento') . '”)</span>', 'span2' => '<span class="d-inline-block text-uppercase mt-3 text-primary">' . __('Europe’s most successful residency-by-investment program') . '</span>']) !!}</p>
        <p>{{ __('Portugal’s Golden Visa is an opportunity to obtain a valid residence permit in Portugal for investors outside the European Union (EU), the European Economic Area (EEA) or Switzerland. This program was founded by Portugal to attract inward investment and help develop the Portuguese economy. So far, it has managed to make investments worth over 5 billion euro since its inception in 2012, noting that they are mainly targeted at the real estate market.') }}</p>
        <p>{{ __('The Golden Visa scheme gives to qualified investors and their family members the right to live, work and study in Portugal and allows free movement in the European Schengen area.') }}</p>
        <p>{{ __('This is one of the most successful investment programs for residence in the world, due to the reason that investors do not need to live in Portugal to obtain permission for free movement.') }}</p>

        <div class="card card-home card-pgv card-font-sm flex-xl-row align-items-center space-single">
            <div class="row no-gutters align-items-center">
                <div class="col-xl-6 overflow-hidden bg-light d-flex align-self-stretch">
                    <img loading="eager" width="902" height="564" src="{{ Helper::autover('/svg/{subdomain}/portugal-golden-visa-guide.svg') }}" class="img-fluid" alt="{{ __('People getting visa concept. Travelers making document for leaving country and travel abroad. Foreign and native passport, immigration stamp approved.') }}">
                </div>
                <div class="col-xl-6">
                    <div class="card-body p-md-4">
                        <h3 class="title-border mb-5 text-uppercase">{{ __('Portugal Golden Visa Guide') }}</h3>
                        <p class="card-text">{{ __('Want to know more? Read the definitive guide to the Portugal Golden Visa program – the most popular and successful residency-by-investment and citizenship-by-investment visa program in the world.') }}</p>
                        <p class="card-text">{{ __('From its benefits, requirements, investment options, cost and taxes, application process to all the frequently asked questions - it takes you step by step through how it works to how you can apply and get a second passport in Portugal.') }}</p>
                        <a class="btn btn-lg btn-pgv d-inline-flex align-items-center" href="https://www.portugal-golden-visa.pt/">{{ __('Read The Ultimate Portugal Golden Visa Guide Now!') }}</a>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5">{{ __('Why is the Portugal Golden Visa the most successful residence-by-investment program in the world?') }}</h2>
        <p>{{ __('The Portugal Golden Visa programme managed to attract thousands of investors and thanks to it, many families have moved to Portugal. This program has a number of advantages that are worth noting:') }}</p>
        <ul class="multicolumn">
            <li>{{ __('Permanent free entry and circulation in Portugal and 25 other Schengen zone European countries;') }}</li>
            <li>{{ __('You can reside in another country outside the EU and live and work in Portugal;') }}</li>
            <li>{{ __('Family members may also benefit from the residence permit in Portugal;') }}</li>
            <li>{{ __('You must spend an average of only 7 days a year in Portugal to maintain the opportunities provided by the golden visa;') }}</li>
            <li>{{ __('After 5 years you can apply for permanent residence;') }}</li>
            <li>{{ __('After 6 years you can apply for Portuguese citizenship;') }}</li>
            <li>{{ __('You have the opportunity to choose between a number of relatively affordable investment options;') }}</li>
            <li>{{ __('You have the opportunity to work and reside in one of the safest countries, with affordable and quality health and education, good infrastructure and continental climate, which contributes to good living conditions;') }}</li>
            <li>{{ __('Portugal is one of the 5 most peaceful countries in the world and has one of the lowest crime rates in Europe;') }}</li>
            <li>{{ __('The Portuguese are polite, friendly, and welcoming to visitors regardless of their country of origin and multilingual speaking; English, Spanish, German, among others;') }}</li>
            <li>{{ __('Portugal’s capital city Lisbon is considered by many to be the new “IT Capital” often referred to as the San Francisco of Europe;') }}</li>
            <li>{{ __('The Algarve continues to win international awards for being Europe’s leading tourist destination.') }}</li>
        </ul>
        <h2 class="mt-5">{{ __('What are the requirements for getting a Portugal Golden Visa?') }}</h2>
        <p>{{ __('Portugal’s Golden Visa is one of the most popular investment programs because it has a limited number of requirements unlike other similar programs. It allows investors to get involved quickly and easily and to have a number of flexible residence options. However, here are the general requirements that the investor must comply with:') }}</p>
        <ul class="multicolumn">
            <li>{{ __('The qualified investment must be maintained for a minimum of 5 years;') }}</li>
            <li>{{ __('The investor must not be a citizen of Portugal and the EU in order to apply for a Golden Visa and must have made a qualified investment in Portugal;') }}</li>
            <li>{{ __('The investor must have no violations in the Portuguese immigration and the Schengen services;') }}</li>
            <li>{{ __('The person must not have been convicted in Portugal and his home country;') }}</li>
            <li>{{ __('The investment must be made by a person or through a legal entity and certain requirements must be met;') }}</li>
            <li>{{ __('A minimum stay in Portugal of at least 7 days in the first year and 14 days in each subsequent period of two years is required;') }}</li>
            <li>{{ __('A valid Schengen visa is required to enter Portugal;') }}</li>
            <li>{{ __('It must be confirmed that the investments come from abroad.') }}</li>
        </ul>
        <h2 class="mt-5">{{ __('What are the three most popular types of investments that meet the requirements for Portugal’s golden visa?') }}</h2>
        <ul>
            <li>{{ __('Acquisition of property;') }}</li>
            <li>{{ __('Transfer of funds over €1,000,000 EUR;') }}</li>
            <li>{{ __('Creating at least 10 (ten) jobs in Portugal.') }}</li>
        </ul>
        <h2 class="mt-5">{{ __('What are the options for investment?') }}</h2>
        <p>{{ __('Your investment must meet at least one of the listed requirements:') }}</p>
        <div class="multicolumn">
            <p><strong class="font-weight-bold">{{ __('Investing in real estate at least €500,000 EUR') }}</strong><br>{{ __('Acquisition of real estate at a minimum value of €500,000 EUR, anywhere in Portugal. The amount is reduced to €400,000 EUR for properties in a low population area.') }}</p>
            <p><strong class="font-weight-bold">{{ __('Investing in properties that need rehabilitation') }}</strong><br>{{ __('Acquisition of real estate with construction, completed at least 30 years ago or located in an urban area for rehabilitation. Under this option, the minimum investment is reduced to €350,000 EUR. The amount has been reduced once again to €280,000 EUR for properties in a low population area.') }}</p>
            <p><strong class="font-weight-bold">{{ __('Investment in research') }}</strong><br>{{ __('Transfer of capital of at least €350,000 EUR invested in research carried out by accredited research institutions that are part of the national scientific and technological system.') }}</p>
            <p><strong class="font-weight-bold">{{ __('Investment in the national heritage') }}</strong><br>{{ __('A capital transfer of at least €250,000 EUR to support artistic production or to restore or maintain national cultural heritage.') }}</p>
            <p><strong class="font-weight-bold">{{ __('Investment in private capital funds') }}</strong><br>{{ __('Transfer of capital of at least €350,000 EUR, for the acquisition of investment units or venture capital funds aimed at providing capital to companies that meet certain requirements. This can be a more convenient option for some as it avoids the hassle of looking for property and subsequent management.') }}</p>
            <p><strong class="font-weight-bold">{{ __('Investment in business') }}</strong><br>{{ __('It consists of a transfer of at least €350,000 EUR in support or inclusion in the share capital of a company established in Portugal. In addition, five permanent jobs are needed for a period of three years.') }}</p>
            <p><strong class="font-weight-bold">{{ __('Capital transfer') }}</strong><br>{{ __('Transfer of capital of at least €1,000,000 EUR to Portugal.') }}</p>
            <p><strong class="font-weight-bold">{{ __('Create 10 full-time jobs') }}</strong><br>{{ __('Creating at least 10 full-time jobs in the Portuguese business in the form of a sole proprietorship with limited liability. Jobs can be 8 if they are in a low population area.') }}</p>
        </div>
        <h2 class="mt-5">{{ __('Application process for the Portuguese Golden Visa') }}</h2>
        <p>{{ __('The process of applying for a Portugal Golden Visa requires documents to be collected in Portugal and in the country of origin.') }}</p>
        <p><strong class="font-weight-bold">{{ __('The sequence of steps you need to take:') }}</strong></p>
        <ul class="multicolumn">
            <li>{{ __('Getting the Portuguese fiscal number and making of a local bank account;') }}</li>
            <li>{{ __('Determining and making an investment;') }}</li>
            <li>{{ __('Getting the necessary documentation from the country of origin (maximum three months before submitting the application);') }}</li>
            <li>{{ __('All documents must be legalized and translated into Portuguese;') }}</li>
            <li>{{ __('Getting the necessary documentation in Portugal;') }}</li>
            <li>{{ __('Filling and sending the application for Golden Visa (usually through a lawyer);') }}</li>
            <li>{{ __('Paying the processing fee;') }}</li>
            <li>{{ __('SEF confirmation of approval;') }}</li>
            <li>{{ __('Agreeing on a date, time and place for appointment in biometrics;') }}</li>
            <li>{{ __('Getting the original documents with which, the registration was made;') }}</li>
            <li>{{ __('Receiving a final approval;') }}</li>
            <li>{{ __('Getting the Portuguese residence card.') }}</li>
        </ul>
        <p>{{ __('The renewal process at the end of the 2nd year is similar.') }}</p>
        <h2 class="mt-5">{{ __('How and why to get a Portuguese fiscal number?') }}</h2>
        <p>{{ __('There are many reasons to get a NIF: getting a phone subscription, opening a bank account, buying real estate, renting properties in the long run and more.') }}</p>
        <p>{{ __('Here’s how to do it:') }}</p>
        <ul class="multicolumn">
            <li>{{ __('Find the nearest branch of the government services where you can request NIF;') }}</li>
            <li>{{ __('Get proof of address. You can get one through a bank statement of no more than 3 months old. You must be assisted by someone outside the EU/EEA who is your tax representative. You can hire a lawyer for this or ask your loved one, with whom the tax authorities can contact;') }}</li>
            <li>{{ __('Bring your proof and identification number to the government services (Finanças). Take a valid passport with you.') }}</li>
            <li>{{ __('When you go to the place, you must press a button to get a number to line up with.') }}</li>
            <li>{{ __('When it’s your turn, let the staff know that you want to register for NIF. Give the requested information and you will receive a sheet with your fiscal number.') }}</li>
        </ul>
        <h2 class="mt-5">{{ __('What will you need to open a bank account in Portugal?') }}</h2>
        <ul>
            <li>{{ __('Phone number on which you can receive an SMS') }}</li>
            <li>{{ __('Proof of income or similar documents that indicate your profession or position.') }}</li>
            <li>{!! __('VAT identification number (NIF: :nif).', ['nif' => '<span lang="pt">' . __('Número de Identificação Fiscal') . '</span>']) !!}</li>
            <li>{{ __('Proof of Portuguese address or foreign address.') }}</li>
        </ul>
        <h2 class="mt-5">{{ __('How to open a bank account in Portugal?') }}</h2>
        <p>{{ __('To open a bank account, you must be in Portugal and have a Portuguese fiscal number. You must apply to Activo online, and you can also do so in a local branch. You can use Google Translate to translate the instructions because they are in Portuguese. When you reach the step in which you are given the opportunity to upload the documentation, go to a branch close to you along with the documentation, a valid passport and €250 EUR, which activates the account. Upon completion, you will be issued a debit card.') }}</p>
        <h2 class="mt-5">{{ __('Required documents for applying for Golden Visa') }}</h2>
        <ul class="multicolumn">
            <li>{{ __('Valid passport;') }}</li>
            <li>{{ __('Copy of valid passport and travel documents with which you enter Portugal;') }}</li>
            <li>{{ __('Proof of health insurance in Portugal;') }}</li>
            <li>{{ __('Your criminal records from your country of origin and/or from the country (or countries) in which you live for more than a year. The statement of criminal records must be issued within 3 months of the online application and certified translated into Portuguese;') }}</li>
            <li>{!! __('Filling in a form authorizing SEF :sef to obtain an extract from your Portuguese criminal records;', ['sef' => '(<span lang="pt">' . __('Serviço de Estrangeiros e Fronteiras') . '</span>)']) !!}</li>
            <li>{{ __('Declaration by you, in which you confirm that you will comply with the investment requirements;') }}</li>
            <li>{{ __('Documents showing good standing with the Portuguese tax and customs authority and the social security system. They can be issued a maximum of 45 days before your online application;') }}</li>
            <li>{{ __('Receipt showing that you have already paid the fee for processing the application;') }}</li>
            <li>{{ __('Additional documentation related to your investments.') }}</li>
        </ul>
        <p>{{ __('The documentation must be issued no less than 90 days before the date of submission of the online application.') }}</p>
        <p>{{ __('All non-Portuguese documents must be translated and certified.') }}</p>
        <p>{{ __('You can count on your lawyer to assist you in collecting documents in Portugal, including the documentation related to your investment.') }}</p>
        <h2 class="mt-5">{{ __('Documents required related to an investment of €500,000 EUR') }}</h2>
        <ul class="multicolumn">
            <li>{{ __('Real estate acquisition act(s) or pre-contractual agreement (for an amount equal to or over €500,000 EUR);') }}</li>
            <li>{{ __('Declaration by a credit institution authorized or registered in Portugal confirming the transfer of an amount equal to or above €500,000 EUR;') }}</li>
            <li>{{ __('Land Secretary Certificate;') }}</li>
            <li>{{ __('Legal description of the real estate;') }}</li>
            <li>{{ __('Excerpt from the register of companies (in case the investment is made through a limited liability company), of which the applicant is a shareholder.') }}</li>
        </ul>
        <h2 class="mt-5">{{ __('Documents required related to an investment of €350,000 EUR (real estate rehabilitation)') }}</h2>
        <p>{{ __('The applicant must demonstrate that the investment is made for the minimum amount required by submitting the following documentation:') }}</p>
        <ul class="multicolumn">
            <li>{{ __('Act for the acquisition of real estate or the pre-contractual agreement (for an amount equal to or over €350,000 EUR or €280,000 EUR in a low population area;') }}</li>
            <li>{{ __('Declaration by a credit institution authorized or registered in Portugal, confirming the transfer of an amount equal to or above €350,000 EUR or €280,000 EUR in a low population area;') }}</li>
            <li>{{ __('Land Secretary Certificate.') }}</li>
            <li>{{ __('Legal description of the real estate;') }}</li>
            <li>{{ __('Excerpt from the register of companies (in case the investment is made through a limited liability company), of which the applicant is a shareholder;') }}</li>
            <li>{{ __('Prior notification or request for permission to carry out urban rehabilitation works or a contract for the implementation of real estate rehabilitation works;') }}</li>
            <li>{{ __('Payment of the contract for construction or deposit in the bank account of the applicant, without fees or obligations, of the price of the construction contract, in a credit institution authorized or registered in Portugal;') }}</li>
            <li>{{ __('Supporting evidence of the construction of real estate for 30 years, at least in case such information is not specified in the legal description or Declaration of the competent entity certifying the real estate is in a rehabilitation area.') }}</li>
        </ul>
        <h2 class="mt-5">{{ __('Submission of the application') }}</h2>
        <div class="multicolumn">
            <p>{{ __('To make sure that the process goes well, trust a lawyer and he will assist you during the trial. If you want to handle it yourself, the steps you need to take are few. You must go to the SEF application registration form and fill in everything without missing the information required. Attach all supporting documentation and remember that it must be legalized and translated into Portuguese. You can count on a lawyer to check everything before submitting the application.') }}</p>
            <p>{{ __('Once the application has been approved by the SEF, you must pay a fee for processing the application.') }}</p>
            <p>{!! __('In a few weeks you will be able to choose a date and location suitable for you and your family to go for an interview. The choice is possible online on the :url.', ['url' => '<a class="external-link" target="_blank" href="https://www.sef.pt/en/">' . __('SEF page') . '</a>']) !!}</p>
            <p>{{ __('In the personal interview, bring with you all the documents you have attached online in their original version.') }}</p>
            <p>{{ __('SEF will inform you in a few months of confirmation of a residence permit in Portugal. Payment of the rest of the application fee is made at this stage. It is worth €5,324.60 EUR per family member.') }}</p>
            <p>{{ __('You will then be able to get your Portuguese residence card.') }}</p>
        </div>
        <h2 class="mt-5">{{ __('The application and renewal process') }}</h2>
        <div class="multicolumn">
            <p>{{ __('You can submit your application and supporting documentation easily and conveniently online. Once SEF has processed and approved your application, you will be able to get a meeting for a personal interview.') }}</p>
            <p>{{ __('The good news is that SEF now allows you to appear for an interview in an area you choose. Thanks to this, the waiting time has dropped, especially in the more sought urban areas.') }}</p>
            <p>{{ __('In order not to confuse anything, most people rely on a lawyer to complete their application. It may take about 6 months after it is sent until it is approved. Many investors decide to handle the application on their own, but it is not recommended.') }}</p>
            <p>{{ __('The application for family members takes place at the same time, paying a processing fee of €532.70 EUR for the first candidate and €83.10 EUR for each subsequent family member.') }}</p>
            <p>{{ __('After the approval of the application, an approval fee of €5,274.40 EUR is paid for each member of the family. After a period of ten to twenty days you will receive a Portuguese residence card, which you will have to renew in 2 years.') }}</p>
            <p>{{ __('The Portuguese golden residence card will allow you to travel freely in the Schengen countries, and the only thing you need to carry extra is a valid passport.') }}</p>
            <p>{{ __('In order to maintain the possibility of residence, it is a necessary condition to spend at least fourteen days in Portugal during the first two years.') }}</p>
            <p>{{ __('To start a renewal process, you need to make sure that there are at least 90 days until your card expires, because that’s the time it takes to renew it.') }}</p>
            <p>{{ __('The renewal process involves taking biometrics (fingerprints, etc.), providing up-to-date criminal records and paying a fee of €2,637.20 EUR for each candidate. In addition to this fee, a fee for processing the application is paid again for €532.70 EUR for the first candidate and €83.10 EUR for each of the family members.') }}</p>
            <p>{{ __('Once you renew your Portuguese residence card, it will be valid for three years. You must have spent at least 21 days in Portugal, and they may be inconsistent.') }}</p>
            <p>{{ __('After the fifth year you can apply for permanent residence or citizenship. If you do not want either, you can continue to renew Golden Visa every three years.') }}</p>
        </div>
        <h2 class="mt-5">{{ __('Do you need to know Portuguese before you get your citizenship?') }}</h2>
        <p>{{ __('You will need to pass the A2 level test. This is a requirement that must be met. This level is at the basic entry level, so it will not be difficult to pass.') }}</p>
        <h2 class="mt-5">{{ __('Let’s summarize the costs you will need to keep in mind') }}</h2>
        <ul class="multicolumn">
            <li>{{ __('By receiving and analyzing the application for a residence permit for investment activity (investor) — €532.70 EUR;') }}</li>
            <li>{{ __('By receiving and analyzing the application for the relatives of the Investor (for each family member) — €83.10 EUR;') }}</li>
            <li>{{ __('For issuing a residence permit for the investment activity (investor and each member of the family) — €5,324.60 EUR;') }}</li>
            <li>{{ __('By receiving and analyzing the application for renewal of a residence permit for investment activity for the investor — €532.70 EUR;') }}</li>
            <li>{{ __('By receiving and analyzing the application for renewal of relatives of the Investor (for each family member) — €83.10 EUR;') }}</li>
            <li>{{ __('For renewal of a residence permit for the investment activity (investor and each member of the family) — €2,662.30 EUR;') }}</li>
            <li>{{ __('To collect the Portuguese residence card in the SEF delegation — €12.90 EUR.') }}</li>
        </ul>
        <h2 class="mt-5">{{ __('Other associated costs') }}</h2>
        <ul>
            <li>{{ __('€369 EUR (including VAT) per year for the investor and his wife fiscal representation;') }}</li>
            <li>{{ __('Notary deed of purchase: €600 EUR (more or less);') }}</li>
            <li>{{ __('Notary POA: €80 EUR (more or less);') }}</li>
            <li>{{ __('Land Registry: €250 EUR for each property;') }}</li>
            <li>{{ __('Health insurance: depending on age, between €25 EUR and €50 EUR each person/month.') }}</li>
        </ul>
        <h2 class="mt-5">{{ __('Process timeline infographic') }}</h2>
        <img loading="lazy" class="img-fluid mt-3" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 500 916'%3E%3C/svg%3E" data-src="{{ Helper::autover('/svg/{subdomain}/infographic-portugal-golden-visa.svg') }}" alt="{{ __('Infographic: Portugal Golden Visa Process Timeline') }}" height="916" width="500">
        <div class="head-section mt-5">
            <h3>{{ __('Trust professional help on the way to buy property in Portugal and to acquire a Portugal Golden Visa') }}</h3>
            <p>{!! __('We at MESPIL, can help you on the way to acquiring a Portuguese Golden Visa. Our team has over 25 years of experience in new development projects, infrastructure construction, and extensive renovation projects in Europe. Today, MESPIL’s main goal is to locate, acquire and develop property in Algarve, :faro, :vilamoura and the capital city of :lisbon, Portugal at lower levels of replacement costs and then remarket through regeneration, rebranding and repositioning, creating successful investment opportunities for our project partners and bring much in demand property solutions to our end buyers.', ['faro' => '<a class="internal-link" href="' . Helper::route('portugal', 'faro') . '">' . __('Faro') . '</a>', 'vilamoura' => '<a class="internal-link" href="' . Helper::route('portugal', 'vilamoura') . '">' . __('Vilamoura') . '</a>', 'lisbon' => '<a class="internal-link" href="' . Helper::route('portugal', 'lisbon') . '">' . __('Lisbon') . '</a>']) !!}</p>
            <p>{{ __('All our award-winning apartments for sale in Portugal are Golden Visa eligible and brought to market turnkey, fully furnished with a 5% guaranteed rental yield. Make the choice to invest in a spacious, modern and fully managed apartment in the top areas of Algarve, Faro and Lisbon.') }}</p>
        </div>
    </div>
@endsection
