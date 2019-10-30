<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactCopy extends Model
{
    protected $fillable = [
        'companies_id','contact_companies_id'
    ];
}
