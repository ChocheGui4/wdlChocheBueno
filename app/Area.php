<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    
    public function contact()
    {
        return $this->hasMany('App\Contact');
    }
    protected $fillable = [
        'name'
    ];
}
