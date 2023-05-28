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
Route::group(['middleware'=>['throttle:limiter']],function()
{

Route::group(['middleware'=>['kicker']],function()
{
    Route::get('/', function () {
        return redirect('/home');
    });
    Route::get('/HERMES', function () {
        return redirect('/home');
    });
    
    Route::view('/home','home');
    Route::view('/login','login'); 
    Route::view('/signup','signup');
    Route::post('/signupform','App\Http\Controllers\signup@signup');
    Route::post('/loginform','App\Http\Controllers\login@login');
    Route::view('/forget','forget');
    Route::post('/password','App\Http\Controllers\forget@password');
    Route::post('/new','App\Http\Controllers\forget@new');
});


Route::group(['middleware'=>['allow']],function()
{
    Route::get('/profile','App\Http\Controllers\profile@profile');
    Route::get('/dashboard','App\Http\Controllers\dashboard@dashboard');
    Route::get('/chatroom','App\Http\Controllers\room@roomstart');
    Route::post('/bot1','App\Http\Controllers\botcontroller@botmessage');
    Route::get('/logout','App\Http\Controllers\logout@logout');
    Route::get('/changepassword','App\Http\Controllers\changepassword@changepassword');
    Route::post('/changepasswordform','App\Http\Controllers\changepassword@change');
    Route::any('/roomcheck','App\Http\Controllers\room@entryrequest');

});


Route::group(['middleware'=>['room']],function()
{
    Route::any('/room','App\Http\Controllers\room@roomentry'); 
    Route::any('/msg1','App\Http\Controllers\Ajaxroom@msg1'); 
    Route::post('/msg','App\Http\Controllers\Ajaxroom@msg'); 
    Route::get('/deleteroom','App\Http\Controllers\room@delete'); 
    Route::get('/roomlogout','App\Http\Controllers\room@logout'); 

});
 





});

