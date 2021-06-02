<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
class TransaksiController extends Controller
{
    public function index()
            {
                $transaksis=transaksi::all();
        
                return view('admin.transaksi.get',compact('transaksis'));
            } 
    //
}
