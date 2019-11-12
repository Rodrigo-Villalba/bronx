<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
  protected $guarded = []; //permitira guardado masivo.

 public function user(){
   return $this->belongsTo('App\User', 'user_id');
 }



}
