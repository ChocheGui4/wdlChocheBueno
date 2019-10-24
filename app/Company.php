<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }
    public function customer()
    {
        return $this->hasMany('App\Customer');
    }
    public function branche()
    {
        return $this->hasMany('App\Branch');
    }
    
    protected $fillable = [
        'companyrfc', 'companyname','companyimg','companytelephone1','companytelephone2',
        'companyemail1','companyemail2','zipcode','district','street', 
        'insidenumber','exteriornumber','companystatus', 'contact_companies_id'
    ];
}
