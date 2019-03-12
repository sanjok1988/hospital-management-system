<?php

namespace App\Modules\Reviews\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewResult extends Model {

    protected $table = "review_result";
    protected $fillable = ['employee_id', 'form_name', 'field_name', 'value', 'point'];

}
