<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViewAdd extends Model
{
    protected $fillable = [
        'company','people','branch','product'
    ];
}
