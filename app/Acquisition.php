<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acquisition extends Model
{
    protected $fillable = [
        'products_id', 'acquisitiontypes_id','licenses_id'
    ];
}
