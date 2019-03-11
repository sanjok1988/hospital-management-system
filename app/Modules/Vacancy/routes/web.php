<?php

Route::group(['prefix'=>'/admin/vacancy','module' => 'Vacancy', 'middleware' => ['web'], 'namespace' => 'App\Modules\Vacancy\Controllers'], function () {
    Route::get('/', 'VacancyController@index')->name('indexVacancy');
    Route::get('create', 'VacancyController@create')->name('createVacancy');
    Route::post('store', 'VacancyController@store')->name('storeVacancy');
    Route::get('edit/{id}', 'VacancyController@edit')->name('editVacancy');
    Route::get('view/{id}', 'VacancyController@show')->name('viewVacancy');
    Route::post('update/{id}', 'VacancyController@update')->name('updateVacancy');
    Route::get('delete/{id}', 'VacancyController@destroy')->name('deleteVacancy');
});
