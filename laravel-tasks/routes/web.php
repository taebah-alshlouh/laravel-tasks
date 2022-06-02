<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SourceController;
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
// Required Parameters:
// Route::get('/{name}/{id}', function ($name,$id) {
//     return "Hellooooooooooooo ".$name." your id is ".$id;
// });

// Optional Parameters:

// Route::get('/{name?}/{id?}', function ($name = 'null',$id = null) {
//     return "Helloo ".$name." your id is ".$id;
// });
Route::view('/welcome', 'welcome');
ROUTE::get('/home',function(){
   return view('candy');
});
ROUTE::get('/contactus',function(){
    return view('contactus');
 });
 ROUTE::get('/aboutus',function(){
    return view('aboutus');
 });
 ROUTE::get('/login',function(){
    return view('login');
 });
 ROUTE::get('/signup',function(){
    return view('signup');
 });

 Route::get('/id/{id}', [SourceController::class,'id'])->where('id', '[0-9]+');
Route::get('/name/{name}', [SourceController::class,'name'])-> where('name', '[A-z]+');