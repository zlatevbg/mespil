@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Aaron Tracey, Director - Sales in MESPIL'))
@section('description', __('Aaron’s experience as a high-level property investor spans 20 years prior to joining MESPIL in 2016. He has constructed and sold over 2,500 units in Europe.'))

@section('content')
    <div class="container space-single profile">
        <h1 class="title-border">{{ __('Aaron Tracey') }}<br><small>{{ __('Director - Sales') }}</small></h1>
        <div class="border-left">
            <img loading="eager" width="400" height="400" src="{{ Helper::autover('/img/{subdomain}/team/aaron-tracey.jpg') }}" class="img-fluid" alt="{{ __('Photo of Aaron Tracey') }}">
            <h3 class="my-3">{{ __('Contacts') }}</h3>
            <p class="fa-left">@fas('phone', 'fa-fw fa-lg')<a class="text-secondary" data-track-phone="Profile - Aaron Tracey: " href="tel:+353 86 268 3932">+353 86 268 3932</a></p>
            <p class="fa-left">@fas('envelope', 'fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Profile - Aaron Tracey: " data-email="{{ str_rot13('aaron@mespil.ie') }}">[email]</a></p>
            <p class="fa-left">@fab('linkedin-in', 'fa-fw fa-lg')<a target="_blank" class="text-secondary" href="https://www.linkedin.com/in/aaron-tracey-56b673154/">{{ __('Aaron Tracey @ LinkedIn') }}</a></p>
        </div>
        <div class="ie11-profile-content">
            <p>{{ __('Aaron’s experience as a high-level property investor spans 20 years prior to joining MESPIL in 2016. Having owned and directed multiple property companies, he has successfully constructed and sold over 2,500 units across Europe, operating his previous company, in six offices across the continent with a turnover of over €300 million.') }}</p>
            <p>{{ __('As MESPIL`s Director of Sales, he is instrumental in developing the sales strategies and agency network for the organisation.') }}</p>
            <p>{{ __('His experience encompasses land acquisition, construction, sales, management and lettings with international tour operators.') }}</p>
            <p>{!! __('Aaron is accredited to the :link1 (MRICS) and the :link2 (MSCSI).', ['link1' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.rics.org/eu/">' . __('Royal Institute of Chartered Surveyors') . '</a>', 'link2' => '<a rel="nofollow" target="_blank" class="external-link" href="https://scsi.ie/">' . __('Society for Chartered Surveyors in Ireland') . '</a>']) !!}</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "@id": "{{ config('app.url') }}/#PersonAaronTracey",
            "url": "{{ Helper::route('profile', 'aaron-tracey') }}",
            "email":"mailto:aaron@mespil.ie",
            "telephone": "+353 86 268 3932",
            "givenName": "Aaron",
            "familyName": "Tracey",
            "worksFor": {
                "@type": "Organization",
                "name": "MESPIL"
            },
            "jobTitle": "{{ __('Director - Sales') }}",
            "image": "{{ Helper::autover('/img/{subdomain}/team/aaron-tracey.jpg') }}",
            "gender": "Male",
            "sameAs" : [
                "https://www.linkedin.com/in/aaron-tracey-56b673154/"
            ],
            "nationality": {
                "@type": "Country",
                "name": "Ireland"
            }
        }
    </script>
@endpush
