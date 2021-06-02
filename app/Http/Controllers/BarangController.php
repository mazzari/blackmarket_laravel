<?php

namespace App\Http\Controllers;
use App\Models\barang;
use Illuminate\Http\Request;
use App\Models\Category_Barang;

class BarangController extends Controller
{
    
    //
    public function index()
    {
        $barangs=barang::all();
        return view('admin.barang.get', compact('barangs'));

    }

  

        public function create()
      {
          $cats=Category_Barang::all();

        return view('admin.barang.tambah',compact("cats"));

       }
       public function store(request $request) 
        {
            $barang=new Barang;
            $barang->fill($request->all());
            $barang->save();

            return redirect('admin/barang');
        }

        public function destroy(Barang $barang)
        {
            $barang->delete();
            return redirect('admin/barang');

        }
        public function edit(Barang $barang)
        {
        return view('admin.barang.edit',compact('barang'));
        }
       
        public function update(Request $request, Barang $barang)
        {
        
        $barang->fill($request->all());
        $barang->save();

        return redirect('admin/barang');
        }
    }
    