<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bkash extends Model
{
    public function recive(){
        return $this->hasOne(ReciveBkash::class,'bkash_id','id');
    }
    public function send(){
        return $this->hasOne(SendBkash::class,'bkash_id','id');
    }
}
