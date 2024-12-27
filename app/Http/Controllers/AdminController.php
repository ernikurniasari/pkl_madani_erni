<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function hello(){
        return view('admins.dasboard');
    }

    public function banner(){
         return view('admins.banner');
    }

    public function product(){
        return view('admins.product');
   }

   public function addbanner(){
    return view('admins.addbanner');
}
}
