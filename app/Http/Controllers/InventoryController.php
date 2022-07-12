<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Sarprase;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Inventory::all();
        return view('Menu.Inventaris.datainventaris', compact('data'));
    }

    public function indexall()
    {
        $data = Inventory::all();
        return view('Menu.Inventaris.lihatinventaris', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sarprases = Sarprase::all();
        return view('Menu.Inventaris.forminventaris', compact('sarprases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Inventory::create($request->all());
        if($request->hasFile('foto_terima')){
            $request->file('foto_terima')->move('fotoinventory/', $request->file('foto_terima')->getClientOriginalName());
            $data->foto_terima = $request->file('foto_terima')->getClientOriginalName();
            $data->save();
        }
        return redirect('/datainventaris')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Inventory::find($id);
        $sarprases = Sarprase::all();
        return view('Menu.Inventaris.detailinventaris', compact('data','sarprases'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Inventory::find($id);
        $sarprases = Sarprase::all();
        return view('Menu.Inventaris.editinventaris', compact('data','sarprases'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Inventory::find($id);
        $data->update($request->all());
        if($request->hasFile('foto_terima')){
            $request->file('foto_terima')->move('fotoinventory/', $request->file('foto_terima')->getClientOriginalName());
            $data->foto_terima = $request->file('foto_terima')->getClientOriginalName();
            $data->save();
        }

        return redirect('/datainventaris')->with('sukses','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Inventory::find($id);
        $data->delete();

        return redirect('/datainventaris')->with('sukses','Berhasil Menghapus Data');
    }
}
