<?php

namespace App\Modules\Reviews\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewResult extends Model {

    protected $table = "review_result";
    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

}
