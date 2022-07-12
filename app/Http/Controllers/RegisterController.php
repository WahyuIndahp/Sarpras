<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view ('register',[
            'tittle' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:60',
            'username' => ['required', 'min:3', 'max:10', 'unique:users'],
            'email' => 'required|email:dns',
            'password' => 'required|min:6|max:60',
            'level' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);

        //$request->session()->flash('sukses', 'Selamat Anda Berhasil Melakukan Registrasi! Silahkan Login');

        return redirect('/login')->with('sukses','Selamat Anda Berhasil Melakukan Registrasi! Silahkan Login');
    }
}
