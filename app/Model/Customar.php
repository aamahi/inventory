<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customar extends Model
{
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
}
