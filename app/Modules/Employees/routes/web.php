<?php

Route::group(['prefix'=>'admin/employees','module' => 'Employees', 'middleware' => ['web'], 'namespace' => 'App\Modules\Employees\Controllers'], function () {
    Route::get('/', ['middleware' => ['permission:employee-list'],'uses'=>'EmployeesController@index'])->name('employees.index');
    Route::get('create', ['middleware' => ['permission:employee-create'],'uses'=>'EmployeesController@create'])->name('employees.create');
    Route::get('edit/{id}', ['middleware' => ['permission:employee-edit'],'uses'=>'EmployeesController@edit'])->name('employees.edit');
    Route::get('delete/{id}', ['middleware' => ['permission:employee-delete'],'uses'=>'EmployeesController@destroy'])->name('employees.delete');

    Route::post('store', ['middleware' => ['permission:employee-create'],'uses'=>'EmployeesController@store'])->name('employees.store');

    Route::get('profile', 'EmployeesController@profile')->name('employee.profile');
});
