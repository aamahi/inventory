<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Suppliar extends Model
{
    protected $fillable =[
        'suppliar_name',
        'company_name',
        'email',
        'phone',
        'address',
        'photo',
    ];
}
