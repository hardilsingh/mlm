<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addressbook extends Model
{
    //

    protected $fillable = [
        'user_id',
        'street',
        'city_id',
        'state_id',
        'country_id',
    ];

}
