<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acquisition extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    public function acquisition_type()
    {
        return $this->belongsTo('App\AcquisitionType');
    }

    public function license()
    {
        return $this->belongsTo('App\License');
    }
    public function characteristic()
    {
        return $this->belongsTo('App\Characteristic');
    }

    protected $fillable = [
        'salenumber','astatus','products_id', 'acquisitiontypes_id','licenses_id'
    ];
}
