@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('MESPIL Newsletter Subscription Confirmation'))
@section('description', __('MESPIL Newsletter Subscription Confirmation'))

@push('meta')
    <meta name="robots" content="noindex" />
@endpush

@section('content')
    <div class="container space-single text-center">
        <h1>{{ __('Thank you!') }}</h1>
        <p>{!! __('Congratulations you’re now a subscriber to the MESPIL newsletter. We will not be sending you unnecessary emails, but if at any time you want to unsubscribe you can do so by clicking unsubscribe at the end of the newsletter email, or contacting us on :email', ['email' => '<a class="encoded-email" data-track-email="Newsletter Subscription Confirmation: " data-email="' . str_rot13(__('mespil.email')) . '">[email]</a>']) !!}</p>
    </div>
@endsection

@push('tags')
    <script>
        if (typeof gtag != 'undefined') {
            gtag('event', 'conversion', {'send_to': 'AW-818585655/Gt65CNTus-gBELfAqoYD'});
            gtag('event', 'subscribe_confirm', {'event_category': 'Forms', 'event_action': 'Confirm', 'event_label': 'Subscribe'});
        }
    </script>
@endpush
