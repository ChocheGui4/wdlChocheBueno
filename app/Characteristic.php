<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    public function acquisition()
    {
        return $this->hasMany('App\Acquisition');
    }
    protected $fillable = [
        'time', 'numberusers'
    ];
}
