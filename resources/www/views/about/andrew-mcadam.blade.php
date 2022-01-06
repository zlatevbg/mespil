@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Andrew McAdam, Director - Finance in MESPIL'))
@section('description', __('A highly experienced Financial Director, Andrew co-founded MESPIL with Tom O’Connor. He has long history of working in the investment management industry.'))

@section('content')
    <div class="container space-single profile">
        <h1 class="title-border">{{ __('Andrew McAdam') }}<br><small>{{ __('Director - Finance') }}</small></h1>
        <div class="border-left">
            <img loading="eager" width="400" height="400" src="{{ Helper::autover('/img/{subdomain}/team/andrew-mcadam.jpg') }}" class="img-fluid" alt="{{ __('Photo of Andrew McAdam') }}">
            <h3 class="my-3">{{ __('Contacts') }}</h3>
            <p class="fa-left">@fas('phone', 'fa-fw fa-lg')<a class="text-secondary" data-track-phone="Profile - Andrew McAdam: " href="tel:+353 87 694 4468">+353 87 694 4468</a></p>
            <p class="fa-left">@fas('envelope', 'fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Profile - Andrew McAdam: " data-email="{{ str_rot13('andrew@mespil.ie') }}">[email]</a></p>
            <p class="fa-left">@fab('linkedin-in', 'fa-fw fa-lg')<a target="_blank" class="text-secondary" href="https://www.linkedin.com/in/andrew-mcadam-95a77930/">{{ __('Andrew McAdam @ LinkedIn') }}</a></p>
        </div>
        <div class="ie11-profile-content">
            <p>{!! __('A highly experienced Financial Director, Andrew co-founded MESPIL with :link. His long history of working in the investment management industry has given him an invaluable knowledge and experience that he’s successfully leveraged in his role in the company.', ['link' => '<a class="internal-link" href="' . Helper::route('profile', 'tom-oconnor') . '">' . __('Tom O’Connor') . '</a>']) !!}</p>
            <p>{{ __('Andrew’s areas of expertise are Business Planning, Tax, Management, Risk Management and Business Development and in his role as financial controller of MESPIL he creates unique financial models, and develops innovative commercialisation strategies.') }}</p>
            <p>{{ __('He has considerable experience in raising capital for client companies, with a solid background in preparation for investment, leading investment rounds, gaining access to finance, deal structuring, negotiation and successful execution.') }}</p>
            <p>{{ __('Prior to MESPIL, Andrew has controlled the finance of companies within the property sector, eLearning, healthcare, and distribution.') }}</p>
            <p>{!! __('He holds a BA in Accounting and Finance and is a Fellow of the :link.', ['link' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.charteredaccountants.ie/">' . __('Institute of Chartered Accountants in Ireland') . '</a>']) !!}</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "@id": "{{ config('app.url') }}/#PersonAndrewMcAdam",
            "url": "{{ Helper::route('profile', 'andrew-mcadam') }}",
            "email":"mailto:andrew@mespil.ie",
            "telephone": "+353 87 694 4468",
            "givenName": "Andrew",
            "familyName": "McAdam",
            "worksFor": {
                "@type": "Organization",
                "name": "MESPIL"
            },
            "jobTitle": "{{ __('Director - Finance') }}",
            "image": "{{ Helper::autover('/img/{subdomain}/team/andrew-mcadam.jpg') }}",
            "gender": "Male",
            "sameAs" : [
                "https://www.linkedin.com/in/andrew-mcadam-95a77930/"
            ],
            "nationality": {
                "@type": "Country",
                "name": "Ireland"
            }
        }
    </script>
@endpush
