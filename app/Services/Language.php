<?php

namespace App\Services;

use Locale;
use App;
use Illuminate\Support\Facades\Request;
use App\Models\Domain;
use Helper;

class Language
{
    protected $useAcceptLanguageHeader = true; // Negotiate locale using the Accept-Language header if it's not defined in the URL
    protected $hideDefaultLocaleInURL = true;
    protected $locales = [];
    protected $languages = [];
    protected $subdomains = [];
    protected $subdomain;

    public function __construct()
    {
        $this->subdomain = Helper::subdomain();
        $this->subdomains = Domain::with('languages')->get()->keyBy('domain');
        $this->locales = $this->subdomains->flatMap(function ($values) {
            return $values->languages->pluck('locale');
        })->unique()->flip();

        if ($this->isValidDomain($this->subdomain)) {
            $this->setLanguages();
        }
    }

    public function subdomain($subdomain)
    {
        if ($this->isValidDomain($subdomain)) {
            $this->subdomain = $subdomain;
        }

        return $this;
    }

    public function setLanguages()
    {
        $languages = $this->subdomains[$this->subdomain]->languages->keyBy('locale');
        $languages = $languages->prepend($languages->pull($this->default()), $this->default());

        $this->languages = $languages;
    }

    public function isValidDomain($subdomain)
    {
        return isset($this->subdomains[$subdomain]);
    }

    public function isValidLocale($locale)
    {
       return isset($this->languages[$locale]);
    }

    public function locale()
    {
        return App::getLocale();
    }

    public function locales()
    {
        return $this->locales;
    }

    public function default()
    {
        return $this->subdomains[$this->subdomain]->default_locale;
    }

    public function language($locale = null)
    {
        $locale = $locale ?: $this->locale();
        return $this->languages[$locale] ?? optional();
    }

    public function id($locale = null)
    {
        return $this->language($locale)->id;
    }

    public function name($locale = null)
    {
        return $this->language($locale)->name;
    }

    public function native($locale = null)
    {
        $language = $this->language($locale);
        return $language->native ?: Locale::getDisplayLanguage($language->locale, $this->default());
    }

    public function dir($locale = null)
    {
        return $this->language($locale)->dir;
    }

    public function regional($locale = null)
    {
        return $this->language($locale)->regional;
    }

    public function getLanguages()
    {
        return $this->languages->map(function ($item, $key) {
            $item->link = secure_url(($this->hideDefaultLocaleInURL && $item->locale === $this->default()) ? '' : $item->locale);

            return $item;
        });
    }

    public function getLocales()
    {
        return $this->subdomains[$this->subdomain]->languages->pluck('locale');
    }

    public function set($locale = null)
    {
        if ($this->isValidLocale($locale)) {
            App::setLocale($locale);
        } else { // if the locale is not valid it could be taken by the browser depending on the configuration
            if ($this->hideDefaultLocaleInURL) { // if we reached this point and hideDefaultLocaleInURL is true we have to assume we are routing to a default locale route.
                App::setLocale($this->default());
            } else {
                if ($this->useAcceptLanguageHeader) { // but if hideDefaultLocaleInURL is false && useAcceptLanguageHeader is true, we have to retrieve it from the browser...
                    App::setLocale($this->negotiateLanguage());
                } else { // or just get application default locale
                    App::setLocale($this->default());
                }

                return false; // we have to redirect the user to a language specific URL (because hideDefaultLocaleInURL is false and visiting a URL without a language segment is forbidden)
            }
        }

        setlocale(LC_ALL, array_filter([$this->locale(), $this->regional()]));

        return true;
    }

    /**
     * Negotiates language with the user's browser through the Accept-Language
     * HTTP header or the user's host address. Language codes are generally in
     * the form "ll" for a language spoken in only one country, or "ll-CC" for a
     * language spoken in a particular country. For example, U.S. English is
     * "en-US", while British English is "en-UK". Portuguese as spoken in
     * Portugal is "pt-PT", while Brazilian Portuguese is "pt-BR".
     *
     * This function is based on negotiateLanguage from Pear HTTP2
     * http://pear.php.net/package/HTTP2/
     *
     * Quality factors in the Accept-Language: header are supported, e.g.:
     * Accept-Language: en-UK;q=0.7, en-US;q=0.6, no, dk;q=0.8
     *
     * @return string The negotiated language result or app.locale.
     */
    public function negotiateLanguage()
    {
        $matches = $this->getMatchesFromAcceptedLanguages();
        foreach ($matches as $key => $q) {
            if ($this->isValidLocale($key)) {
                return $key;
            }
        }

        // If any (i.e. "*") is acceptable, return the default locale
        if (isset($matches['*'])) {
            return $this->default();
        }

        if (class_exists('Locale') && !empty(Request::server('HTTP_ACCEPT_LANGUAGE'))) {
            $httpAcceptLanguage = Locale::acceptFromHttp(Request::server('HTTP_ACCEPT_LANGUAGE'));

            if ($this->isValidLocale($httpAcceptLanguage)) {
                return $httpAcceptLanguage;
            }
        }

        if (Request::server('REMOTE_HOST')) {
            $remoteHost = explode('.', Request::server('REMOTE_HOST'));
            $lang = strtolower(end($remoteHost));

            if ($this->isValidLocale($lang)) {
                return $lang;
            }
        }

        return $this->default();
    }

    /**
     * Return all the accepted languages from the browser
     *
     * @return array Matches from the header field Accept-Languages
     */
    private function getMatchesFromAcceptedLanguages()
    {
        $matches = [];

        if ($acceptLanguages = Request::header('Accept-Language')) {
            $acceptLanguages = explode(',', $acceptLanguages);

            $genericMatches = [];
            foreach ($acceptLanguages as $option) {
                $option = array_map('trim', explode(';', $option));
                $l = $option[0];

                if (isset($option[1])) {
                    $q = (float) str_replace('q=', '', $option[1]);
                } else {
                    $q = null;

                    // Assign default low weight for generic values
                    if ($l == '*/*') {
                        $q = 0.01;
                    } elseif (substr($l, -1) == '*') {
                        $q = 0.02;
                    }
                }

                // Unweighted values, get high weight by their position in the list
                $q = ($q ?? 1000) - count($matches);
                $matches[$l] = $q;

                // If for some reason the Accept-Language header only sends language with country
                // we should make the language without country an accepted option, with a value
                // less than it's parent.
                $ops = explode('-', $l);
                array_pop($ops);

                while (!empty($ops)) {
                    // The new generic option needs to be slightly less important than it's base
                    $q -= 0.001;
                    $op = implode('-', $ops);
                    if (empty($genericMatches[$op]) || $genericMatches[$op] > $q) {
                        $genericMatches[$op] = $q;
                    }
                    array_pop($ops);
                }
            }
            $matches = array_merge($genericMatches, $matches);

            arsort($matches, SORT_NUMERIC);
        }

        return $matches;
    }
}
