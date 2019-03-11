<?php

namespace App\Modules\Options\Models;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    protected $table = "options";
    protected $fillable = ['name', 'value'];

    public static function getOption($name){
        return Self::where('name', $name)->select('value')->first()->value;
    }

    public static function setOption($name, $value){
        return Self::save(['name'=>$name, 'value'=>$value]);
    }

    public static function updateOption($name, $value){
        return Self::where('name', $name)->update(['value'=>$value]);
    }
}
