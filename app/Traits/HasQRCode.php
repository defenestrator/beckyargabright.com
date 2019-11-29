<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasQRCode
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
        });
    }
}
