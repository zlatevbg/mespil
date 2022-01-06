@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Main investment risks associated with real estate investment projects'))
@section('description', __('Learn about the investment risks associated with investing in real estate.'))

@push('meta')
    <meta name="robots" content="noindex" />
@endpush

@section('content')
    <div class="container space-single">
        <div class="max-width-lg">
            <h1 class="title-border mb-5">{{ __('Investment Risks') }}</h1>
            <p>{{ __('MESPIL may be adversely affected by delays in the construction and completion of its Real Estate Properties under development. You may lose some or all of your invested monies if the project fails. It may also be difficult assess the future performance of the Real Estate Properties which have a limited track record because they are still under development. There is no assurance that such properties will yield the expected returns. This list is not exhaustive and does not represent all the risks associated with, and considerations relevant to making an investment in MESPIL or your decision to make an investment.') }}</p>
            <h2>{{ __('What Are The Main Risks Associated With Any Investment?') }}</h2>
            <p>{{ __('Almost all investments involve some amount of risk. Set out below are some of the key risks of making an investment in a company or in Real Estate . This list is not exhaustive, and does not represent all the risks associated with, and considerations relevant to making an investment or your decision to make one.') }}</p>
            <h2>{{ __('Development Risks') }}</h2>
            <p>{{ __('The company in which you have invested or who you have invested with, may be adversely affected by delays in the construction and completion of its Real Estate Properties under development. You may lose some or all of your invested monies if the project fails.') }}</p>
            <p>{{ __('It may be difficult for the company to assess the future performance of the Real Estate Properties which have a limited track record because they are still under development. There is no assurance that such properties will yield the expected returns.') }}</p>
            <p>{{ __('The company may be reliant on contractors or subcontractors to carry out its property development and failure by such contractors to perform their obligations may lead to a delay of completion of the project and unexpected costs.') }}</p>
            <h2>{{ __('Real Estate Sector Risks') }}</h2>
            <p>{{ __('The company may operate in a capital-intensive industry and expects to have significant funding needs for its existing business operations and new projects to grow its business. However, there is no assurance that the company will be able to obtain financing on terms that are commercially acceptable.') }}</p>
        </div>
    </div>
@endsection
