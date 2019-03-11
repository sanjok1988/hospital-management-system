<?php

namespace App\Modules\Employees\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employees extends Model {

    use SoftDeletes;

    protected $table = "employees";

    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

    protected $dates = ['deleted_at'];

    public static function getEmailById($id){
       return Self::select('email')->where('id', $id)->first()->email;
    }


}
