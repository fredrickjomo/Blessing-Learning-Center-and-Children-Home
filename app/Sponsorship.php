<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    //
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'nationality',
        'child_id',
        'amount_per_month',
        'method_of_payment',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function children(){
        return $this->belongsTo('App\Children');
    }
}
