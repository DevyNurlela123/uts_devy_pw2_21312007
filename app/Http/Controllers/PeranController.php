<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peran;
use RealRashid\SweetAlert\Fecades\Alert;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peran = Peran::all();
        return view('peran.index', compact('peran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Peran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peran = new peran;

        $request->validate([
            'Film'=>'required',
            'Cast'=>'required',
            'Nama'=>'required',
            'Action'=>'required',
            'genre_id'=>'required',
        ]);

        $peran ->Film = $request->film;
        $peran ->Cast = $request->cast;
        $peran ->Nama = $request->nama;
        $peran ->Action = $request->action;
        $peran ->genre_id = $request->genre_id;

        $peran->save();
        if($peran){
        Alert::success('success','Berhasil Ditambah');
        return redirect(to:'peran');
    
    }else{
        Alert::error('Failed','Data gagal Ditambah');
    }
        return redirect('/peran');
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
        //
        $peran = Peran::where('id',$id)->first();

        return view('peran.edit',compact('peran'));
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
        //
        $peran = new peran;

        $request->validate([
            'Film'=>'required',
            'Cast'=>'required',
            'Nama'=>'required',
            'Action'=>'required',
            'genre_id'=>'required',
        ]);

        $peran = peran::find($id);
        $peran ->Film = $request->film;
        $peran ->Cast = $request->cast;
        $peran ->Nama = $request->nama;
        $peran ->Action = $request->action;
        $peran ->genre_id = $request->genre_id;

        $cast->save();
        $simpan->save();
        if($simpan){
        Alert::success('success','Berhasil Ditambah');
        return redirect(to:'cast');
    
    }else{
        Alert::error('Failed','Data gagal Ditambah');
    }
        return redirect('/peran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peran = Peran::find($id);
        $peran ->delete();
        
        $simpan->save();
        if($simpan){
        Alert::success('success','Berhasil Ditambah');
        return redirect(to:'peran');
    
    }else{
        Alert::error('Failed','Data gagal Ditambah');
    }
        return redirect('/peran');
    }
}