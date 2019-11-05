<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function contact_branch()
    {
        return $this->belongsTo('App\ContactBranch');
    }
    public function customer()
    {
        return $this->hasMany('App\Customer');
    }
    protected $fillable = [
        'branchname','branchimg','branchtelephone1','branchtelephone2','branchemail1',
        'branchtelephone2','zipcode','district','street', 'insidenumber',
        'exteriornumber'
    ];
}
