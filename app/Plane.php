<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
   public function scopePriceFrom($query, $pricefrom){
      return $query->where('price' > $pricefrom)->all();
   }
}


