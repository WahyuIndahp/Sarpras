<?php

namespace App\Http\Controllers;

use App\Models\Kembali;
use App\Models\Pinjam;
use App\Models\User;
use Illuminate\Http\Request;

class ReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kembali::with('pinjams','users')->get();
            return view('Menu.Peminjaman.datapengembalian', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pinjams = Pinjam::all();
        $users = User::all();
        return view('Menu.Peminjaman.formpengembalian', compact('pinjams','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Kembali::create($request->all());

        if($request->hasFile('foto_kembali')){
            $request->file('foto_kembali')->move('fotopengembalian/', $request->file('foto_kembali')->getClientOriginalName());
            $data->foto_kembali = $request->file('foto_kembali')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_1')){
            $request->file('foto_1')->move('fotopengembalian/', $request->file('foto_1')->getClientOriginalName());
            $data->foto_1 = $request->file('foto_1')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_2')){
            $request->file('foto_2')->move('fotopengembalian/', $request->file('foto_2')->getClientOriginalName());
            $data->foto_2 = $request->file('foto_2')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_3')){
            $request->file('foto_3')->move('fotopengembalian/', $request->file('foto_3')->getClientOriginalName());
            $data->foto_3 = $request->file('foto_3')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_4')){
            $request->file('foto_4')->move('fotopengembalian/', $request->file('foto_4')->getClientOriginalName());
            $data->foto_4 = $request->file('foto_4')->getClientOriginalName();
            $data->save();
        }

        return redirect('/datareturn')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Kembali::find($id);
        $pinjams = Pinjam::all();
        $users = User::all();
        return view('Menu.Peminjaman.detailpengembalian', compact('data','pinjams','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kembali::find($id);
        $pinjams = Pinjam::all();
        $users = User::all();
        return view('Menu.Peminjaman.editpengembalian', compact('data','pinjams','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Kembali::find($id);
        $pinjams = Pinjam::all();
        $users = User::all();

        if($request->hasFile('foto_kembali')){
            $request->file('foto_kembali')->move('fotopengembalian/', $request->file('foto_kembali')->getClientOriginalName());
            $data->foto_kembali = $request->file('foto_kembali')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_1')){
            $request->file('foto_1')->move('fotopengembalian/', $request->file('foto_1')->getClientOriginalName());
            $data->foto_1 = $request->file('foto_1')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_2')){
            $request->file('foto_2')->move('fotopengembalian/', $request->file('foto_2')->getClientOriginalName());
            $data->foto_2 = $request->file('foto_2')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_3')){
            $request->file('foto_3')->move('fotopengembalian/', $request->file('foto_3')->getClientOriginalName());
            $data->foto_3 = $request->file('foto_3')->getClientOriginalName();
            $data->save();
        }

        if($request->hasFile('foto_4')){
            $request->file('foto_4')->move('fotopengembalian/', $request->file('foto_4')->getClientOriginalName());
            $data->foto_4 = $request->file('foto_4')->getClientOriginalName();
            $data->save();
        }

        return redirect('/datareturn')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kembali::find($id);
        $data->delete();

        return redirect('/datareturn')->with('sukses','Berhasil Menambahkan Data');
    }
}