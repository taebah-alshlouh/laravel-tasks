<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\productsViewController;

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
// Optional Parameters:

// Route::get('/{name?}/{id?}', function ($name = 'null',$id = null) {
//     return "Helloo ".$name." your id is ".$id;
// });
 ROUTE::get('/aboutus',function(){
    return view('aboutus');
 });
 ROUTE::get('/login',function(){
    return view('login');
 });
 ROUTE::get('/signup',function(){
    return view('signup');
 });
 Route::get('/home', [TestController::class,'home']);
 Route::get('/signup', [TestController::class,'signup']);
 Route::get('/aboutus', [TestController::class,'about']);
 Route::get('/login', [TestController::class,'login']);
 Route::get('/contactus', [TestController::class,'contact']);
 Route::get('/aboutus', [TestController::class,'namesRender']);
 Route::get('/shop', [TestController::class,'shop']);
 Route::get('/shop', [productsViewController::class,'productsRender']);

Route::get('/id/{id}', [SourceController::class,'id'])->where('id', '[0-9]+');
Route::get('/name/{name}', [SourceController::class,'name'])-> where('name', '[A-z]+');