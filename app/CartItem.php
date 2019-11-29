<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $guarded = [];

    public function cart() {
      return $this->belongsTo('App\Cart', 'cart_id');
    }
}
