<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doc extends Model
{
    //

    protected $fillable = [
        'user_id',
        'path',
        'type',
    ];
}
