<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

  $path = storage_path('app/public/products');//crea carpeta de destino. si no esta creada mostrara un error en consola.

  return [
      'name' => $faker->sentence(3),
      'description' => $faker->paragraph(4),
      'price' => $faker->randomFloat(2, 2, 8),
      'user_id' => 1,
      //'user_id' => $faker->numberBetween(1, 6), sirve para poner productos a usuarios en forma random.
      'featured_img' => $faker->image($path, 300, 300, 'fashion', false),
  ];
});
