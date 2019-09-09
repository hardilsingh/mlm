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
        'name', 'email', 'password','vid','points','pin','invested','role','pan_number','is_verified','side','created_by', 'dob' , 'gender' , 'profile_path', 'path_3'
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
    
    
    public static function sms($ph, $request , $user_id)
    {
        $msg = "Welcome! Your Username is:". $user_id. " and password is: " .$request . "  Please change your password when you are verified for additional security.";
        $number = '91' . $ph;
        $cSession = curl_init();
        curl_setopt($cSession, CURLOPT_URL, "http://my.msgwow.com/api/sendhttp.php?authkey=292754AKjDKDjFNBb5d710471&mobiles=$number&message=$msg&sender=CDACGP&route=1&country=91");
        curl_setopt($cSession, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cSession, CURLOPT_HEADER, false);
        $alertchk = curl_exec($cSession);
    }

}
