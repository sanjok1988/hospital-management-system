<?php

Route::group(['prefix'=>'employee', 'module' => 'Attendance', 'middleware' => ['web'], 'namespace' => 'App\Modules\Attendance\Controllers'], function() {

    Route::get('/', 'AttendanceController@index')->name('attendance.index');
    Route::get('create', 'AttendanceController@create')->name('attendance.create');
    Route::post('store', 'AttendanceController@store')->name('attendance.store');

    Route::get('/edit/{id}', 'AttendanceController@edit')->name('attendance.edit');
    Route::get('/view/{id}', 'AttendanceController@show')->name('attendance.view');
    Route::post('update/{id}', 'AttendanceController@update')->name('attendance.update');
    Route::get('delete/{id}', 'AttendanceController@destroy')->name('attendance.delete');
 
   
});
/**
     * Attendance
     */
Route::group(['prefix'=>'employee', 'module' => 'Attendance', 'middleware' => ['web'], 'namespace' => 'App\Modules\Attendance\Controllers'], function() {

   
    Route::get('attendance', 'AttendanceController@myattendance')->name('attendance.my');
    Route::get('signin', 'AttendanceController@signIn')->name('employee.signin');
    Route::get('signout', 'AttendanceController@signOut')->name('employee.signout');
});
