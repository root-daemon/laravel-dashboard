<?php
use app\Http\Controllers;
use Carbon\Traits\Test;
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


//Route::get('/home', 'HomeController@index')->name('homes');
Auth::routes();
Route::get('/','AdminController@index')->name('dashboard');
Route::get('/viewallclients','ClientController@index')->name('all_client');
Route::get('/viewallowners','OwnerController@index')->name('all_owners');
Route::get('/viewalldevices','DeviceController@index')->name('all_devices');
Route::get('/viewallesim','EsimController@index')->name('all_esim');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test','AdminController@test')->name('test');
