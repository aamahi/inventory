<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\SoftDeletes;
class Customar extends Model
{
    use SoftDeletes;
    protected $fillable =[
        'customar_group_id',
        'customar_name',
        'address',
        'phone',
        'email',
        'due',
        'balance',
        'photo',
        'created_at',

    ];

    public function customars(){
        return $this->hasOne('App\Model\Customar_group','id','customar_group_id');
    }
//    public function customar_group(){
//        return $this->bel('App\Model\Customar_group','id','category_id');
//    }
}


