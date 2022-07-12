<?php

namespace App\Http\Controllers;

use App\Models\Permintaan;
use App\Models\Ruang;
use App\Models\Sarprase;
use Illuminate\Http\Request;

class PermintaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Permintaan::with('ruangs','sarprases')->get();
            return view('Menu.Peminjaman.datapermintaan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruangs = Ruang::all();
        $sarprases = Sarprase::all();
        return view('Menu.Peminjaman.formpermintaan', compact('ruangs','sarprases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Permintaan::create($request->all());
        return redirect('/datapermintaan')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function show(Permintaan $permintaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Permintaan::find($id);
        $ruangs = Ruang::all();
        $sarprases = Sarprase::all();
        return view('Menu.Peminjaman.editpermintaan', compact('data','ruangs','sarprases'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Permintaan::find($id);
        $data->update($request->all());

        return redirect('/datapermintaan')->with('sukses','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permintaan  $permintaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Permintaan::find($id);
        $data->delete();

        return redirect('/datapermintaan')->with('sukses','Berhasil Menghapus Data');
    }
}
