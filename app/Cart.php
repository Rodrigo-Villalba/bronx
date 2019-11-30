<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  protected  $primaryKey = 'id';

  protected $guarded = []; //permitira guardado masivo.

  public function items() {
    return $this->hasMany('App\CartItem', 'cart_id');
  }

  public function user() {
    return $this->belongsTo('App\User');
  }
}

// 0 => Comprado
// 1 => Abierto
