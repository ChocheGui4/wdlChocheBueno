<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public function customer()
    {
        return $this->hasMany('App\Customer');
    }
    protected $fillable = [
        'rfc', 'name','lastname','telephone','zipcode', 
        'district','street', 'insidenumber','exteriornumber'
    ];
}
