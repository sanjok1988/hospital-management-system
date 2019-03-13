<?php

Route::group(['prefix'=>'form/questionnaire','module' => 'Questions', 'middleware' => ['web'], 'namespace' => 'App\Modules\Questions\Controllers'], function() {

    Route::get('/', 'QuestionsController@questionList')->name('questionnaire.index');
    Route::get('create', 'QuestionsController@createQuestionnaire')->name('questionnaire.create');
    Route::get('edit/{id}', 'QuestionsController@editQuestionnaire')->name('questionnaire.edit');
    Route::post('store', 'QuestionsController@storeQuestionnaire')->name('questionnaire.store');
    Route::get('delete/{id}', 'QuestionsController@destroyQuestionnaire')->name('questionnaire.delete');

});
