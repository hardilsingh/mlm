<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addressbook extends Model
{
    //

    protected $fillable = [
        'user_id',
        'street',
        'city',
        'state_id',
        'country_id',
    ];

}
