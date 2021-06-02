<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Bank;
use Illuminate\Http\Request;

class TampilanController extends Controller
{
    
    public function login()
    {
        return view('login');
    }

    public function home()
    {
        return view('home');   
    }

    public function shop()
    { 
        $barangs=Barang::all();
        return view('shop',compact('barangs'));   
    }   

    public function register()
    {
        return view('register');   
    }   
    public function admin_dasboard()
    {
        return view('admin.index');   
    }  
   public function chekout(Barang $barang)
   {
       $banks=Bank::all();
       return view('chekout', compact('barang','banks'));
       
   }
   public function contact()
   {
       return view('contact');
   }
   public function detailorder(Barang $barang)
   {
   return view('detailorder',compact('barang'));
   }
   public function user_home(){
       return view("pengguna.home");
   }
   
}


