<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    function index()
    {
        return view('user.dex');
    }
    function login(Request $request)
    {
        Session::flash('username',$request->username);
       

        $info_login =[
            'username' => $request->username,
            'password' => $request->password
          ];
          
    
          if(Auth::guard('masyarakat')->attempt($info_login))
          {
           
           
            return redirect('home')->with('success','Berhasil login!');
          }
          else{
            alert()->error('Gagal Login!','mohon cek kembali username dan password')->showConfirmButton('Oke', '	#FF8C00');

            return back();
    
          }
       }


       function register()
       {
          //
       }

       function create(Request $request)
       {
        
        
        
        $data=[
            'nik' => $request->nik,
            'nama' => $request->nama,
          'username' => $request->username,
          'password' =>Hash::make( $request->password),
          'telp' => $request->telp,
          
        
      ];
      Masyarakat::create($data);

      $infologin =[
          'username'=> $request->username,
          'password'=>$request->password
          
      ];

      if(Auth::guard('masyarakat')->attempt($infologin))
      {
          return redirect()->to('home')->with('create','berhasil membuat akun!!');


      }
      else
      {
          return redirect()->to('user')->withErrors('gagal membuat akun');

      }

  }


    function logout()
    {
      Auth::guard('masyarakat')->logout();

      toast('Berhasil Log Out','success')->autoClose(5000);
      return redirect('user');
    }

       }
     

