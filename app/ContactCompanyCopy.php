<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactCompanyCopy extends Model
{
    protected $fillable = [
        'name', 'lastname','telephone1','telephone2','email1','email2',
        'area'
    ];
}
