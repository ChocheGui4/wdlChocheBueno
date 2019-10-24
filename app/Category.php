<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'maker','processor','memory','disc','storagem','unitstoragemail','storage','unitstorage',
        'numberstorage','year','period','numberuser','offer','cstatus',
        'products_id'
    ];
}
