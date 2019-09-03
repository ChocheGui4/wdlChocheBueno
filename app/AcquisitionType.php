<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcquisitionType extends Model
{
    public function acquisition()
    {
        return $this->hasMany('App\Acquisition');
    }
    protected $fillable = [
        'type'
    ];
}
