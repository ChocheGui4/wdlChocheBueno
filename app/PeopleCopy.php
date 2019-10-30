<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PeopleCopy extends Model
{
    protected $fillable = [
        'rfc', 'name','lastname','img','telephone','zipcode', 
        'district','street', 'insidenumber','exteriornumber'
    ];
}
