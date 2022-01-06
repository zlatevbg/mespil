<link rel="canonical" href="{{ Helper::alternate() }}" />
@foreach (Language::subdomain('www')->getLocales() as $locale)
    @if (Helper::hasAlternate($locale))
        <link rel="alternate" hreflang="{{ $locale }}" href="{{ Helper::alternate($locale) }}" />
        @if ($locale == 'en')
            <link rel="alternate" hreflang="x-default" href="{{ Helper::alternate($locale) }}" />
        @endif
    @endif
@endforeach
