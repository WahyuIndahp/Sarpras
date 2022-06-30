<?php

namespace App\Http\Controllers;

use App\Models\Kondisi;
use Illuminate\Http\Request;

class KondisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kondisi::all();
            return view('Menu.Kondisi.datakondisi', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Menu.Kondisi.formkondisi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Kondisi::create($request->all());
        if($request->hasFile('foto_kondisi')){
            $request->file('foto_kondisi')->move('fotokondisi/', $request->file('foto_kondisi')->getClientOriginalName());
            $data->foto_kondisi = $request->file('foto_kondisi')->getClientOriginalName();
            $data->save();
        }
        return redirect('/datakondisi')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kondisi  $kondisi
     * @return \Illuminate\Http\Response
     */
    public function show(Kondisi $kondisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kondisi  $kondisi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kondisi::find($id);
        return view('Menu.Kondisi.editkondisi', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kondisi  $kondisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Kondisi::find($id);
        $data->update($request->all());

        if($request->hasFile('foto_kondisi')){
            $request->file('foto_kondisi')->move('fotokondisi/', $request->file('foto_kondisi')->getClientOriginalName());
            $data->foto_kondisi = $request->file('foto_kondisi')->getClientOriginalName();
            $data->save();
        }
        
        return redirect('/datakondisi')->with('sukses','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kondisi  $kondisi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kondisi::find($id);
        $data->delete();

        return redirect('/datakondisi')->with('sukses','Berhasil Menghapus Data');
    }
}
