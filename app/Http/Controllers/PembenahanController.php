<?php

namespace App\Http\Controllers;

use App\Models\Pembenahan;
use App\Models\Kondisi;
use Illuminate\Http\Request;

class PembenahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pembenahan::with('kondisis')->get();
        return view('Menu.Kondisi.datapembenahan', compact('data'));
    }

    public function indexall()
    {
        $data = Pembenahan::with('kondisis')->get();
        return view('Menu.Kondisi.lihatpembenahan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kondisis = Kondisi::all();
        return view('Menu.Kondisi.formpembenahan',compact('kondisis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Pembenahan::create($request->all());
        if($request->hasFile('foto_kondisi')){
            $request->file('foto_kondisi')->move('fotopembenahan/', $request->file('foto_kondisi')->getClientOriginalName());
            $data->foto_kondisi = $request->file('foto_kondisi')->getClientOriginalName();
            $data->save();
        }
        return redirect('/datapembenahan')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembenahan  $pembenahan
     * @return \Illuminate\Http\Response
     */
    public function show(Pembenahan $pembenahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembenahan  $pembenahan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pembenahan::find($id);
        $kondisis = Kondisi::all();
        return view('Menu.Kondisi.editpembenahan', compact('data','kondisis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembenahan  $pembenahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pembenahan::find($id);
        $data->update($request->all());

        if($request->hasFile('foto_kondisi')){
            $request->file('foto_kondisi')->move('fotopembenahan/', $request->file('foto_kondisi')->getClientOriginalName());
            $data->foto_kondisi = $request->file('foto_kondisi')->getClientOriginalName();
            $data->save();
        }
        
        return redirect('/datapembenahan')->with('sukses','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembenahan  $pembenahan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pembenahan::find($id);
        $data->delete();

        return redirect('/datapembenahan')->with('sukses','Berhasil Menghapus Data');
    }
}
