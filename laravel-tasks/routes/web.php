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
// Required Parameters:
Route::get('/{name}/{id}', function ($name,$id) {
    return "Hellooooooooooooo ".$name." your id is ".$id;
});

// Optional Parameters:

// Route::get('/{name?}/{id?}', function ($name = 'null',$id = null) {
//     return "Helloo ".$name." your id is ".$id;
// });
Route::get('/', function () {
    // return view('welcome');

    return "HELLO EVERYBODY";
});
Route::get('/hello', function () {
   

    return "<h1>HELLO EVERYBODY</h1>";
});

Route::view('/welcome', 'welcome');

Route::get('/hello', function () {

    return "<h1>HELLO EVERYBODY</h1>";
});
ROUTE::get('/home',function(){
   return view('candy');
});
ROUTE::get('/contactus',function(){
    return view('contactus');
 });
 ROUTE::get('/aboutus',function(){
    return view('aboutus');
 });