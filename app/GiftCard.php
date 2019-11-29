<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\IsGiftCardy;

class GiftCard extends Model
{
    use IsGiftCardy;
    /**
     * The fillable fields, yo.
     *
     * @var array
     */
    protected $fillable = [
        'to_name',
        'from_name',
        'to_email',
        'from_email',
        'background',
        'mailing_address',
        'expires',
        'minutes',
        'price'
    ];

    public function user()
    {
        return $this->belongsTo('user');
    }
}
