<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->decimal('sub_total', 10, 2);
            $table->decimal('discount', 10, 2);
            $table->decimal('total', 10, 2);
            $table->dropColumn(['name', 'price', 'featured_img', 'cant', 'cart_number']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->string('name', 100);
            $table->string('description', 300);
            $table->decimal('price', 10, 2);
            $table->string('featured_img', 300);
            $table->integer('cant');
            $table->bigInteger('cart_number');
            $table->dropColumn(['sub_total', 'discount', 'total']);
        });
    }
}
