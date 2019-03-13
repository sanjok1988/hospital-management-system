<?php

Route::group(['module' => 'Questions', 'middleware' => ['api'], 'namespace' => 'App\Modules\Questions\Controllers'], function() {

    Route::resource('Questions', 'QuestionsController');

});
