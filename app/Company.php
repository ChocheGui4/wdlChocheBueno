<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }
    protected $fillable = [
        'rfc', 'name','telephone', 'email','zipcode', 
        'district','street', 'insideNumber','exteriorNumber', 'contacts_id'
    ];
}
