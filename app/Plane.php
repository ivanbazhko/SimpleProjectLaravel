<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
   public function scopeName($query, $name){
      return $query->where('name', $name);
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

   public function scopeMinr($query, $fuselage){
      return $query->where('fuselage', $fuselage);
   }

   public function scopeFus($query, $minrange){
      return $query->where('range', '<=', $minrange);
   }
}


