<?php

namespace App\Http\Controllers;

use App\Models\Rekap;
use Illuminate\Http\Request;

class PerekapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data = Rekap::all();
            return view('Menu/Perencanaan/dataperekapan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Menu/Perencanaan/formperekapan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rekap::create($request->all());
        return redirect('/dataperekapan')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rekap  $rekap
     * @return \Illuminate\Http\Response
     */
    public function show(Rekap $rekap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rekap  $rekap
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Rekap::find($id);
        return view('Menu/Perencanaan/editperekapan', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rekap  $rekap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Rekap::find($id);
        $data->update($request->all());

        return redirect('/dataperekapan')->with('sukses','Berhasil Mengubah Data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rekap  $rekap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Rekap::find($id);
        $data->delete();

        return redirect('/dataperekapan')->with('sukses','Berhasil Menghapus Data');
    }
}
