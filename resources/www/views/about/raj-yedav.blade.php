@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Raj Yedav, Sales Manager - India in MESPIL'))
@section('description', __('Mr Yedav has an MBA from Dublin Business School and a Business Commerce Degree from the University of Delhi.'))

@section('content')
    <div class="container space-single profile">
        <h1 class="title-border">{{ __('Raj Yedav') }}<br><small>{{ __('Sales Manager - India') }}</small></h1>
        <div class="border-left">
            <img loading="eager" width="400" height="400" src="{{ Helper::autover('/img/{subdomain}/team/raj-yedav.jpg') }}" class="img-fluid" alt="{{ __('Photo of Raj Yedav') }}">
            <h3 class="my-3">{{ __('Contacts') }}</h3>
            <p class="fa-left">@fas('phone', 'fa-fw fa-lg')<a class="text-secondary" data-track-phone="Profile - Raj Yedav: " href="tel:+353 86 605 5998">+353 86 605 5998</a></p>
            <p class="fa-left">@fas('envelope', 'fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Profile - Raj Yedav: " data-email="{{ str_rot13('raj@mespil.ie') }}">[email]</a></p>
            <p class="fa-left">@fab('linkedin-in', 'fa-fw fa-lg')<a target="_blank" class="text-secondary" href="https://www.linkedin.com/in/raj-yadav-6a121b37">{{ __('Raj Yedav @ LinkedIn') }}</a></p>
        </div>
        <div class="ie11-profile-content">
            <p>{{ __('Prior to Setting up Strandbray Management Ltd, Mr Yedav accumulated over 10 years of experience in Operations Management and Finance with IPL Marketing as a Commercial Director. He played a key role in establishing 5 service station sites in the provinces of Leinster and Munster in Ireland with growing revenue to a total of €38 million in 2017.') }}</p>
            <p>{{ __('In 2018 he entered the hotel and hospitality industry opening The Strand Hotel in Bray, Co. Wicklow a business that currently boasts the highest rating for listed accommodation in the area and the first venue to introduce Caffe Vergnano to Ireland, the oldest Italian coffee roasting company.') }}</p>
            <p>{{ __('Mr Yedav has an MBA from Dublin Business School and a Business Commerce Degree from the University of Delhi.') }}</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "@id": "{{ config('app.url') }}/#PersonRajYedav",
            "url": "{{ Helper::route('profile', 'raj-yedav') }}",
            "email":"mailto:raj@mespil.ie",
            "telephone": "+353 86 605 5998",
            "givenName": "Raj",
            "familyName": "Yedav",
            "worksFor": {
                "@type": "Organization",
                "name": "MESPIL"
            },
            "jobTitle": "{{ __('Sales Manager - India') }}",
            "image": "{{ Helper::autover('/img/{subdomain}/team/raj-yedav.jpg') }}",
            "gender": "Male",
            "sameAs" : [
                "https://www.linkedin.com/in/raj-yadav-6a121b37"
            ],
            "nationality": {
                "@type": "Country",
                "name": "India"
            }
        }
    </script>
@endpush
