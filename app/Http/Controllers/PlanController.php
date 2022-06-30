<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Ruang;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Plan::with('ruangs')->get();
            return view('Menu.Perencanaan.dataperencanaan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruangs = Ruang::all();
        return view('Menu.Perencanaan.formperencanaan', compact('ruangs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Plan::create($request->all());
        return redirect('/dataperencanaan')->with('sukses','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Plan::find($id);
        $ruangs = Ruang::all();
        return view('Menu.Perencanaan.editperencanaan', compact('data','ruangs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Plan::find($id);
        $data->update($request->all());

        return redirect('/dataperencanaan')->with('sukses','Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Plan::find($id);
        $data->delete();

        return redirect('/dataperencanaan')->with('sukses','Berhasil Menghapus Data');
    }
}