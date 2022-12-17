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
    return view('welcome');
});
Route::get('/inspire', 'App\Http\Controllers\InspiringController@inspire');

Route::get('/login', 'App\Http\Controllers\InspiringController@inspire');
Route::group(['middleware'=>'pro','prefix'=>'v2','namespace'=>'Api',],function (){

});
Route::get('/page', function(){
    return App\Models\users::all();
});
Route::get('/card', function(){
    return App\Models\cards::all();
});
