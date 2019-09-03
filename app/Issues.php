<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issues extends Model
{
    //

    protected $fillable = ['title' , 'user_id' , 'description' , 'status'];
}
