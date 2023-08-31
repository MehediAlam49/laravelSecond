<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function showHome(){
        return view('welcome');
    }
    public function showBlog(){
        return view('blogController');
    }
    public function showUser($id){
        return view('userController', ['id' => $id]);
    }
}
