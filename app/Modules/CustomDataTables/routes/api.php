<?php

Route::group(['module' => 'CustomDataTables', 'middleware' => ['api'], 'namespace' => 'App\Modules\CustomDataTables\Controllers'], function() {

    Route::resource('CustomDataTables', 'CustomDataTablesController');

});
