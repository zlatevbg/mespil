@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Thomas Kottmann, Director - Funding in MESPIL'))
@section('description', __('Thomas is a Member of the Executive Board and Head of Investor Relations for MESPIL. He is responsible for strengthening and expanding MESPIL’s investor network'))

@section('content')
    <div class="container space-single profile">
        <h1 class="title-border">{{ __('Thomas Kottmann') }}<br><small>{{ __('Director - Funding') }}</small></h1>
        <div class="border-left">
            <img loading="eager" width="400" height="400" src="{{ Helper::autover('/img/{subdomain}/team/thomas-kottmann.jpg') }}" class="img-fluid" alt="{{ __('Photo of Thomas Kottmann') }}">
            <h3 class="my-3">{{ __('Contacts') }}</h3>
            <p class="fa-left">@fas('phone', 'fa-fw fa-lg')<a class="text-secondary" data-track-phone="Profile - Thomas Kottmann: " href="tel:+41 76 424 24 20">+41 76 424 24 20</a></p>
            <p class="fa-left">@fas('envelope', 'fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Profile - Thomas Kottmann: " data-email="{{ str_rot13('tk@mespil.ie') }}">[email]</a></p>
            <p class="fa-left">@fab('linkedin-in', 'fa-fw fa-lg')<a target="_blank" class="text-secondary" href="https://www.linkedin.com/in/thomas-kottmann-3431102/">{{ __('Thomas Kottmann @ LinkedIn') }}</a></p>
        </div>
        <div class="ie11-profile-content">
            <p>{{ __('Thomas Kottmann was appointed a Member of the Executive Board and Head of Investor Relations for MESPIL in November 2019.') }}</p>
            <p>{!! __('He is responsible for strengthening and expanding MESPIL’s investor network, as well as ensuring successful investment preparedness for each of our :link whilst maintaining strong and transparent relationships with our investors.', ['link' => '<a class="internal-link" href="' . Helper::route('portugal-investment-projects') . '">' . __('Portuguese real estate investment projects') . '</a>']) !!}</p>
            <p>{!! __('His comprehensive knowledge in advising strategic clients (UHNWI and Single Family Offices) is the result of almost 30 years in Swiss banking. Thomas held senior roles with :link1 and a Private Bank with previous positions in :link2, :link3 and :link4.', ['link1' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.credit-suisse.com/">' . __('Credit Suisse') . '</a>', 'link2' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.ml.com/">' . __('Merrill Lynch') . '</a>', 'link3' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.ubs.com/">' . __('UBS') . '</a>', 'link4' => '<a rel="nofollow" target="_blank" class="external-link" href="https://www.bk.mufg.jp/">' . __('Bank of Tokyo-Mitsubishi') . '</a>']) !!}</p>
            <p>{{ __('Thomas Kottmann is an Honorary Consul of Switzerland in the Algarve, Portugal, is a Certified International Investment Analyst (CIIA) and holds a Diploma as a Swiss Wealth Manager and Financial Analyst.') }}</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Person",
            "@id": "{{ config('app.url') }}/#PersonThomasKottmann",
            "url": "{{ Helper::route('profile', 'thomas-kottmann') }}",
            "email":"mailto:tk@mespil.ie",
            "telephone": "+41 76 424 24 20",
            "givenName": "Thomas",
            "familyName": "Kottmann",
            "worksFor": {
                "@type": "Organization",
                "name": "MESPIL"
            },
            "jobTitle": "{{ __('Director - Funding') }}",
            "image": "{{ Helper::autover('/img/{subdomain}/team/thomas-kottmann.jpg') }}",
            "gender": "Male",
            "sameAs" : [
                "https://www.linkedin.com/in/thomas-kottmann-3431102/"
            ]
        }
    </script>
@endpush
