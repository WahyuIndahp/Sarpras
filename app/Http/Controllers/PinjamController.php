<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\Sarprase;
use App\Models\User;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pinjam::with('users','sarprases')->get();
            return view('Menu.Peminjaman.datapeminjaman', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $sarprases = Sarprase::all();
        return view('Menu.Peminjaman.formpeminjaman', compact('users','sarprases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Pinjam::create($request->all());

        if($request->hasFile('foto_pinjam')){
            $request->file('foto_pinjam')->move('fotopeminjaman/', $request->file('foto_pinjam')->getClientOriginalName());
            $data->foto_pinjam = $request->file('foto_pinjam')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_1')){
            $request->file('foto_1')->move('fotopeminjaman/', $request->file('foto_1')->getClientOriginalName());
            $data->foto_1 = $request->file('foto_1')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_2')){
            $request->file('foto_2')->move('fotopeminjaman/', $request->file('foto_2')->getClientOriginalName());
            $data->foto_2 = $request->file('foto_2')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_3')){
            $request->file('foto_3')->move('fotopeminjaman/', $request->file('foto_3')->getClientOriginalName());
            $data->foto_3 = $request->file('foto_3')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_4')){
            $request->file('foto_4')->move('fotopeminjaman/', $request->file('foto_4')->getClientOriginalName());
            $data->foto_4 = $request->file('foto_4')->getClientOriginalName();
            $data->save();
        }

        return redirect('/datapeminjaman')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pinjam::find($id);
        $users = User::all();
        $sarprases = Sarprase::all();
        return view('Menu.Peminjaman.detailpeminjaman', compact('data','users','sarprases'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pinjam::find($id);
        $users = User::all();
        $sarprases = Sarprase::all();
        return view('Menu.Peminjaman.editpeminjaman', compact('data','users','sarprase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pinjam::find($id);
        $users = User::all();
        $sarprases = Sarprase::all();

        if($request->hasFile('foto_pinjam')){
            $request->file('foto_pinjam')->move('fotopeminjaman/', $request->file('foto_pinjam')->getClientOriginalName());
            $data->foto_pinjam = $request->file('foto_pinjam')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_1')){
            $request->file('foto_1')->move('fotopeminjaman/', $request->file('foto_1')->getClientOriginalName());
            $data->foto_1 = $request->file('foto_1')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_2')){
            $request->file('foto_2')->move('fotopeminjaman/', $request->file('foto_2')->getClientOriginalName());
            $data->foto_2 = $request->file('foto_2')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_3')){
            $request->file('foto_3')->move('fotopeminjaman/', $request->file('foto_3')->getClientOriginalName());
            $data->foto_3 = $request->file('foto_3')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_4')){
            $request->file('foto_4')->move('fotopeminjaman/', $request->file('foto_4')->getClientOriginalName());
            $data->foto_4 = $request->file('foto_4')->getClientOriginalName();
            $data->save();
        }

        return redirect('/datapeminjaman')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pinjam::find($id);
        $data->delete();

        return redirect('/datapeminjaman')->with('sukses','Berhasil Menambahkan Data');
    }
}
