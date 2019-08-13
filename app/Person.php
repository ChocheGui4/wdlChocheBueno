<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'rfc', 'name','lastName','telephone', 'email','zipCode', 
        'district','street', 'insideNumber','exteriorNumber'
    ];
}
