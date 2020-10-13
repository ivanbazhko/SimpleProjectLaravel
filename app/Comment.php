<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function scopePlane($query, $id){
        return $query->where('planeID', $id);
     }
}
