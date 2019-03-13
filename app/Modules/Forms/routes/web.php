<?php
Route::group(['prefix'=>'form','module' => 'Forms', 'middleware' => ['web'], 'namespace' => 'App\Modules\Forms\Controllers'], function() {

    Route::get('/', 'FormsController@index')->name('form.index');
    Route::get('create', 'FormsController@create')->name('form.create');
    Route::get('edit/{id}', 'FormsController@edit')->name('form.edit');
    Route::post('store', 'FormsController@store')->name('form.store');
    Route::get('delete/{id}', 'FormsController@destroy')->name('form.delete');

    //Route::get('edit/{id}', 'FormsController@edit')->name('form.edit');

});