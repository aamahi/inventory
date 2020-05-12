<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    public function employes(){
        return $this->hasOne(Empolye::class,'id','employe_id');
    }
}
