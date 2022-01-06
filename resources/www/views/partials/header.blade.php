<div class="bg-secondary">
    <div class="container">
        <div class="header">
            <span><a class="encoded-email text-white" data-track-email="Header: " data-email="{{ str_rot13(__('mespil.email')) }}">[email]</a></span>
            <span><a class="text-white" data-track-phone="Header: " href="tel:{{ __('mespil.phone.ireland') }}">{{ __('mespil.phone.ireland') }}</a></span>
            <div class="d-flex">
                <span><a class="fa-brand text-white" href="{{ __('mespil.linkedin') }}">@fab('linkedin-in')</a></span>
                <span class="ml-2"><a class="fa-brand text-white" href="{{ __('mespil.facebook') }}">@fab('facebook-f')</a></span>
                <span class="ml-2"><a class="fa-brand text-white" href="{{ __('mespil.twitter') }}">@fab('twitter')</a></span>
                <span class="ml-2"><a class="fa-brand text-white" href="{{ __('mespil.youtube') }}">@fab('youtube')</a></span>
            </div>
        </div>
    </div>
</div>
<div class="bg-light">
    <div class="container">
        @include(Helper::subdomain() . '::partials/nav')
    </div>
</div>
