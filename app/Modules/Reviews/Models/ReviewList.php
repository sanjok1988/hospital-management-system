<?php

namespace App\Modules\Reviews\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewList extends Model {

    protected $table = "review_list";
    protected $fillable = ['employee_id', 'form_name'];

}
