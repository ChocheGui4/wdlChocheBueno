<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    public function acquisition()
    {
        return $this->hasMany('App\Acquisition');
    }
    protected $fillable = [
        'serialkey','sstatus'
    ];
}
