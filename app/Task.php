<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
    public static function scopeIncomplete($query){

        return $query->where('completed', 0);

    }

    public function user(){

        return $this->belongsTo(User::class);

    }

}
