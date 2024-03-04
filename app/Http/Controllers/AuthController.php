<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view('registrasi');
    }

    public function registered(Request $request)
    {
        $filenya = $request->file('up');
        if ($request->hasFile('up')) {
            $filename = pathinfo($filenya, PATHINFO_FILENAME);
            $ektensi = $filenya->getClientOriginalExtension();
            $foto = 'asset' . time() . '.' . $ektensi;
            $filenya->move('asset', $foto);
        } else {
            $foto = 'profil.jpg';
        }

        $request->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'tgl_lahir' => 'required',
            'nama_lengkap' => 'required'
        ]);

        $dataStore = [
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tgl_lahir' => $request->tgl_lahir,
            'nama_lengkap' => $request->nama_lengkap,
            'pictures' => $foto,
        ];
        User::create($dataStore);
        return redirect('/register')->with('success', 'Data berhasil disimpan');


    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            $user = Auth::user();
            return redirect('/dashboard')->with('success', 'Password Berhasil diubah!');
        } else {
            return redirect()->back()->with('error', 'email atau password salah');

        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}
