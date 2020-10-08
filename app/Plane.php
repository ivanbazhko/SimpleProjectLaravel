<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
   public function scopeName($query, $name){
      return $query->where('name', 'like', '%'.$name.'%');
   }

   public function scopeFrom($query, $manufacture){
      return $query->where('manufacture', $manufacture);
   }

   public function scopePricef($query, $pricefrom){
      return $query->where('price', '>=', $pricefrom);
   }

   public function scopePricet($query, $priceto){
      return $query->where('price', '<=', $priceto);
   }

   public function scopePaxf($query, $paxfrom){
      return $query->where('capacity', '>=', $paxfrom);
   }

   public function scopePaxt($query, $paxto){
      return $query->where('capacity', '<=', $paxto);
   }

   public function scopeFus($query, $fuselage){
      return $query->where('fuselage', $fuselage);
   }

   public function scopeMinr($query, $minrange){
      return $query->where('range', '>=', $minrange);
   }
}


