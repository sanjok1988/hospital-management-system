<?php

Route::group(['prefix'=>'api/attendance','module' => 'Attendance', 'middleware' => ['api'], 'namespace' => 'App\Modules\Attendance\Controllers'], function() {

    Route::get('/', 'AttendanceController@getData');
    Route::get('/absent', 'AttendanceController@getAbsentEmployees');

});
