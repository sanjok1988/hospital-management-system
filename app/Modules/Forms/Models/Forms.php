<?php

namespace App\Modules\Forms\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Forms extends Model {

    //use SoftDeletes;

    protected $table = "forms";

    protected $guarded = ['created_at', 'updated_at'];

    public static function getNameById($id){
        $form = Self::select('name')->find($id);
        if($form)
        return $form->id;

        return null;
    }


}
