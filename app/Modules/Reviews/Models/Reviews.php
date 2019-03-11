<?php

namespace App\Modules\Reviews\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model {

    protected $table = "reviews";
    protected $fillable = ['employee_id', 'temp_id', 'json_data'];

}
