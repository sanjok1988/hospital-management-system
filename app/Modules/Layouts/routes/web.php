<?php

Route::group(['module' => 'Layouts', ['middleware' => 'auth'], 'namespace' => 'App\Modules\Layouts\Controllers'], function() {

    
    Route::get('admin', 'LayoutsController@showDashboard')->name('dashboard');

});
