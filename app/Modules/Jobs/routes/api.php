<?php

Route::group(['prefix'=>'api/jobs', 'module' => 'Jobs', 'middleware' => ['api'], 'namespace' => 'App\Modules\Jobs\Controllers'], function() {

    
    Route::get('/', 'JobsController@getData');
    Route::get('edit/{id}', 'JobsController@edit');
    Route::post('store', 'JobsController@store');
    Route::post('update/{id}', 'JobsController@update');
    Route::post('delete/{id}', 'JobsController@destroy');

});
