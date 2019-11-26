<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasExpirationDate
{
    protected static function boot()
    {
        parent::boot();



        static::creating(function ($model) {
            $expiry = now()->addYears(5)->format('Y-m-d');
            return $model->expires = $expiry;
        });
    }
}
