<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use App\Models\Likefoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FotoController extends Controller
{
    public function upload(Request $request)
    {
        $user = auth()->user();
        $albums = Album::where('user_id', Auth::user()->id)->get();
        return view('page.upload', compact('albums', 'user'));
    }

    public function uploadfoto(Request $request)
    {

        $filenya = $request->file('up');
        if ($request->hasFile('up')) {
            $filename = pathinfo($filenya, PATHINFO_FILENAME);
            $ektensi = $filenya->getClientOriginalExtension();
            $foto = 'asset' . time() . '.' . $ektensi;
            $filenya->move('asset', $foto);
        } else {
            $foto = 'default.jpg';
        }

        $datafoto = [
            'id_user' => auth()->user()->id,
            'judul_foto' => $request->judul,
            'kategori_id' => $request->kategori,
            'id_album' => $request->album,
            'deskripsi_foto' => $request->deskripsi,
            'url' => $foto,
        ];

        Foto::create($datafoto);
        return redirect('/dashboard');
    }

    public function editpas(Request $request)
    {
        $user = auth()->user();
        return view('page.editpassword', compact('user'));
    }

    public function editfoto($id)
    {
        $dataFoto = Foto::find($id);
        $user = auth()->user();
        return view('page.edit', compact('dataFoto', 'user'));
    }


    public function updatefoto(Request $request, $id)
    {
        $dataFoto = Foto::find($id);

        $dataFoto->update([
            'judul_foto' => $request->judul,
            'deskripsi_foto' => $request->deskripsi,
            'kategori' => $request->kategori,
        ]);
        return redirect('/dashboard');
    }

    //compact untuk mendapatkan id foto
    public function upfoto($id)
    {
        $dataFoto = Foto::find($id);
        return view('page.edit', compact('dataFoto'));
    }


    public function delete(request $request, $id)
    {
        $datadelete = Foto::find($id);
        $datadelete->delete();
        return redirect('/dashboard')->with('datadelete', $datadelete);
    }

}





