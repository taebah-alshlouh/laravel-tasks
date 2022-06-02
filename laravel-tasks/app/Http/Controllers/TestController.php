<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   public function home(){
       return view('candy');
   }
   public function about(){
    return view('aboutus');
    }
    public function contact(){
        return view('contactus');
        }
  public function login(){
     return view('login');
 }
 public function signup(){
    return view('signup');
}
  public function namesRender(){
      $names=array('first' => 'Taebah Bassam Shlouh' ,'secound' => 'marwa nseerat' , 'third' => 'Dua-Alsafasfeh' ,'forth' =>'Anas Allawafeh');
      return view("aboutus")->with($names);
  }
}
