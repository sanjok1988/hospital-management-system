<?php

Route::group(['prefix'=>'form/questionnaire','module' => 'Forms', 'middleware' => ['web'], 'namespace' => 'App\Modules\Forms\Controllers'], function() {

    Route::get('/', 'FormsController@questionList')->name('questionnaire.index');
    Route::get('create', 'FormsController@createQuestionnaire')->name('questionnaire.create');
    Route::get('edit/{id}', 'FormsController@editQuestionnaire')->name('questionnaire.edit');
    Route::post('store', 'FormsController@storeQuestionnaire')->name('questionnaire.store');
    Route::get('delete/{id}', 'FormsController@destroyQuestionnaire')->name('questionnaire.delete');

    //Route::get('edit/{id}', 'FormsController@edit')->name('form.edit');

});

Route::group(['prefix'=>'form','module' => 'Forms', 'middleware' => ['web'], 'namespace' => 'App\Modules\Forms\Controllers'], function() {

    Route::get('/', 'FormsController@index')->name('form.index');
    Route::get('create', 'FormsController@create')->name('form.create');
    Route::get('edit/{id}', 'FormsController@edit')->name('form.edit');
    Route::post('store', 'FormsController@store')->name('form.store');
    Route::get('delete/{id}', 'FormsController@destroy')->name('form.delete');

    //Route::get('edit/{id}', 'FormsController@edit')->name('form.edit');

});