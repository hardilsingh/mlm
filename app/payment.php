<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //
    protected $fillable = [
        'user_id',
        'transaction',
        'transaction_id',
        'mode',
        'cheque_number'
    ];
}
