<?php

Route::group(['prefix'=>'api/review', 'module' => 'Reviews', 'middleware' => ['api'], 'namespace' => 'App\Modules\Reviews\Controllers'], function () {
    Route::post('template/create', "ReviewsController@createTemplate");
    Route::post('employee/store', "ReviewsController@store");
    Route::post('send', "ReviewsController@sendForReview");
});
