<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function dashboard($user_id){
        $user = User::where('id','=',$user_id);

        return view('user-side.dashboard');
    }

    public function category($user_id){
        $user = User::where('id','=',$user_id);

        return view('user-side.category');        
    }

    public function subcategory($user_id, $kategori_id){
        $user = User::where('id','=',$user_id);

        return view('user-side.subcategory');        
    }

    public function searchfile(){
        return view('user-side.findfile');        
    }
}
