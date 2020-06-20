<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Omini;

$factory->define(Omini::class, function (Faker $faker) {
    return [
      'first_name' => $faker -> firstName(),
      'last_name' => $faker -> lastName(),
      'address' => $faker -> address(),
      'code' => $faker -> ean13(),
      'state' => $faker -> state(),
      'phone_number' => $faker -> phoneNumber(),
      'role' => $faker -> jobTitle()
    ];
});
