<?php

Route::group(['prefix'=>'admin', 'module' => 'CustomDataTables', 'middleware' => ['web'], 'namespace' => 'App\Modules\CustomDataTables\Controllers'], function () {
    Route::get('category/data', 'CustomDataTablesController@getCategoryDataTable')->name('category.data');
    Route::get('news/data', 'CustomDataTablesController@getNewsDataTable')->name('news.data');
    Route::get('company/data', 'CustomDataTablesController@getCompanyDataTable')->name('company.data');
    Route::get('vacancy/data', 'CustomDataTablesController@getVacancyDataTable')->name('vacancy.data');
    Route::get('page/data', 'CustomDataTablesController@getPageDataTable')->name('page.data');
    Route::get('users/data', 'CustomDataTablesController@getUsersDataTable')->name('users.data');
});
