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
        'name','zipcode','district','street', 'insideNumber',
        'exteriornumber'
    ];
}
