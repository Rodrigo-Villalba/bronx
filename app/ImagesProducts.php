<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagesProducts extends Model
{
  protected  $primaryKey = 'id';

  public function product(){
    return $this->belongsTo('App\Product', 'product_id');
  }
}
