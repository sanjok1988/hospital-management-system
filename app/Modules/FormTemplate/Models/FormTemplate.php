<?php

namespace App\Modules\FormTemplate\Models;

use Illuminate\Database\Eloquent\Model;

class FormTemplate extends Model
{
    protected $table = "templates";
    protected $fillable = ['name', 'json_data'];
}
