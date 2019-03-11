<?php

Route::group(['module' => 'FormTemplate', 'middleware' => ['web'], 'namespace' => 'App\Modules\FormTemplate\Controllers'], function() {

    Route::resource('FormTemplate', 'FormTemplateController');

});
