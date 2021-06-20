<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use PharIo\Manifest\RequiresElement;
use Symfony\Contracts\Service\Attribute\Required;
use Session;

class AuthController extends Controller
{
    public function register_user (Request $request)

    {
            $input=$request->all();
            $input['password']=bcrypt($request->password);
            $input['admin']=0;

            $user=new User;
            $user->fill($input);
            $user->save();

           return redirect('login');
        }          
        public function login(Request $req)
        {
              
           if(Auth::attempt(['email' => $req->email, 'password' => $req->password,'admin'=>1]))
             {
                return redirect('admin/index');

            }
               else if(Auth::attempt(['email' => $req->email, 'password' => $req->password,'admin'=>0])){
                  $req->session()->push('email', $req->email);
                  $data = Session::all();
                  
                  return redirect('home');
                  
               }
             else
                {
   //Login Fail
   Session::flash('error', 'Email atau password salah');
   return redirect('login');
             }

        }

        public function logout(Request $req){
           $req->session()->flush();
           return redirect('home');
        }
}
   