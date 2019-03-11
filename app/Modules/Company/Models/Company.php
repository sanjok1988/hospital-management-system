<?php

namespace App\Modules\Company\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $table = "companies";

    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

    protected $dates = ['deleted_at'];

    public function vacancies()
    {
        return $this->hasMany('App\Modules\Vacancy\Models\Vacancy', 'company_id', 'id');
    }

    public static function getCompanyNameById($id)
    {
        return self::find($id)->company_name;
    }
}
