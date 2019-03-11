<?php

Route::group(['prefix'=>'admin/employees','module' => 'Employees', 'middleware' => ['web'], 'namespace' => 'App\Modules\Employees\Controllers'], function () {
    Route::get('/', 'EmployeesController@index')->name('employees.index');
    Route::get('create', 'EmployeesController@create')->name('employees.create');
    Route::get('edit/{id}', 'EmployeesController@edit')->name('employees.edit');
    Route::get('delete/{id}', 'EmployeesController@destroy')->name('employees.delete');

    Route::post('store', 'EmployeesController@store')->name('employees.store');

    Route::get('profile', 'EmployeesController@profile')->name('employee.profile');
});
