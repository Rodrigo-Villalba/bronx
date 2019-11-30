<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

  $path = storage_path('app/public/products'); //Crear carpeta de destino. En este caso es /products. Si no está creada la consola mostrará un error.

  return [
      'name' => $faker->sentence(3),
      'description' => $faker->paragraph(3),
      'price' => $faker->randomFloat(2, 2, 8) ,
      'user_id' => 1,
      'category_id' => factory(\App\Categoria::class),
      'tags' => '2019, summer',
      'stock' =>$faker->randomDigit(),
  ];
});
