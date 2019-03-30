<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table ="appointment";
    protected $fillable = ['name','address','phone','gender','dob','appointment_date','doctor_id',
    'status'];
}
