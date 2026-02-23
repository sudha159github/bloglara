<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function home(Request $request){
    //     $request->user()=='admin'
    //     return view('dashboard');
    // }

     public function index(){
        return view('admin.dashboard');

    }
}

