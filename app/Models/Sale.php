<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $connection = 'sky';

    public static function topCountries()
    {
        $countries = self::selectRaw('count(sales.id) AS count, GROUP_CONCAT(countries.name SEPARATOR ",") AS countries')->leftJoin('clients', 'clients.id', '=', 'sales.client_id')->leftJoin('countries', 'countries.id', '=', 'clients.country_id')->whereNull('sales.deleted_at')->first();
        $names = array_count_values(array_filter(explode(',', $countries->countries)));
        arsort($names);
        $names = array_slice($names, 0, 10);

        $topCountries = [];
        foreach ($names as $country => $sales) {
            $percentage = round(($sales / $countries->count) * 100, 2);
            array_push($topCountries, [$country, $percentage / 100, $percentage . '%']);
        };

        return $topCountries;
    }
}
