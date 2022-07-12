<?php

namespace App\Http\Controllers;

use App\Models\Qrcode;
use App\Models\Inventory;
use Illuminate\Http\Request;

class QrcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Qrcode::with('inventories')->get();
            return view('Menu.Inventaris.qrcode', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventories = Inventory::all();
        return view('Menu.Inventaris.formqrcode', compact('inventories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Qrcode::create($request->all());
        return redirect('/dataqrcode')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qrcode  $qrcode
     * @return \Illuminate\Http\Response
     */
    public function show(Qrcode $qrcode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qrcode  $qrcode
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Qrcode::find($id);
        $inventories = Inventory::all();
        return view('Menu.Inventaris.editqrcode', compact('data','inventories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Qrcode  $qrcode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Qrcode::find($id);
        $data->update($request->all());
        
        return redirect('/dataqrcode')->with('sukses','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qrcode  $qrcode
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = QrCode::find($id);
        $data->delete();

        return redirect('/dataqrcode')->with('sukses','Berhasil Menghapus Data');
    }
}
