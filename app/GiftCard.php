<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasExpirationDate;

class GiftCard extends Model
{
    use HasExpirationDate;
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
        'expires',
        'minutes',
        'price'
    ];

    public function user()
    {
        return $this->belongsTo('user');
    }
}
