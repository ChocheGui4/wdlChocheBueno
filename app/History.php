<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'product','serial','time','period','storage','unitstorage',
        'description','company','branch','people'
    ];
}
