<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

//This method of routing cannot be used in laravel 8
// Route::get('/contacts', 'ContactsController@get');
// Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
// Route::post('/conversation/send', 'ContactsController@send');


//Laravel 8 version of routing 
Route::get('/contacts', [App\Http\Controllers\ContactsController::class, 'get']);
Route::get('/conversation/{id}', [App\Http\Controllers\ContactsController::class, 'getMessagesFor']);
Route::post('/conversation/send', [App\Http\Controllers\ContactsController::class, 'send']);


