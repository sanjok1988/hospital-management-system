<?php

Route::group([ 'prefix'=>'/admin/company','module' => 'Company', 'middleware' => ['web'], 'namespace' => 'App\Modules\Company\Controllers'], function () {
    Route::get('/', 'CompanyController@index')->name('company.index');
    Route::get('create', 'CompanyController@create')->name('company.create');
    Route::post('store', 'CompanyController@store')->name('company.store');

    Route::get('/edit/{id}', 'CompanyController@edit')->name('company.edit');
    Route::get('/view/{id}', 'CompanyController@show')->name('company.view');
    Route::post('update/{id}', 'CompanyController@update')->name('company.update');
    Route::get('delete/{id}', 'CompanyController@destroy')->name('company.delete');
});


