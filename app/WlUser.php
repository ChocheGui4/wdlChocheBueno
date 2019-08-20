<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WlUser extends Model
{
    protected $fillable = [
        'name', 'email','password'
    ];
}
