<?php

namespace App\Services;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Lang;
use App\Models\Domain as DomainModel;
use Helper;

class Domain
{
    protected $subdomains = [];

    public function __construct()
    {
        if (Schema::hasTable('domains')) {
            $this->subdomains = DomainModel::all()->keyBy('domain');
        }
    }

    public function subdomains()
    {
        return $this->subdomains;
    }

    public function subdomain($subdomain = null)
    {
        $subdomain = $subdomain ?: Helper::subdomain();
        return $this->subdomains[$subdomain] ?? optional();
    }

    public function id($subdomain = null)
    {
        return $this->subdomain($subdomain)->id;
    }

    public function domain($subdomain = null)
    {
        return $this->subdomain($subdomain)->domain;
    }

    public function name($subdomain = null)
    {
        return $this->subdomain($subdomain)->name;
    }

    public function guest($subdomain = null)
    {
        return $this->subdomain($subdomain)->guest;
    }

    public function auth($subdomain = null)
    {
        return $this->subdomain($subdomain)->auth;
    }

    public function defaultLocale($subdomain = null)
    {
        return $this->subdomain($subdomain)->default_locale;
    }
}
