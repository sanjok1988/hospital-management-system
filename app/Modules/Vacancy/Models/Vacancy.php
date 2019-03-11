<?php

namespace App\Modules\Vacancy\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vacancy extends Model
{
    use SoftDeletes;

    protected $table = 'vacancies';
    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];


    public function companies()
    {
        return $this->belongsTo('App\Modules\Company\Models\Company');
    }

    public function companyName($id)
    {
        dd($this->companyName($id));
        return $this->companies()->company_name;
    }
}
