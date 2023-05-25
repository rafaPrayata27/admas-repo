<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\RatingApp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saran= DB::table('rating')
        ->join('masyarakat', 'rating.nik', '=', 'masyarakat.nik')
        ->get();

        $o = RatingApp::all()->count();
  
        return view('rating.allsaran',[
                       'saran' => $saran,
                       'o' => $o,
            
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
        $data=[
            'nik' =>Auth::guard('masyarakat')->user()->nik,
            'tgl_komen' => date('Y-m-d H:i:s'),
           'kepuasan'=>$request->kepuasan,
           'rating'=>$request->rating,
           

           
          ];
          

          RatingApp::create($data);

          alert()->success('Berhasil Mengirim saran!!!','Terima Kasih Telah Mengirim Saran <html><body>&nbsp;</body></html>'.Auth::guard('masyarakat')->user()->nama)->showConfirmButton('Oke', '	#66CDAA')->toHtml();
          return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

  
}
