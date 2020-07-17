<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public function customar(){
        return $this->hasOne(Customar::class,'id','customar_id');
    }
}
