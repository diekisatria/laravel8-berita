<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' =>  'Registrasi'
        ]);
    }

    // menangkap request user dari form
    public function store(Request $request)
    {
        //  validasi inputan
        $validatedData = $request->validate([
            'name'      =>  'required|max:255',
            'username'  =>  'required|min:3|max:255|unique:users',
            'email'     =>  'required|email:dns|unique:users',
            'password'  =>  'required|min:5|max:255'
        ]);

        // jika validasi lolos

        // $validatedData['password']   = bcrypt($validatedData['password']);

        // enkripsi password
        $validatedData['password'] = Hash::make($validatedData['password']);

        // jalankan query insert
        User::create($validatedData);

        // buat flash data
        // $request->session()->flash('success', 'Registrasi berhasil!');

        // redirect sekalian kirim flash data
        return redirect('/login')->with('success', 'Registrasi Berhasil!');

    }

}
