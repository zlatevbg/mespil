<?php

namespace App\Services;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Domain;
use Language;

class Helper
{
    public function subdomain()
    {
        return explode('.', Request::getHost())[0];
    }

    public function timestamp($resource)
    {
        return filemtime(public_path() . $resource);
    }

    public function autover($resource, $subdomain = null, $absolute = true)
    {
        $subdomain = $subdomain ?: $this->subdomain();
        $resource = str_replace('{subdomain}', $subdomain, $resource);
        $dot = strrpos($resource, '.');
        $ext = substr($resource, $dot + 1);

        $time = '';
        if (File::exists(public_path() . $resource)) {
            $time = $this->timestamp($resource);
        }

        $resource = substr($resource, 0, $dot) . '.' . $time . '.' . $ext;

        if ($absolute) {
            return asset($resource);
        }

        return $resource;
    }

    public function route($name = null, $parameters = [], $query = false, $absolute = true)
    {
        $route = self::buildRoute($name);

        return app('url')->route($route, $parameters, $absolute) . ($query && Request::query() ? '?' . http_build_query(Request::query()) : '');
    }

    public function url($name = null, $parameters = [], $query = true, $absolute = true)
    {
        return Route::has($name) ? self::route($name, $parameters, $query, $absolute) : secure_url($name, $parameters);
    }

    public function buildRoute($name = null)
    {
        $domain = self::subdomain();
        $locale = Language::locale();
        $name = ltrim($name, '/');

        if (strpos($name, '.') !== false) {
            $parts = explode('.', $name);

            $part = $parts[0];
            if (Domain::subdomains()->has($part)) {
                $domain = $part;
                $name = Str::after($name, $domain . '.');
                $part = $parts[1];
            }

            if (Language::locales()->has($part)) {
                $locale = $part;
                $name = Str::after($name, $locale . '.');
            } else {
                throw new RouteNotFoundException("Route [{$name}] not defined.");
            }
        } elseif (Language::locales()->has($name)) {
            $locale = $name;
            $name = null;
        }

        return $domain . '.' . $locale . '.' . ($name ? $name : 'home');
    }

    public function download($file, $type = null)
    {
        return $this->route('download' . ($type ? '-' . $type : ''), [$file, $this->timestamp('/storage/download/' . ($type ? $type . '-' : '') . $file . '.pdf')]);
    }

    public function slug($index = 0)
    {
        $slug = trim(urldecode(Request::path()), '/') ?: null;

        if (strpos($slug, '/') !== false) {
            $slugs = explode('/', $slug);
            $slug = $slugs[$index] ?? null;

            if ($index === 0 && $slug === Language::locale()) {
                $slug = $slugs[1] ?? null;
            }
        } elseif ($slug === Language::locale() || $index > 0) {
            $slug = null;
        }

        return $slug;
    }

    public function matchCurrentSlugToRoute($route, $childSlug = null, $childRoute = null, $parent = false)
    {
        $active = false;

        if ($parent) {
            if (in_array(self::slug(), array_column($route['children'], 'slug'))) {
                $active = true;
            }
        } else if ($childSlug) {
            if (self::slug() === $route['slug'] && self::slug(1) === $childRoute['slug']) {
                $active = true;
            } elseif (self::slug() === $childRoute['slug']) {
                if (!self::slug(1)) {
                    $active = true;
                } elseif (!self::slug(2)) {
                    $routes = __('nav.' . $childSlug, [], Language::locale());

                    if (is_array($routes) && in_array(self::slug(1), array_column($routes['children'], 'slug'))) {
                        $active = true;
                    }
                }
            }
        } else {
            if (self::slug() === $route['slug']) {
                $active = true;
            }
        }

        return $active;
    }

    public function getAlternateRoute($locale = null)
    {
        $locale = $locale ?? Language::locale();
        $domain = self::subdomain();
        $route = str_replace($domain . '.' . Language::locale(), $domain . '.' . $locale, Route::currentRouteName());

        return $route;
    }

    public function hasAlternate($locale = null)
    {
        $route = self::getAlternateRoute($locale);

        return Route::has($route) ? true : false;
    }

    public function alternate($locale = null)
    {
        $route = self::getAlternateRoute($locale);

        $parameters = collect(Route::current()->parameters())->filter(function ($value, $key) {
            return in_array($key, Route::current()->parameterNames);
        })->all();

        return self::route($route, $parameters);
    }

    public function arrayToTree($array, $parent = null)
    {
        $array = array_combine(array_column($array, 'id'), array_values($array));
        foreach ($array as $k => &$v) {
            if (isset($array[$v['parent']])) {
                $array[$v['parent']]['children'][$k] = &$v;
            }
            unset($v);
        }

        return array_filter($array, function ($v) use ($parent) {
            return $v['parent'] == $parent;
        });
    }

    public function parseBladeExpression($expression)
    {
        return collect(explode(',', $expression))->map(function ($item) {
            return trim(str_replace(['"', "'"], '', $item));
        });
    }

    public function renderFontAwesomeSvg($expression, $class)
    {
        $expression = $this->parseBladeExpression($expression);
        $icon = $expression->get(0);
        $classes = $expression->get(1) . ' ' . $class;

        switch ($class) {
            case 'fas':
                $library = 'solid';
                break;
            case 'far':
                $library = 'regular';
                break;
            case 'fal':
                $library = 'light';
                break;
            case 'fad':
                $library = 'duotone';
                break;
            case 'fab':
                $library = 'brands';
                break;
        }

        if (substr($icon, 0, 3) === 'fa-') {
            $icon = substr($icon, 3);
        }

        $path = storage_path('app/fontawesome/' . $library . '/' . $icon . '.svg');
        $svg = '';
        if (File::exists($path)) {
            $svg = File::get($path);
            if ($svg) {
                $w = '';
                if (($start = strpos($svg, 'viewBox="')) !== false) {
                    $start += 9;
                    $end = strpos($svg, '"', $start);
                    $numbers = explode(' ', substr($svg, $start, $end - $start));
                    $w = $numbers[2] / $numbers[3] * 16;
                }

                $svg = str_replace('xmlns="http://www.w3.org/2000/svg"', 'data-fa-i2svg class="svg-inline--fa fa-w-' . $w . ' ' . $classes . '"', $svg);
                $svg = str_replace('<path ', '<path fill="currentColor" ', $svg);
            }
        }

        return $svg;

        // return '<i data-fa-i2svg data-icon="' . $icon . '" data-library="' . $library . '" class="' . $classes . '"></i>';
    }

    public function htmlToText($html)
    {
        /*
            remove excessive spaces and tabs
            strip blank lines (blank, with tabs or spaces)
        */
        return html_entity_decode(preg_replace(['/[\r\n]+[\s\t]*[\r\n]+/', '/[ \t]+/'], ["\r\n", ' '], strip_tags(preg_replace('/<br\s*\/?\s*>/Usi', "\r\n", $html))));
    }
}
