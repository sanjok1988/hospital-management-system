<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Auth;

class User extends Authenticatable
{
    use EntrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function createUserAccount($data){
        $user = Self::create($data);
        return $user->id;
    }

    public static function getDoctorId(){
        $doc = Self::where('email', Auth::user()->email)->first();
       
        if($doc){
            return $doc->id;
           
        }else{
            return null;
        }
    }

    public static function isDoctor(){
        
        if(Auth::user()->hasRole('doctor')){
            return true;
        }else{
            return false;
        }
    }
}
