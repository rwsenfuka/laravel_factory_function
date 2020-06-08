<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Seller;
use Faker\Generator as Faker;

function random_pic($dir)
{
    $files = glob($dir . '/*.*');
    $file = array_rand($files);
    return $files[$file];
}

$factory->define(Seller::class, function (Faker $faker, $id) {
    return [
        'user_id' => $id,
        'id_image' => random_pic('public/tmp/id'),
        'selfie' => random_pic('public/tmp/selfie'),
        'phone' => $faker->phoneNumber,
        'address'=> $faker->address
    ];
});


