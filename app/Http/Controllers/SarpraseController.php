<?php

namespace App\Http\Controllers;

use App\Models\Sarprase;
use Illuminate\Http\Request;

class SarpraseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Sarprase::all();
        return view('Menu/DataSarpras/datasarpras', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Menu/DataSarpras/formdatasarpras');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sarprase::create($request->all());
        return redirect('/datasarpras')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sarprase  $sarprase
     * @return \Illuminate\Http\Response
     */
    public function show(Sarprase $sarprase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sarprase  $sarprase
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Sarprase::find($id);
        return view('Menu/DataSarpras/editdatasarpras', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sarprase  $sarprase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Sarprase::find($id);
        $data->update($request->all());

        return redirect('/datasarpras')->with('sukses','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sarprase  $sarprase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Sarprase::find($id);
        $data->delete();

        return redirect('/datasarpras')->with('sukses','Berhasil Menghapus Data');
    }
}
