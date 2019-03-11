<?php

Route::group(['module' => 'Forms', 'middleware' => ['web'], 'namespace' => 'App\Modules\Forms\Controllers'], function() {

    Route::resource('Forms', 'FormsController');

});
