<?php

namespace App\Modules\Questions\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model {

    protected $table = "questions";

    protected $guarded = ['created_at', 'updated_at'];

}
