<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/find_cities',  'CityController@find_cities');
Route::get('/find_counselors',  'CounselorController@find_counselors');

Route::get('/register_employee', 'EmployeeController@create');
Route::post('/register_employee', 'EmployeeController@store');
Route::get('/list_employee', 'EmployeeController@list');
Route::get('/show_employee/{id}', 'EmployeeController@show');
Route::get('/edit_employee/{id}', 'EmployeeController@edit');
Route::put('/edit_employee/{id}', 'EmployeeController@update'); //metodo http para edição do laravel

Route::get('/register_child', 'ChildController@create');
Route::get('/register_child', 'ChildController@create', 'CityController@state_city');
Route::post('/register_child', 'ChildController@store');
Route::get('/list_child', 'ChildController@list');
Route::get('/show_child/{id}', 'ChildController@show');

Route::get('/register_donor', 'DonorController@create');
Route::post('/register_donor', 'DonorController@store');
Route::get('/list_donor', 'DonorController@list');
Route::get('/show_donor/{id}', 'DonorController@show');
Route::get('/edit_donor/{id}', 'DonorController@edit');
Route::put('/edit_donor/{id}', 'DonorController@update');

Route::get('/register_donation', 'DonationController@create');
Route::post('/register_donation', 'DonationController@store');
Route::get('/list_donation', 'DonationController@list');
Route::get('/show_donation/{id}', 'DonationController@show');
Route::get('/edit_donation/{id}', 'DonationController@edit');
Route::put('/edit_donation/{id}', 'DonationController@update');

