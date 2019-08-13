<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'rfc', 'name','lastName','telephone','zipCode', 
        'district','street', 'insideNumber','exteriorNumber'
    ];
}
