<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use App\Models\Comment;
use App\Models\Likefoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExploreController extends Controller
{
    //untuk menampilkan jumlah like dan jumlah comentar
    public function getdata(Request $request)
    {

        if ($request->cari !== null) {

            $explore = Foto::with(['likefoto', 'favorites'])->withCount(['likefoto', 'comments'])->where('judul_foto', 'LIKE', '%' . $request->cari . '%')->paginate(9);
        } else {

            //mengambil model foto yang direlasikan antara like foto dan comment
            $explore = Foto::with(['likefoto', 'user'])->withCount(['likefoto', 'comments'])->withCount('user')->orderBy('id', 'desc')->paginate(9);
        }

        return response()->json([
            'data' => $explore,
            'statuscode' => 200,
            'idUser' => auth()->user()->id,

        ]);
    }



    public function getdatadetail(Request $request, $id)
    {
        $datadetailfoto = Foto::with('user')->where('id', $id)->firstOrFail();
        $like = Foto::with(['likefoto', 'comments'])->withCount(['likefoto', 'comments'])->withCount('comments', 'user')->where('id', $id)->firstOrFail();
        $datasuka = Likefoto::where('id_foto', $datadetailfoto->user->id)->get();

        // Ambil nilai ID foto dari objek $datadetailfoto
        $id_foto = $datadetailfoto->$id;


        return response()->json([
            'dataDetailFoto' => $datadetailfoto,
            'Jumlahdata' => $like,
            'idUser' => auth()->user()->id,

            'datasuka' => $datasuka
        ], 200);

    }

    public function getdetail(Request $request, $id)
    {
        $user = auth()->user();
        $dataFoto = Foto::find($id);
        $likeCheck = Likefoto::where('id_user', Auth::user()->id)->where('id_foto', $dataFoto->id)->first();
        return view('page.detailfoto', compact('dataFoto', 'likeCheck', 'user'));
    }

    public function getdatakomentar(Request $request, $id)
    {
        $ambilkomentar = Comment::with('user')->where('id_foto', $id)->get();
        return response()->JSON([
            'data' => $ambilkomentar,
        ], 200);
    }

    public function kirimkankomentar(Request $request)
    {
        try {
            $request->validate([
                'idfoto' => 'required',
                'isi_komentar' => 'required'

            ]);
            $datastorekomentar = [
                'id_user' => auth()->user()->id,
                'id_foto' => $request->idfoto,
                'isi_komentar' => $request->isi_komentar,
            ];
            Comment::create($datastorekomentar);
            return response()->json([
                'data' => 'Data berhasil disimpan',
                'req' => $request->all()
            ], 200);
        } catch (\Throwable $th) {
            return response()->json('Data komentar gagal di simpan', 500);
        }
    }

    public function likefoto(Request $request, $id)
    {
        $existingLike = Likefoto::where('id_foto', $request->idfoto)->where('id_user', auth()->user()->id)->first();
        if (!$existingLike) {
            $dataSimpan = [
                'id_foto' => $request->idfoto,
                'id_user' => auth()->user()->id,
            ];
            Likefoto::create($dataSimpan);
        } else {
            Likefoto::where('id_foto', $request->idfoto)->where('id_user', auth()->user()->id)->delete();
        }

        return response()->json([
            'status' => 200,
            'liked' => $existingLike,
        ]);
    }


}
