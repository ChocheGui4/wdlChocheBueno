<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Contact');
    }
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function people()
    {
        return $this->belongsTo('App\People');
    }
    protected $fillable = [
        'users_id', 'people_id','acquisitions_id', 'companies_id'
    ];
}
