<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $connection = 'sky';

    protected $fillable = [
        'email',
        'email_verified_at',
        'is_subscribed',
        'website',
        'source',
    ];

    protected $dates = [
        'email_verified_at',
    ];
}
