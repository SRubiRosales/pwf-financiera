<?php

use Illuminate\Support\Facades\Route;

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
    //factory(\App\Models\Customer::class, 10)->create();
    return view('welcome');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customers/index', 'CustomersController@index')->name('customers.index');
Route::get('/customers/new', 'CustomersController@create')->name('customers.create');
Route::post('/customers', 'CustomersController@store')->name('customers.store');
Route::delete('/customers/{id}', 'CustomersController@destroy')->name('customers.destroy');

Route::get('/lendings/index', 'LendingsController@index')->name('lendings.index');
Route::get('/lendings/new', 'LendingsController@create')->name('lendings.create');