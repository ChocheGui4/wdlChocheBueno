<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactBranch extends Model
{
    public function branch()
    {
        return $this->hasMany('App\Branch');
    }
    protected $fillable = [
        'name', 'lastname','telephone1','telephone2','email1','email2','area',
        'cbstatus','branches_id'
    ];
}
