<?php

Route::group(['module' => 'Jobs', 'middleware' => ['web'], 'namespace' => 'App\Modules\Jobs\Controllers'], function() {

    Route::resource('Jobs', 'JobsController');

});
