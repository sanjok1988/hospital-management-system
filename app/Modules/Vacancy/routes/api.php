<?php

Route::group(['module' => 'Vacancy', 'middleware' => ['api'], 'namespace' => 'App\Modules\Vacancy\Controllers'], function() {

    Route::resource('Vacancy', 'VacancyController');

});
