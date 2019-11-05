<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function contact_company()
    {
        return $this->hasMany('App\Contact');
    }
    public function customer()
    {
        return $this->hasMany('App\Customer');
    }
    
    protected $fillable = [
        'companyrfc', 'companyname','companyimg','companytelephone1','companytelephone2',
        'companyemail1','companyemail2','zipcode','district','street', 
        'insidenumber','exteriornumber'
    ];
}
