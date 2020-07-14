<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'homeController@index');




 // this route related to doctors

Route::get('post', 'postController@index');
Route::get('post/{id}', 'postController@show');
Route::get('/delete/{id}', 'postController@destroy');
Route::get('/about', 'postController@about');
Route::get('/blog', 'postController@blog');


Route::get('/doctors', 'doctorsController@allDoctors');
Route::get('/viewadmindoctors', 'admin\doctorsController@index');
Route::get('/addadmindoctors', 'admin\doctorsController@create');
Route::post('/adddoctors', 'admin\doctorsController@add');
Route::get('/editdoctors/{id}', 'admin\doctorsController@edit');
Route::post('/updatedoctors/{id}', 'admin\doctorsController@update');
Route::get('/deletedoctors/{id}', 'admin\doctorsController@delete');

// this route related to departments
Route::get('/departments', 'departmentsController@departments');
Route::get('/viewadmindepartments', 'admin\departmentsController@index');
Route::get('/addadmindepartments', 'admin\departmentsController@create');
Route::post('/adddepartments', 'admin\departmentsController@add');
Route::get('/editdepartments/{id}', 'admin\departmentsController@edit');
Route::get('/deletedepartments/{id}', 'admin\departmentsController@delete');
Route::post('/updatedepartments/{id}', 'admin\departmentsController@update');


// this route related to beds

Route::get('/viewadminbeds', 'admin\bedController@index');
Route::get('/addadminbed', 'admin\bedController@create');
Route::post('/addbed', 'admin\bedController@add');
Route::get('/editbed/{id}', 'admin\bedController@edit');
Route::get('/deletebed/{id}', 'admin\bedController@delete');
Route::post('/updatebed/{id}', 'admin\bedController@update');





Route::get('/viewadminappointments', 'admin\appointmentsController@index');
Route::get('/viewadminbedorder', 'admin\bedorderController@index');




// this route to make appointments

Route::get('/appointment', 'appointmentController@index');
Route::post('/appointmentdetails', 'appointmentController@add');


// this route to homepage


Route::get('/departmentsdetails/{id}', 'homeController@departmentdetails');

// this route related to patients

Route::get('/makebed', 'patientController@index');
Route::post('/addpatient', 'patientController@add');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
