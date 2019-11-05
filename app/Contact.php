<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    public function contact_company()
    {
        return $this->belongsTo('App\ContactCompany');
    }
    protected $fillable = [
        'companies_id','contact_companies_id'
    ];
}
