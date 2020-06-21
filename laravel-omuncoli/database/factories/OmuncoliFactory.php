<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omuncolo;
use Faker\Generator as Faker;

$factory->define(Omuncolo::class, function (Faker $faker) {
    return [

      'firstname'=> $faker -> firstName(),
      'lastname'=> $faker -> lastName(),
      'role'=> $faker -> jobTitle(),
      'phone_number'=> $faker -> phoneNumber(),
      'address'=> $faker -> streetAddress(),
      'post_code'=> $faker -> postcode(),
      'state'=> $faker -> state()
      
    ];
});
