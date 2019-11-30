<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      factory(\App\User::class, 5)->create();
      factory(\App\Product::class, 10)->create()->each(function($c) {
          $c->photos()->saveMany(
              factory(App\ImagesProducts::class, 4)->make(['product_id' => NULL])
          );
      });
    }
}
