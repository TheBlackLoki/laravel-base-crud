<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omino;
use Faker\Generator as Faker;

$factory->define(Omino::class, function (Faker $faker) {
    return [
      'firstname' => $faker -> firstName(),
      'lastname' => $faker -> lastName(),
      'address' => $faker -> address(),
      'code' => $faker -> ean13(),
      'state' => $faker -> state(),
      'phonenumber' => $faker -> phoneNumber(),
      'role' => $faker -> jobTitle()

    ];
});
