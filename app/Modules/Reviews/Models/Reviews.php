<?php

namespace App\Modules\Reviews\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model {

    protected $table = "reviews";
    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

}
