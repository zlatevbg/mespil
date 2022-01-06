@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Property solutions and investment opportunities for end buyers'))
@section('description', __('We acquire, develop and manage all of our real estate projects in Portugal as co-investors so your investment is our investment too ✪ Dream Your Future Life'))

@section('content')
    <div class="container space-single text-center">
        <h1 class="title-border text-center ml-auto mr-auto mb-5 max-width-lg">{{ __('Property solutions and investment opportunities for end buyers') }}</h1>
        <p class="lead">{{ __('Dream Your Future Life') }}</p>
        <p>{!! __('At MESPIL we acquire, develop and manage all of our :link as co-investors so your investment is our investment too. All of our properties come turn key – fully furnished, managed, with a rental yield. We know the Portuguese market well and focus on locations in the Algarve, :faro, :vilamoura, and the capital city of :lisbon ensuring the asset is in the right location, a primary driver of our investment results to date.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-properties-for-sale') . '">' . __('real estate projects in Portugal') . '</a>', 'faro' => '<a class="internal-link" href="' . Helper::route('portugal', 'faro') . '">' . __('Faro') . '</a>', 'vilamoura' => '<a class="internal-link" href="' . Helper::route('portugal', 'vilamoura') . '">' . __('Vilamoura') . '</a>', 'lisbon' => '<a class="internal-link" href="' . Helper::route('portugal', 'lisbon') . '">' . __('Lisbon') . '</a>']) !!}</p>
        <p>{!! __('MESPIL are a multi-award winning developer in the Algarve, and this is what sets us apart, :em. We are by your side throughout the process of this new adventure, we are involved in the day to day operations of all of our projects ensuring the very best client experience.', ['em' => '<em>' . __('we are not a sales agent') . '</em>']) !!}</p>
    </div>

    <div id="golden-visa-intro" class="container space-single">
        <div class="card border-0">
            <div class="card-body text-center">
                <h2 class="h5 card-title title-border title-border-secondary mb-4 text-uppercase text-center">{{ __('MESPIL Golden Visa Intro Video') }}</h2>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" playsinline controls preload="metadata" poster="{{ Helper::autover('/img/{subdomain}/for-end-buyers/golden-visa-intro-poster.jpg') }}">
                    <source src="{{ Helper::autover('/video/{subdomain}/golden-visa-intro.mp4') }}" type="video/mp4"/>
                </video>
            </div>
        </div>
    </div>

    <div class="container space-double">
        <div class="row row-cols-1 row-cols-md-2 mb-n5">
            <div class="col mb-5">
                <div class="card card-home text-center h-100">
                    <img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/for-end-buyers/properties-for-sale.jpg') }}" class="card-img img-fluid" alt="{{ __('Woman and man talking about properties for sale in Portugal') }}">
                    <div class="card-body">
                        <h2 class="card-title title-border text-uppercase">{{ __('Properties for Sale') }}@fas('long-arrow-alt-right', 'ml-3')</h2>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('portugal-properties-for-sale') }}">{{ __('Portugal Golden Visa properties for sale with 5% guaranteed rental yields. Buy large, modern, fully furnished and fully managed apartments in top locations in Algarve, Faro, Vilamoura and the capital city of Lisbon.') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card-home text-center h-100">
                    <img loading="lazy" width="640" height="360" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 360'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/for-end-buyers/questions-and-answers.jpg') }}" class="card-img img-fluid" alt="{{ __('Woman and man talking | Customer support') }}">
                    <div class="card-body">
                        <h3 class="card-title title-border text-uppercase">{{ __('FAQ') }}@fas('long-arrow-alt-right', 'ml-3')</h3>
                        <p class="card-text"><a class="internal-link stretched-link" href="{{ Helper::route('for-end-buyers/questions-and-answers') }}">{{ __('Do you have questions about your property purchase? MESPIL make it easy for property buyers to purchase quality real estate in the Algarve, Faro, Vilamoura and the capital city of Lisbon.') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container space-double">
        <div class="row row-cols-1 row-cols-md-2 mb-n5">
            <div class="col mb-5">
                <div class="card card-home no-hover text-center h-100">
                    <div class="card-body d-flex flex-column p-0 card-buyer-actions">
                        <a href="{{ Helper::route('contact') }}?interest=vrtour#contact" class="h3 h-100 d-flex flex-column justify-content-center align-items-center link-golden-visa m-0 border border-light p-3">{{ __('Book Private Viewing or Virtual Tour') }} <small class="h6 font-weight-light mt-1">{{ __('We invite you to learn more about our projects by booking a private viewing or a virtual tour from the comfort of your own home. We are flexible with facilitating different time zones, it would be our pleasure to show you our properties and answer any questions you have.') }}</small><button class="btn btn-outline-primary">{{ __('Book Now') }}</button></a>
                        <a href="{{ Helper::route('contact') }}?interest=callback#contact" class="h3 h-100 d-flex flex-column justify-content-center align-items-center link-golden-visa m-0 border border-light p-3">{{ __('Request a call back now') }} <small class="h6 font-weight-light mt-1">{{ __('We offer a call back or video conference service at a time convenient to you, giving you the opportunity to chat one of our expert MESPIL team members.') }}</small><button class="btn btn-outline-primary">{{ __('Contact Us Now') }}</button></a>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card card-home no-hover text-center h-100">
                    <div class="card-body d-flex flex-column p-0 card-golden-visa">
                        <a href="{{ Helper::route('the-property-buying-process') }}" class="h3 h-100 d-flex flex-column justify-content-center align-items-center m-0 border border-light p-3">{{ __('nav.header.for-end-buyers.children.the-property-buying-process')['name'] }} @isset (__('nav.header.for-end-buyers.children.the-property-buying-process')['intro'])<small class="h6 font-weight-light mt-1">{{ __('nav.header.for-end-buyers.children.the-property-buying-process')['intro'] }}</small>@endisset <button class="btn btn-outline-secondary">{{ __('Read the guide') }}</button></a>
                        <a href="{{ Helper::route('portugal-golden-visa') }}" class="h3 h-100 d-flex flex-column justify-content-center align-items-center m-0 border border-light p-3">{{ __('nav.header.portugal-real-estate-investment-guide.children.portugal-golden-visa')['name'] }} @isset (__('nav.header.portugal-real-estate-investment-guide.children.portugal-golden-visa')['intro'])<small class="h6 font-weight-light mt-1">{{ __('nav.header.portugal-real-estate-investment-guide.children.portugal-golden-visa')['intro'] }}</small>@endisset <button class="btn btn-outline-secondary">{{ __('Learn more') }}</button></a>
                        <a href="{{ Helper::route('nhr-portuguese-tax-residency') }}" class="h3 h-100 d-flex flex-column justify-content-center align-items-center m-0 border border-light p-3">{{ __('nav.header.portugal-real-estate-investment-guide.children.nhr-portuguese-tax-residency')['name'] }} @isset (__('nav.header.portugal-real-estate-investment-guide.children.nhr-portuguese-tax-residency')['intro'])<small class="h6 font-weight-light mt-1">{{ __('nav.header.portugal-real-estate-investment-guide.children.nhr-portuguese-tax-residency')['intro'] }}</small>@endisset <button class="btn btn-outline-secondary">{{ __('Learn more') }}</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const goldenVisaIntroVideo = document.querySelector('#golden-visa-intro video');
        if (goldenVisaIntroVideo) {
            let videoStartEvent = false;
            let videoCompleteEvent = false;

            goldenVisaIntroVideo.onplay = function(e) {
                if (!videoStartEvent && typeof gtag != 'undefined') {
                    gtag('event', 'video_start', {'event_category': 'Video', 'event_action': 'Start', 'event_label': 'Golden Visa Intro'});
                    videoStartEvent = true;
                }
            };

            goldenVisaIntroVideo.onended = function(e) {
                this.load();
                if (!videoCompleteEvent && typeof gtag != 'undefined') {
                    gtag('event', 'video_complete', {'event_category': 'Video', 'event_action': 'Complete', 'event_label': 'Golden Visa Intro'});
                    videoCompleteEvent = true;
                }
            };
        }
    </script>
@endpush
