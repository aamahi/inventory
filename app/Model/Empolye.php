<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empolye extends Model
{
    use SoftDeletes;
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
