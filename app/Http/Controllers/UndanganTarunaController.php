<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Taruna;

class UndanganTarunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('taruna.undangan',['data_taruna'=>Taruna::where("slug",$slug)->first()]);
    }


    public function show_home($slug){
        return view('taruna.home',['data_taruna'=>Taruna::where("slug",$slug)->first()]);
    }

    public function show_acara($slug){
        return view('taruna.acara',['data_taruna'=>Taruna::where("slug",$slug)->first()]);
    }

    public function show_gallery($slug){
        return view('taruna.gallery',['data_taruna'=>Taruna::where("slug",$slug)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $taruna=Taruna::find($id);
        $taruna->konfirmasi_kehadiran="yes";
        $taruna->save();
        return view('taruna.undangan',['data_taruna'=>$taruna]);
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
        $taruna=Taruna::find($id);
        $taruna->konfirmasi_kehadiran="no";
        $taruna->save();
        return view('taruna.undangan',['data_taruna'=>$taruna]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
