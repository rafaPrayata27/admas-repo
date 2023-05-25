<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PetugasOrAdminController extends Controller
{
    function index()
    {
        return view('admin.index');
    }

    function login(Request $request)
    {
        Session::flash('email',$request->email);
        $request->validate([
            'email' => 'required',
            'password'=> 'required'
            
        ],[
            'email.required'=>'email wajib diisi!!',
            'password.required'=>'password wajib diisi!!',
        ]);

        $info_login =[
            'email' => $request->email,
            'password' => $request->password
          ];
          
    
          if(Auth::guard('web')->attempt($info_login)){
            return redirect()->to('dashbord')->with('petugas','berhasil login');
          }
          else{
            return redirect()->to('petugas-admin')->withErrors('Email dan password tidak sesuai');
    
          }
    }

    function logout()
    {
      Auth::guard('web')->logout();

      toast('Berhasil Log Out','success')->autoClose(5000);
      return redirect('petugas-admin');
    }
   
}
