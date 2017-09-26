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
//Register
Route::get('/register_child', 'ChildController@create');
Route::get('/register_employee', 'EmployeeController@create');
Route::post('/register_employee', 'EmployeeController@store');
Route::get('/list_employee', 'EmployeeController@listar');
Route::get('/show_employee/{id}', 'EmployeeController@show');

//List
