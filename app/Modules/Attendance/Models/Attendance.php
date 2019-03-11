<?php

namespace App\Modules\Attendance\Models;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $table = 'attendance';
    protected $fillable = ['employee_id', 'time_in', 'time_out', 'note'];

    /**
     * Check if already sign in function
     *
     * @return int
     */
    public static function get_signed_id() {
        $today = Carbon::now();
        $data = Self::whereDate('created_at', $today->toDateString())->where('employee_id', Auth::user()->id)->first();
        if($data)
            return $data->id;
        else
            return;
    }

    public static function is_signout() {
        $today = Carbon::now();
        $data = Self::whereDate('time_out', $today->toDateString())->where('employee_id', Auth::user()->id)->count();
        if($data)
            return true;
        else
            return false;
    }
}


