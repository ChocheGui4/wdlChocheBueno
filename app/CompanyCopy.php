<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyCopy extends Model
{
    protected $fillable = [
        'companyrfc', 'companyname','companyimg','companytelephone1','companytelephone2',
        'companyemail1','companyemail2','zipcode','district','street', 
        'insidenumber','exteriornumber'
    ];
}
