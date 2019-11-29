<?php

namespace App\Traits;

use Illuminate\Support\Str;
use QrCode;

trait IsGiftCardy
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $hash = md5($model->to_name . now());
            $model->qr = $hash;
            $filename = $hash .'.png';


            $url = 'https://beckyargabright.com/giftcards/' . $hash;

            $path = storage_path('app/public/giftcards/qr/') . $filename;

            QrCode::size(500)->format('png')->generate($url, $path);

            $expiry = now()->addYears(5)->format('Y-m-d');

            $model->expires = $expiry;
        });

    }
}
