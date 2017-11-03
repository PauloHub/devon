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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/register_child', 'ChildController@create');

Route::get('/register_employee', 'EmployeeController@create');
Route::post('/register_employee', 'EmployeeController@store');
Route::get('/list_employee', 'EmployeeController@list');
Route::get('/show_employee/{id}', 'EmployeeController@show');
Route::get('/edit_employee/{id}', 'EmployeeController@edit');
Route::put('/edit_employee/{id}', 'EmployeeController@update'); //metodo http para edição do laravel

Route::get('/find_cities',  'CityController@find_cities');
Route::get('/find_counselors',  'CounselorController@find_counselors');

Route::get('/register_child', 'ChildController@create', 'CityController@state_city');
Route::post('/register_child', 'ChildController@store');

Route::get('/list_child', 'ChildController@list');


