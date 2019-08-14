<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'rfc', 'name','lastname','telephone','zipcode', 
        'district','street', 'insidenumber','exteriornumber'
    ];
}
