<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class productsViewController extends Controller
{ 
    public function productsRender(){
            $candy = DB::select('select * from candy');
            return view('/shop',['candy'=>$candy]);
          }
}