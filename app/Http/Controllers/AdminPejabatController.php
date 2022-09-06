<?php

namespace App\Http\Controllers;
use App\Models\Pejabat;
use Illuminate\Http\Request;
use App\Http\Requests\PejabatRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PejabatExport;

class AdminPejabatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request->has('search')){
            $pejabats=Pejabat::where('nama_pejabat','LIKE','%'.$request->search.'%')->orderBy('nama_pejabat', 'asc')->get();
        }else{
            $pejabats=Pejabat::all();
        }
        return view('admin.pejabat',compact('pejabats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pejabat=new Pejabat;
        return view('admin.createpejabat',compact('pejabat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PejabatRequest $request)
    {
        $pejabat=new Pejabat;
        $pejabat->nama_pejabat=$request->nama_pejabat;
        $pejabat->slug=$request->slug;
        $pejabat->jabatan=$request->jabatan;
        $pejabat->konfirmasi_kehadiran=$request->konfirmasi_kehadiran;
        $pejabat->save();

        return redirect('adminpejabat');
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
        $pejabat=Pejabat::find($id);
        return view('admin.editpejabat',compact('pejabat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PejabatRequest $request, $id)
    {
        $pejabat=Pejabat::find($id);
        $pejabat->nama_pejabat=$request->nama_pejabat;
        $pejabat->slug=$request->slug;
        $pejabat->jabatan=$request->jabatan;
        $pejabat->konfirmasi_kehadiran=$request->konfirmasi_kehadiran;
        $pejabat->save();

        return redirect('adminpejabat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pejabat=Pejabat::find($id);
        $pejabat->delete();
        return redirect('adminpejabat');
    }

    public function exportexcelpejabat(){
        return Excel::download(new PejabatExport, 'Data Undangan Pejabat Pelantikan 2022.xlsx');
    }
}
