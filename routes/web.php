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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/','TruckController@index');
Route::post('create','TruckController@create');
Route::get('/data','TruckController@data');
Route::get('/reset', function(){
 
    \Artisan::call('db:seed --class=ProductTableSeeder');
});
