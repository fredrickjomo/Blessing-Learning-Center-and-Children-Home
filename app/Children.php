<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    //
    protected $fillable= [
        'full_name',
        'gender',
        'age',
        'vulnerability',
        'education_level',
        'photo',
    ];
}
