@extends(Helper::subdomain() . '::layouts.main')

@section('title', __('Get in touch with us at MESPIL'))
@section('description', __('Contact us ✉ if you are a real estate investor interested in partnering with MESPIL or you are looking for Portugal Golden Visa home in the Algarve or Lisbon.'))

@section('content')
    <div class="container space-single text-center">
        <h1 class="title-border mb-5 text-center">{{ __('We look forward to hearing from you') }}</h1>
        <p class="lead">{{ __('Thank you for your interest with MESPIL.') }}</p>
        <p>{{ __('Please select from the dropdown menu your area of interest and provide us with any relevant additional info in the box below and we will get back to you within 24 hours.') }}</p>
    </div>

    <div class="container space-double">
       <div class="row row-cols-1 row-cols-xl-2 mb-n5">
            <div class="col mb-5 position-relative">
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col mb-5">
                        <p class="h3 border-bottom pb-3 mb-4">{{ __('Phone') }}</p>
                        @fas('phone', 'text-primary fa-fw fa-lg')
                        <ul class="list-unstyled d-inline-block align-top mb-0">
                            <li>{{ __('India') }}: <a class="text-secondary" data-track-phone="Contact: " href="tel:{{ __('mespil.phone.india') }}">{{ __('mespil.phone.india') }}</a></li>
                            <li>{{ __('Ireland') }}: <a class="text-secondary" data-track-phone="Contact: " href="tel:{{ __('mespil.phone.ireland') }}">{{ __('mespil.phone.ireland') }}</a></li>
                            <li>{{ __('Portugal') }}: <a class="text-secondary" data-track-phone="Contact: " href="tel:{{ __('mespil.phone.portugal') }}">{{ __('mespil.phone.portugal') }}</a></li>
                        </ul>
                    </div>
                    <div class="col mb-5">
                        <p class="h3 border-bottom pb-3 mb-4">{{ __('E-mail') }}</p>
                        <p class="fa-left">@fas('envelope', 'text-primary fa-fw fa-lg')<a class="encoded-email text-secondary" data-track-email="Contact: " data-email="{{ str_rot13(__('mespil.email')) }}">[email]</a></p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 mb-n5">
                    <div class="col mb-5">
                        <p class="h3 border-bottom pb-3 mb-4">{{ __('Follow Us') }}</p>
                        <p>@fab('linkedin-in', 'fa-fw fa-lg text-primary')<a class="text-secondary ml-1" href="{{ __('mespil.linkedin') }}">{{ __('MESPIL @ LinkedIn') }}</a></p>
                        <p>@fab('facebook-f', 'fa-fw fa-lg text-primary')<a class="text-secondary ml-1" href="{{ __('mespil.facebook') }}">{{ __('MESPIL @ Facebook') }}</a></p>
                        <p>@fab('twitter', 'fa-fw fa-lg text-primary')<a class="text-secondary ml-1" href="{{ __('mespil.twitter') }}">{{ __('MESPIL @ Twitter') }}</a></p>
                        <p>@fab('youtube', 'fa-fw fa-lg text-primary')<a class="text-secondary ml-1" href="{{ __('mespil.youtube') }}">{{ __('MESPIL @ YouTube') }}</a></p>
                    </div>
                    <div class="col mb-5 font-size-sm">
                        <p class="h3 border-bottom pb-3 mb-4">{{ __('Address') }}</p>
                        <ul class="addresses fa-ul ml-4 mb-0">
                            <li class="position-relative mb-3">
                                <a class="stretched-link" href="#" data-id="0"></a>
                                @fas('long-arrow-alt-right', 'float-right fa-2x')
                                <span class="fa-li">@fas('map-marker-alt', 'text-primary fa-fw fa-lg')</span>
                                <p class="w-90"><strong>{{ __('MESPIL Ireland') }}</strong><br>{{ __('mespil.address.ireland') }}</p>
                            </li>
                            <li class="position-relative">
                                <a class="stretched-link" href="#" data-id="1"></a>
                                @fas('long-arrow-alt-right', 'float-right fa-2x')
                                <span class="fa-li">@fas('map-marker-alt', 'text-primary fa-fw fa-lg')</span>
                                <p class="w-90"><strong>{{ __('MESPIL Portugal') }}</strong><br>{{ __('mespil.address.portugal') }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div id="contact-map"></div>
            </div>
        </div>

        <div id="contact" class="contact-form-wrapper space-double">
            <h2 class="text-center">{{ __('Contact Form') }}</h2>
            <p class="text-center">{{ __('To request a callback, include your phone number.') }}</p>

            <form method="POST" action="{{ Helper::route('email-contact') }}" id="contact-form" class="mt-5 max-width-sm ml-auto mr-auto" data-ajax data-ajax-alert-position="replace" data-ajax-alert-dismissible="false" data-ajax-alert-class="text-center">
                @csrf

                <div class="replace-wrapper">
                    <div class="form-group">
                        <label for="area_of_interest" @error('area_of_interest') class="is-invalid" @enderror>{{ __('Area of interest') }}</label>
                        <span class="invalid-feedback invalid-feedback-top" role="alert">
                            @error('area_of_interest')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                        <select id="area_of_interest" class="form-control form-control-lg @error('area_of_interest') is-invalid @enderror" name="area_of_interest">
                            @foreach ($options as $key => $option)
                                <option @if ((!Request::get('interest') && $key == 'general') || (Request::get('interest') == $key)) selected @endif value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name" @error('name') class="is-invalid" @enderror>{{ __('Name') }}</label>
                        <span class="invalid-feedback invalid-feedback-top" role="alert">
                            @error('name')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email" @error('email') class="is-invalid" @enderror>{{ __('E-mail') }}</label>
                        <span class="invalid-feedback invalid-feedback-top" role="alert">
                            @error('email')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" inputmode="email">
                    </div>

                    <div class="form-group">
                        <label for="phone" @error('phone') class="is-invalid" @enderror>{{ __('Phone') }} <small class="font-italic">({{ __('optional') }})</small></label>
                        <span class="invalid-feedback invalid-feedback-top" role="alert">
                            @error('phone')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                        <input id="phone" type="tel" class="form-control form-control-lg @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" inputmode="tel">
                    </div>

                    <div class="form-group">
                        <label for="message" @error('message') class="is-invalid" @enderror>{{ __('Message') }}</label>
                        <span class="invalid-feedback invalid-feedback-top" role="alert">
                            @error('message')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                        <div class="grow-wrap">
                            <textarea id="message" class="form-control form-control-lg @error('message') is-invalid @enderror" name="message" required autocomplete="off" onInput="this.parentNode.dataset.replicatedValue = this.value">{{ old('message') }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subscribe">{{ __('Stay in touch') }}</label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="subscribe" name="subscribe" value="1">
                            <label class="form-check-label" for="subscribe">{{ __('Subscribe to our latest news') }}</label>
                        </div>
                        <small class="form-text text-muted">{{ __('We’ll never share your email with anyone else.') }}</small>
                    </div>

                    <div class="form-group @error('recaptcha') is-invalid @enderror">
                        <span class="invalid-feedback invalid-feedback-top" role="alert">
                            @error('recaptcha')
                                <strong>{{ $message }}</strong>
                            @enderror
                        </span>
                        <div style="min-height: 78px;" class="form-control form-control-validation @error('recaptcha') is-invalid @enderror" id="recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                    </div>

                    <button type="submit" class="btn btn-lg btn-secondary fa-left">{{ __('Send Message') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        loadjs(
            [
                'https://maps.googleapis.com/maps/api/js?key=AIzaSyAJYfP60IN5xtd1gFYq6Sx3-Zo_E5gIkUI&language={{ Language::locale() }}&callback=initMap',
                'https://www.google.com/recaptcha/api.js?hl={{ Language::locale() }}&onload=initRecaptcha&render=explicit',
            ],
            {
                async: false,
            }
        );

        let map;
        let center;
        let zoom;
        const markers = [];
        const offices = [
            {
                lat: 53.122784,
                lng: -6.077008,
                zoom: 14,
                title: '{{ __('MESPIL Ireland') }}',
            },
            {
                lat: 37.083980,
                lng: -8.083847,
                zoom: 13,
                title: '{{ __('MESPIL Portugal') }}',
            },
        ];

        function initMap() {
            const bounds = new google.maps.LatLngBounds();
            for (let i = 0; i < offices.length; i++) {
                bounds.extend({lat: offices[i].lat, lng: offices[i].lng});
            }

            center = bounds.getCenter();

            map = new google.maps.Map(document.getElementById('contact-map'), {
                zoom: 4,
                center: center,
                streetViewControl: false,
                mapTypeControl: false,
                scaleControl: false,
                rotateControl: false,
                clickableIcons: false,
                styles: [
                  {
                    featureType: 'all',
                    stylers: [{ "saturation": -100 }]
                  },
                  {
                    featureType: 'poi',
                    stylers: [{visibility: 'off'}]
                  },
                  {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                  }
                ],
            });

            map.fitBounds(bounds);
            zoom = map.getZoom();

            for (let i = 0; i < offices.length; i++) {
                markers.push(new google.maps.Marker({
                    map: map,
                    position: {lat: offices[i].lat, lng: offices[i].lng},
                    title: offices[i].title,
                    icon: {
                        url: "{{ Helper::autover('/svg/{subdomain}/marker-mespil.svg') }}",
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(50, 13),
                        scaledSize: new google.maps.Size(100, 26),
                    },
                }));

                markers[i].addListener('dblclick', function() {
                    map.panTo(markers[i].getPosition());
                    smoothZoom(map, offices[i].zoom, map.getZoom());
                });
            }

            google.maps.event.addDomListener(window, 'resize', function() {
                google.maps.event.trigger(map, 'resize');
                map.panTo(center);
            });
        }

        document.querySelector('.addresses').addEventListener('click', function(e) {
            e.preventDefault();

            const id = e.target.getAttribute('data-id')

            map.panTo({lat: offices[id].lat, lng: offices[id].lng});
            smoothZoom(map, offices[id].zoom, map.getZoom());
            // map.setZoom(offices[id].zoom);
        });

        function smoothZoom (map, max, current) {
            if (current >= max) {
                return;
            } else {
                google.maps.event.addListenerOnce(map, 'zoom_changed', function(event) {
                    smoothZoom(map, max, current + 1);
                });
                setTimeout(function() { map.setZoom(current) }, 100);
            }
        }

        function initRecaptcha() {
            grecaptcha.render('recaptcha', {}, true)
        }
    </script>
@endpush
