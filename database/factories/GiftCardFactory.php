<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\GiftCard;
use Faker\Generator as Faker;

$factory->define(GiftCard::class, function (Faker $faker) {
    return [
        'user_id' => $faker->random_int(1,2000),
        'background' => $faker->url,
        'qr' => $faker->url,
        'to_name' => $faker->name,
        'to_email' => $faker->safeEmail,
        'from_name' => $faker->name,
        'from_email' => $faker->safeEmail,
        'mailing_address', $faker->address,
        'minutes' => 720,
        'expires' => now()->addYears(5)->format('Y-m-d'),
        'price' => 600,
    ];
});
