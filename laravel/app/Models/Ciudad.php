<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
  protected $table = "ciudades";

  public function estado(){
    return $this->belongsTo('App\Models\Estado' , 'provincia');
  }


}
