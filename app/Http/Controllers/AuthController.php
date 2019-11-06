<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Aktivasi;
use Carbon\Carbon;
use App\Mail\UserActivation;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{ 
    public function indexLogin() 
    {
        return view('login.login');
    }

    public function checkLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        }
        else {
            return redirect('/login')->with('alert-fail','Email atau password salah!');
        }
    }

    public function indexRegister() 
    {
        return view('login.registration');
    }


    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            ]);

        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect('/login')->with('alert-success','Berhasil daftar, silahkan login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('alert-logout','Berhasil Logout!');
    }

    public function changepass(){
        return view('upPass');
    }
    public function uppass(Request $request){
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        return redirect('/dashboard')->with('alert-success','Berhasil update password');
    }
}
