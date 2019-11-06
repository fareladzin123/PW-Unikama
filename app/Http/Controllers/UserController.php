<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function dashboard(){

        return view('user-side.dashboard');
    }

    public function category(){

        return view('user-side.category');        
    }

    public function subcategory($kategori_id){
        return view('user-side.subcategory');        
    }

    public function searchfile(){
        return view('user-side.findfile');        
    }

    public function addfile(){
        return view('user-side.addfile');
    }
}
