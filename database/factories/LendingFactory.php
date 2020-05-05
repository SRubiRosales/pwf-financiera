<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Lending;
use Faker\Generator as Faker;

$factory->define(Lending::class, function (Faker $faker) {
    return [
        'id_customer' =>$faker->numberBetween($min = 1, $max = 20),
        'amount' => $faker->randomDigit(),
        'n_payments'=> $faker->randomDigit(),
        'rate'=> $faker->randomDigit(),
        'total'=> $faker->randomDigit(),
        'date_ministry' => $faker->date(),
        'due_date' => $faker->date(),
    ];
});
