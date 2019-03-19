<?php

Route::group(['prefix'=>'review','module' => 'Reviews', 'middleware' => ['web'], 'namespace' => 'App\Modules\Reviews\Controllers'], function() {
    Route::get('show/form', 'ReviewsController@showForm')->name('review.show.form');

    Route::get('candidates', 'ReviewsController@getCandidates')->name('review.candidates');

    Route::post('store', 'ReviewsController@saveReview')->name('review.store');
    Route::get('select/candidate', 'ReviewsController@selectCandidate')->name('review.select.candidate');
    Route::post('store/candidate', 'ReviewsController@storeCandidate')->name('review.store.candidate');

});
