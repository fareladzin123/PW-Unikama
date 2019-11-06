<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Kategori;
use App\Subkategori;
use App\Data;

class UserController extends Controller
{
    public function dashboard(){
        $user_id = Auth::id();

        $subkategori = Subkategori::where('user_id','=',$user_id)->select('id')->first();
        $data = Data::where('subkategori_id','=',$subkategori)
            ->orderBy('id','desc')
            ->limit(4)
            ->get();
        
        $kategori = Kategori::get();

        return view('user-side.dashboard',['kategori' => $kategori,'data' => $data]);
    }

    public function category($kategori_id){
        $user_id = Auth::id();

        $kategori = Kategori::where('id','=',$kategori_id)
            ->get();

        $subkategori = Subkategori::where('kategori_id','=',$kategori_id)
            ->where('user_id','=',$user_id)
            ->get();

        return view('user-side.category',['kategori' => $kategori, 'subkategori' => $subkategori]);        
    }

    public function subcategory($subkategori_id){
        $kategori = Subkategori::join('kategoris','kategoris.id','=','subkategoris.kategori_id')
            ->where('subkategoris.id','=',$subkategori_id)
            ->get(['kategoris.id as id', 'kategoris.nama_kategori as nama_kategori']);

        $subkategori = Subkategori::where('id','=',$subkategori_id)
            ->get();

        $data = Data::where('subkategori_id','=',$subkategori_id)
            ->get();

        return view('user-side.subcategory',['data' => $data, 'subkategori' => $subkategori, 'kategori' => $kategori]);        
    }

    public function searchfile(){
        return view('user-side.findfile');        
    }

    public function addfile(){
        return view('user-side.addfile');
    }
}
