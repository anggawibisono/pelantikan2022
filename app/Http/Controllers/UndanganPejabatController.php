<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pejabat;

class UndanganPejabatController extends Controller
{


    public function show($slug)
    {
        return view('pejabat.undangan',['data_pejabat'=>Pejabat::where("slug",$slug)->first()]);
    }

    public function show_home($slug){
        return view('pejabat.home',['data_pejabat'=>Pejabat::where("slug",$slug)->first()]);
    }

    public function show_acara($slug){
        return view('pejabat.acara',['data_pejabat'=>Pejabat::where("slug",$slug)->first()]);
    }

    public function show_gallery($slug){
        return view('pejabat.gallery',['data_pejabat'=>Pejabat::where("slug",$slug)->first()]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pejabat=Pejabat::find($id);
        $pejabat->konfirmasi_kehadiran="yes";
        $pejabat->save();
        return view('pejabat.undangan',['data_pejabat'=>$pejabat]);
    }

      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function batal_konfirmasi(Request $request, $id)
    {
        $pejabat=Pejabat::find($id);
        $pejabat->konfirmasi_kehadiran="no";
        $pejabat->save();
        return view('pejabat.undangan',['data_pejabat'=>$pejabat]);
    }

}
