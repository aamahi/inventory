<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable =[
        'category_id',
        'product_name',
        'product_price',
        'product_details',
        'quantity',
        'photo',
    ];
    //
    public  function  category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
}
