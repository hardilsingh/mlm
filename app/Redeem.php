<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redeem extends Model
{
    //


    protected $fillable = ['points', 'user_id', 'status'];


    public function transactionUsers()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }
}
