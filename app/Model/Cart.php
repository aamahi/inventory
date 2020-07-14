<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected  $fillable =['product_id','ip','quantity'];
    public function product(){
        return $this->hasOne(Product::class,'id','product_id');
    }
}
