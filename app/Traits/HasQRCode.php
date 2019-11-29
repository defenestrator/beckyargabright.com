<?php

namespace App\Traits;

use Illuminate\Support\Str;
use QrCode;

trait HasQRCode
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
        QrCode::size(500)
            ->format('png')
            ->generate($model->id, storage_path('images/giftcards/qr/' . $model->id));
        });
    }
}
