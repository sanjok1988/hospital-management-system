<?php

Route::group(['prefix'=>'api/employees','module' => 'Employees', 'middleware' => ['api'], 'namespace' => 'App\Modules\Employees\Controllers'], function () {
    Route::get('/', 'EmployeesController@getData');
    Route::get('edit/{id}', 'EmployeesController@edit');
    Route::post('store', 'EmployeesController@store');
    Route::post('update/{id}', 'EmployeesController@update');
    Route::post('delete/{id}', 'EmployeesController@destroy');

    Route::get('fetch', 'EmployeesController@getEmployees');
});
