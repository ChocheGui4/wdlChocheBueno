<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailService extends Model
{
    protected $fillable = [
        'storagem','acquisition'
    ];
}
