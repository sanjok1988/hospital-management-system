<?php

Route::group(['prefix'=>'review','module' => 'Reviews', 'middleware' => ['web'], 'namespace' => 'App\Modules\Reviews\Controllers'], function() {
    Route::get('show/form', 'ReviewsController@showForm')->name('review.show.form');
    Route::post('store', 'ReviewsController@send')->name('review.store');

});
