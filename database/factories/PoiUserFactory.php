<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\PoiUser::class, function (Faker $faker) {
    return [
        'username' => $faker->username,
        'password' => '123456', // password
        'isadmin' => 0
    ];
});
