<?php

Route::group(['module' => 'Layouts', 'middleware' => ['api'], 'namespace' => 'App\Modules\Layouts\Controllers'], function() {

    Route::resource('Layouts', 'LayoutsController');

});
