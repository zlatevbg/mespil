@if (Helper::slug())
    <div class="footer-banner bg-primary d-flex align-items-center">
        <img loading="lazy" class="img-fluid" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 680 250'%3E%3C/svg%3E" data-src="{{ Helper::autover('/img/{subdomain}/monument-to-the-discoverers-lisbon.jpg') }}" alt="{{ __('Monument to the discoverers in Lisbon, Portugal. Marble memorial of world famous sailors and explorers.') }}" height="250" width="680">
        <span class="text-white text-uppercase m-auto">{{ __('Bringing Portugal') }}<br>{{ __('To The World') }}</span>
    </div>
@endif

<div class="bg-light">
    <div class="footer container-fluid d-flex flex-wrap align-items-center">
        <a class="m-3" href="{{ Helper::route() }}">
            <svg class="logo-full" viewBox="0 0 100 25.96">
                <use xlink:href="#logo"></use>
            </svg>
        </a>

        <img class="m-3" loading="lazy" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 263 100'%3E%3C/svg%3E" data-src="{{ Helper::autover('/svg/{subdomain}/award.svg') }}" alt="{{ __('European Property Awards: Winner 2018-2021') }}" height="100" width="263">

        <form method="POST" action="{{ Helper::route('email-subscribe') }}" id="subscribe-form" class="position-relative m-3" data-ajax data-ajax-disable-alert-header>
            @csrf

            <div class="d-flex justify-content-center justify-content-xl-end">
                <div class="form-group mb-0">
                    <small>{{ __('Stay in touch, Subscribe to our latest news') }}</small>
                    <div class="input-group">
                        <label class="sr-only @error('email_subscribe') is-invalid @enderror" for="email_subscribe">{{ __('E-mail') }}</label>
                        <span class="invalid-feedback invalid-feedback-top" role="alert">
                            @error('email_subscribe')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                        <input id="email_subscribe" type="email" class="form-control @error('email_subscribe') is-invalid @enderror" placeholder="{{ __('Type your e-mail...') }}" name="email_subscribe" value="{{ old('email_subscribe') }}" required autocomplete="email" inputmode="email" aria-describedby="emailSubscribe">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary fa-left">{{ __('Subscribe me') }}</button>
                        </div>
                    </div>
                    <small id="emailSubscribe" class="form-text text-muted">{{ __('We’ll never share your email with anyone else.') }}</small>
                </div>
            </div>
        </form>
    </div>
</div>

<nav class="navbar-footer bg-secondary py-3">
    <ul class="container list-unstyled mb-0 d-flex flex-row flex-wrap justify-content-center">
        @foreach (__('nav.footer') as $slug => $route)
            @isset ($route['children'])
                <li class="nav-item my-2 dropdown">
                    <a class="nav-link dropdown-toggle {{ in_array(Helper::slug(), array_column($route['children'], 'slug')) ? 'active' : '' }}" href="{{ Helper::route($slug) }}" id="navbarFooter{{ $loop->iteration }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __($route['name']) }}</a>
                    <div class="dropdown-menu" aria-labelledby="navbarFooter{{ $loop->iteration }}">
                        @foreach ($route['children'] as $childSlug => $childRoute)
                            <a class="dropdown-item {{ (Helper::slug() === $childRoute['slug'] && !Request::segment(2)) ? 'active' : '' }}" href="{{ Helper::route($childSlug) }}">{{ __($childRoute['name']) }}</a>
                        @endforeach
                    </div>
                </li>
            @else
                <li class="nav-item my-2 {{ Helper::slug() === $route['slug'] ? 'active' : '' }}">
                    <a class="nav-link" href="{{ Helper::route($slug) }}">{{ __($route['name']) }} @if (Helper::slug() === $route['slug'])<span class="sr-only">{{ __('(current)') }}</span>@endif</a>
                </li>
            @endif
        @endforeach
    </ul>
</nav>

<div class="bg-light">
    <div class="container text-center">
        <p class="pt-3"><small>{{ __('MESPIL is affiliated with both the Society of Chartered Surveyors Ireland (SCSI) and the Royal Institution of Chartered Surveyors (RICS).') }}</small></p>
        <img loading="lazy" class="my-3 mx-3" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 35'%3E%3C/svg%3E" data-src="{{ Helper::autover('/svg/{subdomain}/rics.svg') }}" alt="{{ __('Logo: Royal Institution of Chartered Surveyors') }}" height="35" width="100">
        {{-- <img loading="lazy" class="my-3 mx-3" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 35'%3E%3C/svg%3E" data-src="{{ Helper::autover('/svg/{subdomain}/psra.svg') }}" alt="{{ __('Logo: Property Services Regulatory Authority') }}" height="35" width="100"> --}}
        <img loading="lazy" class="my-3 mx-3" src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 156 35'%3E%3C/svg%3E" data-src="{{ Helper::autover('/svg/{subdomain}/scsi.svg') }}" alt="{{ __('Logo: Society of Chartered Surveyors Ireland') }}" height="35" width="156">
        <p class="pb-3"><small>{{ __('MESPIL is registered as Mespil European Ventures in the Company’s Registrations’ Office Ireland under incorporation number 575666') }}</small></p>
    </div>
</div>
