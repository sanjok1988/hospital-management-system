<?php

Route::group(['prefix'=>'form', 'module' => 'FormTemplate', 'middleware' => ['web'], 'namespace' => 'App\Modules\FormTemplate\Controllers'], function() {

    Route::get('/', 'FormTemplateController@index')->name('form.index');
    Route::get('create', 'FormTemplateController@create')->name('form.create');

});
