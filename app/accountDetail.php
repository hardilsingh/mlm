<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accountDetail extends Model
{
    //

    protected $fillable = ['user_id' , 'account' , 'ifsc_code'];
}
