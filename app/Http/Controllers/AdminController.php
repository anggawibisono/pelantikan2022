<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taruna;
use App\Http\Requests\AdminRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TarunaExport;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $tarunas=Taruna::where('nama_taruna','LIKE','%'.$request->search.'%')->orderBy('nama_taruna', 'asc')->get();
        }else{
            $tarunas=Taruna::orderBy('nama_taruna', 'asc')->get();
        }
        return view('admin.admin',compact('tarunas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taruna=new Taruna;
        return view('admin.create',compact('taruna'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        $taruna=new Taruna;
        $taruna->nama_taruna=$request->nama_taruna;
        $taruna->slug=$request->slug;
        $taruna->nama_ayah=$request->nama_ayah;
        $taruna->nama_ibu=$request->nama_ibu;
        $taruna->konfirmasi_kehadiran=$request->konfirmasi_kehadiran;
        $taruna->save();

        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taruna=Taruna::find($id);
        return view('admin.edit',compact('taruna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request, $id)
    {
        $taruna=Taruna::find($id);
        $taruna->nama_taruna=$request->nama_taruna;
        $taruna->slug=$request->slug;
        $taruna->nama_ayah=$request->nama_ayah;
        $taruna->nama_ibu=$request->nama_ibu;
        $taruna->konfirmasi_kehadiran=$request->konfirmasi_kehadiran;
        $taruna->save();

        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taruna=Taruna::find($id);
        $taruna->delete();
        return redirect('admin');
    }


    public function exportexcel(){
        return Excel::download(new TarunaExport, 'Data Undangan Taruna Pelantikan 2022.xlsx');
    }
}
