<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','vid','points','pin','invested','role','addhar_number','pan_number','is_verified','side','created_by', 'dob' , 'gender' , 'profile_path',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function address() {
        return $this->hasOne('App\addressbook' , 'user_id');
    }

    public function phonebook() {
        return $this->hasOne('App\phonebook' , 'user_id');
    }

    public function profile_photo() {
        return $this->hasOne('App\imagePath' , 'user_id');
    }


    public function accountDetail() {
        return $this->hasOne('App\accountDetail' , 'user_id');
    }

}
