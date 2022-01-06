<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', App::getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="format-detection" content="telephone=no">

    @include(Helper::subdomain() . '::partials/favicon')
    @include(Helper::subdomain() . '::partials/social')
    @include(Helper::subdomain() . '::partials/alternate')

    @stack('meta')

    <link rel="preload" href="/fonts/museo-sans/museo-sans-100.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/museo-sans/museo-sans-300.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/museo-sans/museo-sans-500.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/museo-sans/museo-sans-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/museo-sans/museo-sans-900.woff2" as="font" type="font/woff2" crossorigin>

    <link href="{{ Helper::autover('/css/{subdomain}/main.css') }}" rel="stylesheet">
    <link href="{{ Helper::autover('/css/{subdomain}/vendor/cookieconsent.css') }}" rel="stylesheet">

    @stack('styles')

    @production
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140423490-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-5WLCYTK60M');
          gtag('config', 'UA-140423490-1');
          gtag('config', 'AW-818585655');
        </script>

        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '317719542645034');
          fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=317719542645034&ev=PageView&noscript=1" /></noscript>
        <!-- End Facebook Pixel Code -->

        {{-- <script type="text/javascript">
        _linkedin_partner_id = "1378921";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
        </script><script type="text/javascript">
        (function(){var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);})();
        </script>
        <noscript>
        <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1378921&fmt=gif" />
        </noscript> --}}

        <script type="text/javascript">
            (function(c,l,a,r,i,t,y){
                c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
                y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
            })(window, document, "clarity", "script", "4udpayssvf");
        </script>
    @endproduction

    @stack('tags')
</head>
<body>
    @include(Helper::subdomain() . '::partials/logo')

    <header>
        @include(Helper::subdomain() . '::partials/header')
    </header>

    <main>
        @include(Helper::subdomain() . '::partials/errors')
        @include(Helper::subdomain() . '::partials/success')

        @yield('content')
    </main>

    <footer>
        @include(Helper::subdomain() . '::partials/footer')
    </footer>

    <script src="{{ Helper::autover('/js/{subdomain}/vendor/loadjs.js') }}"></script>
    <script>
        if (typeof gtag != 'undefined') {
            const trackedPhones = document.querySelectorAll('[data-track-phone]');
            for (i = 0; i < trackedPhones.length; ++i) {
                trackedPhones[i].addEventListener('click', function(e) {
                    gtag('event', 'phone', {'event_category': 'Phones', 'event_action': 'Click', 'event_label': this.getAttribute('data-track-phone') + this.textContent});
                });
            }

            const trackedEmails = document.querySelectorAll('[data-track-email]');
            for (i = 0; i < trackedEmails.length; ++i) {
                trackedEmails[i].addEventListener('click', function(e) {
                    gtag('event', 'email', {'event_category': 'Emails', 'event_action': 'Click', 'event_label': this.getAttribute('data-track-email') + this.textContent});
                });
            }
        }

        const __ = {
            'icons': {
                'spinner': '@fas('spinner', 'fa-pulse')',
            },
            'text': {
                'error': '{{ __('Whoops!') }} {{ __('There were some problems with your input.') }}',
                'close': '{{ __('Close') }}',
            },

            @php
                $plugins = collect();
                if (in_array(request()->type,  ['property', 'project', 'location'])) {
                    $plugins->push('photoswipe');
                }
            @endphp

            @foreach ($plugins as $plugin)
                '{{ Str::of($plugin)->camel() }}': @json(trans('plugins/' . $plugin)),
            @endforeach
        }

        loadjs(
            [
                '{{ Helper::autover('/js/{subdomain}/vendor/jquery.js') }}',
                '{{ Helper::autover('/js/{subdomain}/vendor/axios.js') }}',
                '{{ Helper::autover('/js/{subdomain}/vendor/popper.js') }}',
                '{{ Helper::autover('/js/{subdomain}/vendor/bootstrap.js') }}',
                '{{ Helper::autover('/js/{subdomain}/main.js') }}',
                '{{ Helper::autover('/js/{subdomain}/ajax.js') }}',
                '{{ Helper::autover('/js/{subdomain}/vendor/vanilla-lazyload.js') }}',
                '{{ Helper::autover('/js/{subdomain}/vendor/cookieconsent.js') }}',
            ],
            'main',
            {
                success: function () {
                    const ll = new LazyLoad({
                        elements_selector: '[loading=lazy]',
                        use_native: true,
                    });

                    window.cookieconsent.initialise({
                        'palette': {
                            'popup': {
                                'background': '#363636'
                            },
                            'button': {
                                'text': '#ffffff',
                                'background': '#bc954d'
                            }
                        },
                        'position': 'bottom-right',
                        'theme': 'block',
                        'content': {
                            header: '{{ __('Cookies used on the website!') }}',
                            message: '{{ __('This website uses cookies to improve your experience.') }}',
                            dismiss: '{{ __('Got it!') }}',
                            allow: '{{ __('Allow cookies') }}',
                            deny: '{{ __('Decline') }}',
                            link: '{{ __('Learn more') }}',
                            href: '{{ Helper::route('privacy-policy') }}',
                            close: '&#x274c;',
                            policy: '{{ __('Cookie Policy') }}',
                            target: '',
                        }
                    });
                },
                async: false,
            }
        );
    </script>

    @stack('scripts')

    @production
        <!-- Twitter universal website tag code -->
        <script>
        !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
        },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
        a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
        // Insert Twitter Pixel ID and Standard Event data below
        twq('init','o5f2z');
        twq('track','PageView');
        </script>
        <!-- End Twitter universal website tag code -->
    @endproduction
</body>
</html>
