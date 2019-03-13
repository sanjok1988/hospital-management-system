<?php

namespace App\Modules\Forms\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GeneratedForms extends Model {

    //use SoftDeletes;

    protected $table = "generated_forms";

    protected $guarded = ['created_at', 'updated_at'];


}
