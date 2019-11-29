<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  protected $guarded = []; //permitira guardado masivo.

  public function items() {
    return $this->hasMany('App\CartItem', 'cart_id');
  }
}
