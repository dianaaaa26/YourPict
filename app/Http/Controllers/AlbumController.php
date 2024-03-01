<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function album(Request $request)
    {

        $user = auth()->user();
        $albums = Album::where('user_id', Auth::user()->id)->get();
        return view('page.album', compact('user', 'albums'));
    }

    public function buatalbum(Request $request)
    {

        $filenya = $request->file('foto');
        if ($request->hasFile('foto')) {
            // $filename = pathinfo($filenya, PATHINFO_FILENAME);
            $ekstensi = $filenya->getClientOriginalExtension();
            $foto = 'album' . now()->timestamp . '.' . $ekstensi;
            $filenya->move('asset', $foto);
        } else {
            $foto = 'default.jpg';
        }

        $dataalbum = [
            'user_id' => auth()->user()->id,
            'nama_album' => $request->namaAlbum,
            'foto' => $foto
        ];

        Album::create($dataalbum);
        return redirect()->back();
    }

    // public function tambahkanalbumbaru(Request $request)
    // {

    //     $filenya = $request->file('foto');
    //     if ($request->hasFile('foto')) {
    //         // $filename = pathinfo($filenya, PATHINFO_FILENAME);
    //         $ekstensi = $filenya->getClientOriginalExtension();
    //         $foto = 'album' . now()->timestamp . '.' . $ekstensi;
    //         $filenya->move('asset', $foto);
    //     } else {
    //         $foto = 'default.jpg';
    //     }

    //     $dataalbum = [
    //         'user_id' => auth()->user()->id,
    //         'nama_album' => $request->namaAlbum,
    //         'foto' => $foto
    //     ];

    //     Album::create($dataalbum);
    //     return redirect();
    // }



    public function detailalbum($id)
    {
        $user = auth()->user();
        $album = Album::where('id', $id)->first();
        $fotos = Foto::where('id_album', $id)->where('id_user', Auth::user()->id)->get();


        return view('page.detailAlbum', compact('album', 'fotos', 'user'));
    }

    public function detail($id)
    {
        $user = auth()->user();
        $fotos = Foto::where('id_album', $id)->where('id_user', Auth::user()->id)->get();
        $album = Album::where('id', $id)->first();

        return view('page.detail-album', compact('fotos', 'album', 'user'));
    }

    public function pilihalbum(Request $request, $id)
    {

        $user = auth()->user();
        $albums = Album::where('user_id', Auth::user()->id)->get();
        $dataFoto = Foto::find($id);
        return view('page.pilihalbum', compact('user', 'albums', 'dataFoto'));
    }

    //mengupdate foto ke album 
    public function tambahAlbum(Request $request, $id)
    {
        $dataFoto = Foto::find($id);

        $dataFoto->update([
            'id_album' => $request->nama_album,
        ]);
        return redirect('/dashboard');
    }

    public function delete($id)
    {
        $datadelete = Album::find($id);
        $datadelete->delete();
        return redirect('/album')->with('datadelete', $datadelete);
    }

    public function updatealbum(Request $request, $id)
    {
        $dataalbum = Album::find($id);

        $dataalbum->update([
            'nama_album' => $request->nama_album,
            'deskripsion' => $request->deskripsi_album,
        ]);
        return redirect()->back();
    }

}
