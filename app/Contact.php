<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function area()
    {
        return $this->belongsTo('App\Area');
    }
    public function company()
    {
        return $this->hasMany('App\company');
    }
    protected $fillable = [
        'name', 'lastName','telephone', 'email','areas_id'
    ];
}
