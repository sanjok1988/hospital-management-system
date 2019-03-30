<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table ="doctor";
    protected $fillable = ['name','contact','email','password', 'address','nmc_num','specialization','gender','fee'];
}
