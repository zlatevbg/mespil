<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'locale',
        'name',
        'native',
        'regional',
        'dir',
    ];

    public function domains()
    {
        return $this->belongsToMany(Domain::class)->orderBy('domain');
    }
}
