<?php

Route::group(['module' => 'Forms', 'middleware' => ['api'], 'namespace' => 'App\Modules\Forms\Controllers'], function() {

    Route::resource('Forms', 'FormsController');

});
