<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class DataPelangganController extends Controller
{
    public function index()
    {
        $pelanggans=User::where('admin',0)->get();

        return view('admin.customer.get',compact('pelanggans'));
    } 
    # code...
   
    //
}
