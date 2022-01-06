<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    protected $fillable = [
        'domain',
        'name',
        'auth',
        'guest',
        'default_locale',
    ];

    public function languages()
    {
        return $this->belongsToMany(Language::class)->orderBy('name');
    }
}
