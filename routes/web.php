<?php
use app\Http\Controllers;
use Carbon\Traits\Test;
use Illuminate\Support\Facades\Route;
//namespace App\Http\Controllers;
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


//Route::get('/home', 'HomeController@index')->name('homes');
Auth::routes();
Route::get('/','AdminController@index')->name('dashboard');
Route::get('/viewallclients','ClientController@index')->name('all_client');
Route::get('/viewallowners','OwnerController@index')->name('all_owners');
Route::get('/viewalldevices','DeviceController@index')->name('all_devices');
Route::get('/viewallesim','EsimController@index')->name('all_esim');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/viewsingleesim','EsimController@show')->name('single-esim');
Route::get('/viewsingledevice','DeviceController@show')->name('single-device');
Route::get('/viewsingleclient','ClientController@show')->name('single-client');
Route::get('/esimform','EsimController@create')->name('esim_create');
Route::get('/viewallplans','PlanController@index')->name('all_plan');
Route::get('/devicetypeform','DeviceController@typeshow')->name('device_type_show');
Route::get('/devicetype/post','DeviceController@type')->name('device-type');
Route::get('/deviceform','DeviceController@create')->name('create_device');
Route::post('/device/post','DeviceController@store')->name('store_device');
Route::post('/esim/post/','EsimController@store')->name('store_esim');
Route::get('/plan/assignesim','PlanController@create')->name('plan_create');
Route::post('/plan/assigne','PlanController@store')->name('plan_store');
Route::get('/client/create','ClientController@create')->name('client_create');
Route::post('/client/post','ClientController@store')->name('store_client');
Route::get('/owner/create','OwnerController@create')->name('owner_create');
Route::post('/owner/post','OwnerController@store')->name('owner_post');
