<?php

namespace App\Modules\Jobs\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jobs extends Model {

    use SoftDeletes;

    protected $table = "jobs";

    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

    protected $dates = ['deleted_at'];

}
