<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCopies extends Model
{
    protected $fillable = [
        'role', 'email', 'password'
    ];
}
