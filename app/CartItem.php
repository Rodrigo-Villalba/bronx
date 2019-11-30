<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected  $primaryKey = 'id';

    protected $guarded = [];

    public function cart() {
      return $this->belongsTo('App\Cart', 'cart_id');
    }

    public function product() {
      return $this->belongsTo('App\Product', 'product_id');
    }
}
