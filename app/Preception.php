<?php

namespace app;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Preception extends Model
{
	
	protected $table = "preceptions";
	protected $fillable = ['preception','name','address','phone','gender','appointment_date',
	'appointment_id'];
}