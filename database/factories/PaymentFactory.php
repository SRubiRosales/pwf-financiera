<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'id_customer' =>$faker->numberBetween($min = 1, $max = 20),
        'payment_number'=> $faker->randomDigit(),
        'amount' => $faker->randomDigit(),
    ];
});
