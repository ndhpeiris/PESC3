<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appoinment extends Model
{
    protected $fillable = [
        'name', 'email', 'venue','date','time','isAccepted'
    ];
}
