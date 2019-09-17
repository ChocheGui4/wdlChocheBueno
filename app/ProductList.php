<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductList extends Model
{
    protected $fillable = [
        'name','idp','namem','namep','sizem','typed','user'
    ];
}
