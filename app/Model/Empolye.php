<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Empolye extends Model
{
    protected $fillable=[
        'name',
        'position',
        'email',
        'phone',
        'salary',
        'address',
        'image'
    ];
}
