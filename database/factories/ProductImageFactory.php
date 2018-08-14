<?php

use Faker\Generator as Faker;
use App\ProductImage;

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        //'featured_image' => "https://picsum.photos/250/250/?image=".$faker->numberBetween(0, 500)
        'image' => "https://picsum.photos/250/250/?image=".$faker->numberBetween(0,500),
        //'image'=>$faker->imageUrl(250,250),
        'product_id'=>$faker->numberBetween(1,100)
    ];
});
