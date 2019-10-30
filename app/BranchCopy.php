<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchCopy extends Model
{
    protected $fillable = [
        'branchname','branchimg','branchtelephone1','branchtelephone2','branchemail1',
        'branchtelephone2','zipcode','district','street', 'insidenumber',
        'exteriornumber','companies_id'
    ];
}
