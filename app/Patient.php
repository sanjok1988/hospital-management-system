<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table ="patients";
    protected $fillable = ['name','address','phone','gender','dob','appointment_id','doctor_id','preception','status'];
}
