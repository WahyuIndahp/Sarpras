<?php

namespace App\Http\Controllers;

use App\Models\Penghapusan;
use App\Models\Kondisi;
use Illuminate\Http\Request;

class PenghapusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Penghapusan::with('kondisis')->get();
        return view('Menu.Kondisi.datapenghapusan', compact('data'));
    }

    public function indexall()
    {
        $data = Penghapusan::with('kondisis')->get();
        return view('Menu.Kondisi.lihatpenghapusan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kondisis = Kondisi::all();
        return view('Menu.Kondisi.formpenghapusan',compact('kondisis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Penghapusan::create($request->all());
        if($request->hasFile('foto_kondisi')){
            $request->file('foto_kondisi')->move('fotopenghapusan/', $request->file('foto_kondisi')->getClientOriginalName());
            $data->foto_kondisi = $request->file('foto_kondisi')->getClientOriginalName();
            $data->save();
        }
        return redirect('/datapenghapusan')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penghapusan  $penghapusan
     * @return \Illuminate\Http\Response
     */
    public function show(Penghapusan $penghapusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penghapusan  $penghapusan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Penghapusan::find($id);
        $kondisis = Kondisi::all();
        return view('Menu.Kondisi.editpenghapusan', compact('data','kondisis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penghapusan  $penghapusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Penghapusan::find($id);
        $data->update($request->all());

        if($request->hasFile('foto_kondisi')){
            $request->file('foto_kondisi')->move('fotopenghapusan/', $request->file('foto_kondisi')->getClientOriginalName());
            $data->foto_kondisi = $request->file('foto_kondisi')->getClientOriginalName();
            $data->save();
        }
        
        return redirect('/datapenghapusan')->with('sukses','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penghapusan  $penghapusan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =Penghapusan::find($id);
        $data->delete();

        return redirect('/datapenghapusan')->with('sukses','Berhasil Menghapus Data');
    }
}
