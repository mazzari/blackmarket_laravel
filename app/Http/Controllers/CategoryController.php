<?php

namespace App\Http\Controllers;
use App\Models\Category_Barang;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $cats=Category_Barang::all();

        return view('admin.category.get',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat=new Category_Barang;
        $cat->fill($request->all());
        $cat->save();

        return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category_Barang  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(Category_Barang $cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category_Barang  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_Barang $cat)
    {
        return view('admin.category.edit',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category_Barang  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category_Barang $cat)
    {
        
        $cat->fill($request->all());
        $cat->save();

        return redirect('admin/category');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category_Barang  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category_Barang $cat)
    {
        $cat->delete();

        return redirect('admin/category');
    }
}
