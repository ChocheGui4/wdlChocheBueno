<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    protected $fillable = [
        'name','branchtelephone1','branchtelephone2','branchemail1',
        'branchtelephone2','zipcode','district','street', 'insidenumber',
        'exteriornumber','contact_branches_id'
    ];
}
