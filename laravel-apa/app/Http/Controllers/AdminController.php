<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\RatingApp;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { $pengall =Pengaduan::count();
        $pengblm =Pengaduan::where('status','=','0')
        ->count();
        $pengpros =Pengaduan::where('status','=','proses')
        ->count();
        $pengsls =Pengaduan::where('status','=','selesai')
        ->count();

        $allkomen = RatingApp::count();
     
        $komentidakpuas =RatingApp::where('rating','=','Tidak_Puas')
        ->count();
        $puas =RatingApp::where('rating','=','Puas')
        ->count();
        $sangatpuas =RatingApp::where('rating','=','Sangat_Puas')
        ->count();

        //saran
       $saran= DB::table('rating')
        ->join('masyarakat', 'rating.nik', '=', 'masyarakat.nik')
        ->get();
  
   


        $pengaduan =Pengaduan::all();
        return view('dashbord.index',[
            'pengaduan' => $pengaduan,
            'pengall' => $pengall,
            'pengblm' => $pengblm,
            'pengpros' => $pengpros,
            'pengsls' => $pengsls,
            'allkomen' => $allkomen,
            'komentidakpuas' => $komentidakpuas,
            'puas' => $puas,
           'sangatpuas' => $sangatpuas,
           'saran' => $saran
           
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tanggapan = Tanggapan::where('id_pengaduan',$request->id_pengaduan )->first();

       
            $request->validate([
                'tanggapan' => 'required',
                
            ],[
                'tanggapan.required' => 'tanggapan wajib di isi',
            ]);
            $tanggapan = Tanggapan::create([
                
                'id_pengaduan' => $request->id_pengaduan,
                'tgl_tanggapan' => date('Y-m-d H:i:s'),
                'tanggapan' =>$request ->tanggapan,
                'user_id' =>  Auth::guard('web')->user()->id
                    ]);
                    toast('Berhasil Membuat Tanggapan!','success')->autoClose(3000)->position('center');  
                    return back();
        
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Pengaduan::where('id_pengaduan',$id)->first();
       
        return view('dashbord.show',[
            'data' => $data,
            
        ]);
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        Session::flash('status',$request->status);


        $data=[
            'status' => $request ->status
        ];

        
        Pengaduan::where('id_pengaduan',$id)->update($data);
      
        
     toast('Berhasil Merubah Status!','success')->autoClose(3000)->position('center');   
      return back();
     
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
