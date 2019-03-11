<?php

Route::group(['prefix'=>'admin/users', 'module' => 'Users', 'middleware' => ['web'], 'namespace' => 'App\Modules\Users\Controllers'], function() {

    Route::get('/', ['uses'=>'UsersController@index'])->name('users.index');
    Route::get('create', ['uses'=>'UsersController@create'])->name('users.create');
    Route::get('edit/{id}', ['uses'=>'UsersController@edit'])->name('users.edit');
    Route::post('store', 'UsersController@store')->name('users.store');
    Route::post('update', 'UsersController@update')->name('users.update');
    Route::post('delete', 'UsersController@destroy')->name('users.delete');

});
