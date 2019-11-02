<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCopy extends Model
{
    protected $fillable = [
        'name', 'description','urlimg','productstatus'
    ];
}
