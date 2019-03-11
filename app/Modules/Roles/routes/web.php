<?php

Route::group(['prefix'=>'admin/roles', 'module' => 'Roles', 'middleware' => ['web'], 'namespace' => 'App\Modules\Roles\Controllers'], function() {

    //Route::get('/', 'RolesController@showPage')->name('roles.list');
    Route::get('/', ['uses'=>'RolesController@index'])->name('roles.index');
    Route::get('create', 'RolesController@create')->name('roles.create');
    Route::get('edit/{id}', 'RolesController@edit')->name('roles.edit');
    Route::post('store', 'RolesController@store')->name('roles.store');
    Route::post('update', 'RolesController@update')->name('roles.update');
    Route::post('delete/{id}', ['uses'=>'RolesController@destroy','middleware' => ['permission:role-delete']])->name('roles.delete');
    Route::post('getRolePermissions/{id}', 'RolesController@getRolePermissions')->name('roles.permission');

});


