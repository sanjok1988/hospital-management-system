<?php

Route::group(['prefix'=>'api/company', 'module' => 'Company', 'middleware' => ['api'], 'namespace' => 'App\Modules\Company\Controllers'], function() {

    Route::get('/', 'CompanyController@getData');
    Route::get('edit/{id}', 'CompanyController@edit');
    Route::post('store', 'CompanyController@store');
    Route::post('update/{id}', 'CompanyController@update');
    Route::post('delete/{id}', 'CompanyController@destroy');

});
