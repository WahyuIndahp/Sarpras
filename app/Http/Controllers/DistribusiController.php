<?php

namespace App\Http\Controllers;

use App\Models\Distribusi;
use App\Models\Ruang;
use Illuminate\Http\Request;

class DistribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Distribusi::with('ruangs')->get();
            return view('Menu.Pendistribusian.datapendistribusian', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruangs = Ruang::all();
            return view('Menu.Pendistribusian.formpendistribusian', compact('ruangs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Distribusi::create($request->all());

        if($request->hasFile('foto_bukti')){
            $request->file('foto_bukti')->move('fotodistribusi/', $request->file('foto_bukti')->getClientOriginalName());
            $data->foto_bukti = $request->file('foto_bukti')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_sarpras')){
            $request->file('foto_sarpras')->move('fotodistribusi/', $request->file('foto_sarpras')->getClientOriginalName());
            $data->foto_sarpras = $request->file('foto_sarpras')->getClientOriginalName();
            $data->save();
        }

        return redirect('/datapendistribusian')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Distribusi  $distribusi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Distribusi::find($id);
        $ruangs = Ruang::all();
        return view('Menu.Pendistribusian.detailpendistribusian', compact('data','ruangs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Distribusi  $distribusi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Distribusi::find($id);
        $ruangs = Ruang::all();
        return view('Menu.Pendistribusian.editpendistribusian', compact('data','ruangs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Distribusi  $distribusi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Distribusi::find($id);
        $data->update($request->all());

        if($request->hasFile('foto_bukti')){
            $request->file('foto_bukti')->move('fotodistribusi/', $request->file('foto_bukti')->getClientOriginalName());
            $data->foto_bukti = $request->file('foto_bukti')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_sarpras')){
            $request->file('foto_sarpras')->move('fotodistribusi/', $request->file('foto_sarpras')->getClientOriginalName());
            $data->foto_sarpras = $request->file('foto_sarpras')->getClientOriginalName();
            $data->save();
        }

        return redirect('/datapendistribusian')->with('sukses','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Distribusi  $distribusi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Distribusi::find($id);
        $data->delete();

        return redirect('/datapendistribusian')->with('sukses','Berhasil Menghapus Data');
    }
}
