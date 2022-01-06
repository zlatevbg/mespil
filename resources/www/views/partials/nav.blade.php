<nav class="navbar-header navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ Helper::route() }}">
        <svg class="logo-full" viewBox="0 0 100 25.96">
            <use xlink:href="#logo"></use>
        </svg>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <div class="d-flex align-items-center"><span class="navbar-toggler-text">{{ __('MENU') }}&nbsp;</span><span class="navbar-toggler-icon"></span></div>
    </button>

    <div class="collapse navbar-collapse" id="navbar-header">
        <ul class="navbar-nav ml-auto">
            @foreach (__('nav.header') as $slug => $route)
                @isset ($route['children'])
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Helper::matchCurrentSlugToRoute($route, null, null, true) ? 'active' : '' }}" href="{{ Helper::route($slug) }}" id="navbarHeader{{ $loop->iteration }}" role="button" data-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false">{{ __($route['name']) }}</a>
                        <div class="dropdown-menu" aria-labelledby="navbarHeader{{ $loop->iteration }}">
                            @foreach ($route['children'] as $childSlug => $childRoute)
                                <a class="dropdown-item {{ Helper::matchCurrentSlugToRoute($route, $childSlug, $childRoute) ? 'active' : '' }}" href="{{ Helper::route((isset($childRoute['parent']) ? $slug . '/' : '') . $childSlug) }}">{{ __($childRoute['name']) }}</a>
                            @endforeach
                        </div>
                    </li>
                @else
                    <li class="nav-item {{ Helper::matchCurrentSlugToRoute($route) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ Helper::route($slug) }}">{{ __($route['name']) }} @if (Helper::slug() === $route['slug'])<span class="sr-only">{{ __('(current)') }}</span>@endif</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</nav>
