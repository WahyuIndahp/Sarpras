<?php

namespace App\Http\Controllers;

use App\Models\Pengadaan;
use App\Models\Sarprase;
use Illuminate\Http\Request;

class PengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pengadaan::with('sarprases')->get();
            return view('Menu.Pengadaan.datapengadaan', compact('data'));
    }

    public function indexall()
    {
        $data = Pengadaan::with('sarprases')->get();
            return view('Menu.Pengadaan.lihatpengadaan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sarprases = Sarprase::all();
        return view('Menu.Pengadaan.formpengadaan',compact('sarprases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pengadaan::create($request->all());
        if($request->hasFile('foto_terima')){
            $request->file('foto_terima')->move('fotopengadaan/', $request->file('foto_terima')->getClientOriginalName());
            $data->foto_terima = $request->file('foto_terima')->getClientOriginalName();
            $data->save();
        }
        return redirect('/datapengadaan')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengadaan $pengadaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pengadaan::find($id);
        $sarprases = Sarprase::all();
        return view('Menu.Pengadaan.editpengadaan', compact('data','sarprases'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pengadaan::find($id);
        $data->update($request->all());

        if($request->hasFile('foto_terima')){
            $request->file('foto_terima')->move('fotopengadaan/', $request->file('foto_terima')->getClientOriginalName());
            $data->foto_terima = $request->file('foto_terima')->getClientOriginalName();
            $data->save();
        }

        return redirect('/datapengadaan')->with('sukses','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengadaan  $pengadaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pengadaan::find($id);
        $data->delete();

        return redirect('/datapengadaan')->with('sukses','Berhasil Menghapus Data');
    }
}
