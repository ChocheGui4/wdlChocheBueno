<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactCompany extends Model
{
    public function contact_company()
    {
        return $this->hasMany('App\Contact');
    }
    protected $fillable = [
        'name', 'lastname','telephone1','telephone2','email1','email2',
        'area'
    ];
}

