<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function scopeEmail($query, $email){
        return $query->where('email', $email);
     }
}
