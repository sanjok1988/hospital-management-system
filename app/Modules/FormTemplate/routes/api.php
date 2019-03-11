<?php

Route::group(['prefix'=>'api/template', 'module' => 'FormTemplate', 'middleware' => ['api'], 'namespace' => 'App\Modules\FormTemplate\Controllers'], function () {
    Route::post('create', 'FormTemplateController@create');
    Route::get('/', 'FormTemplateController@getData');
    Route::get('fetch', 'FormTemplateController@getTemplates');
    Route::get('edit/{id}', 'FormTemplateController@edit');
});
