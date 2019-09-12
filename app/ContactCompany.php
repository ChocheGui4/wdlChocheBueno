<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactCompany extends Model
{
    public function company()
    {
        return $this->hasMany('App\Company');
    }
    protected $fillable = [
        'name', 'lastname','telephone1','telephone2','email1','email2','area'
    ];
}

