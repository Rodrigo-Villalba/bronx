<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $guarded = []; //permitira guardado masivo.

 public function user(){
   return $this->belongsTo('App\User', 'user_id');
 }

 public function photos(){
     return $this->hasMany('App\ImagesProducts', 'product_id');
   }

public function categoria() {
  return $this->hasOne('App\Categoria', 'categoria_id');
}
}
