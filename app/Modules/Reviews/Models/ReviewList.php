<?php

namespace App\Modules\Reviews\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewList extends Model {

    protected $table = "candidate_list";
    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

}
