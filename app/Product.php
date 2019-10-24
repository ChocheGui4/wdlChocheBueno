<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function acquisition()
    {
        return $this->hasMany('App\Acquisition');
    }
    protected $fillable = [
        'name', 'description','urlimg','productstatus'
    ];
}
