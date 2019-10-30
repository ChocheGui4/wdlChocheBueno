<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryCopy extends Model
{
    protected $fillable = [
        'maker','processor','memory','disc','storagem','unitstoragemail','storage','unitstorage',
        'numberstorage','year','period','numberuser','offer','products_id'
    ];
}
