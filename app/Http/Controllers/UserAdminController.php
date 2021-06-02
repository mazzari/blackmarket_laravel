<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserAdminController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::where('admin',1)->get();
        return view('admin.user_admin.get', compact('users')); 
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user_admin.tambah');

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
            $input['password']=bcrypt($request->password);
        $user=new User;
        $user->fill($input);
        $user->save();

        return redirect('admin/user_admin');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_admin  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_admin  
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('admin.user_admin.edit', compact('user'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user_admin  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $user->fill($request->all());
        $user->save();
        return redirect('admin/user_admin');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_admin  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        $user->delete();
        return redirect('admin/user_admin');
        //
    }
    //
}
    