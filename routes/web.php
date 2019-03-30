<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();
$this->get('logout', 'Auth\LoginController@logout')->name('logout');
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
/**
 * / Authentication Routes...
* $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
* $this->post('login', 'Auth\LoginController@login');
* $this->post('logout', 'Auth\LoginController@logout')->name('logout');

* Registration Routes...
* $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
* $this->post('register', 'Auth\RegisterController@register');

* Password Reset Routes...
* $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
* $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
* $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
* $this->post('password/reset', 'Auth\ResetPasswordController@reset');
 */

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('404', function(){
    return view('errors.503');
})->name(404);
Route::get('500', function(){
    return view('errors.500');
})->name(500);
Route::get('403', function(){
    return view('errors.403');
})->name(403);


Route::get('admin','HomeController@login');
Route::post('dashboard','HomeController@admin');
Route::get('/admin/dashboard','HomeController@dashboard');

Route::get('appointment','AppointmentController@index');
Route::post('appointmentstore','AppointmentController@store');
Route::get('viewappointment','DoctorController@viewappointment');
Route::get('viewdoctor','AppointmentController@viewdoctor');






Route::get('/add/doctor','DoctorController@add');
Route::post('doctor/add','DoctorController@store');
Route::get('doctor/edit/{id}','DoctorController@edit');
Route::post('doctor/update/{id}', 'DoctorController@update');
Route::get('doctor/del/{id}','DoctorController@destroy');

Route::get('schedule/{id}','ScheduleController@schedule');
Route::get('manage_schedule/{id}','scheduleController@manage_schedule');
Route::post('manage_schedule/add/{id}', 'ScheduleController@store');
Route::get('doctor/schedule/edit/{id}', 'ScheduleController@edit');
Route::post('doctor/schedule/update/{id}', 'scheduleController@update');


Route::get('patient','PatientController@index');
Route::get('addpatient','AddPatientController@index');
Route::get('doctor','DoctorController@index');
Route::post('patient/details','PatientController@patients');

// doctor types 

Route::get('Doctor_types/{type}', 'DoctorController@viewneurologist');




// doctor details profile
Route::get('doctor/types/details/{type}','DoctorController@doctordetails');
Route::post('doctor/profile','DoctorController@profile');
Route::get('doctor/dashboard','DoctorController@dashboard');
Route::get('view/patient','DoctorController@patients');
Route::get('view/appointment','DoctorController@appointments');
Route::get('/doctor/preception/{id}','DoctorController@preception');
Route::post('store/presception','PatientController@store');



// users

Route::get('users','AdminController@view_users');
Route::get('users/create','AdminController@create_user');
Route::post('create','AdminController@store');

