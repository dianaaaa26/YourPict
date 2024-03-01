<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profil(Request $request)
    {
        $user = auth()->user();
        return view('page.profilelain', compact('user'));
    }

    public function pilihalbum(Request $request)
    {
        return view('page.pilihalbum');
    }

    //mengambildata user dan menampilkan di halaman     pp berdasarkan 
    public function editpp(Request $request)
    {
        $datappUser = User::where('id', auth()->user()->id)->first();
        $user = auth()->user();
        return view('page.editpp', compact('datappUser', 'user'));
    }

    //mengupdate data profil user
    public function updatepp(Request $request)
    {
        $profil = Auth::user();

        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $extensi = $picture->getClientOriginalExtension();
            $filename = 'users' . now()->timestamp . '.' . $extensi;
            $picture->move('asset', $filename);
            $profil->pictures = $filename;

        } else {
            $picture = $profil->pictures;
        }
        $profil->update([
            'nama_lengkap' => $request->nama,
            'no_telepon' => $request->telepon,
            'jenis_kelamin' => $request->selectJenisKelamin,
            'alamat' => $request->alamat,
            'bio' => $request->bio,
            'tgl_lahir' => $request->tgllahir,
        ]);
        // return redirect('/profile/{id}');
        return redirect('/profile' . '/' . Auth::user()->id);
    }


    //update password
    public function updatepasword(Request $request)
    {
        $pesan = [
            'password_lama.required' => 'Password lama harus di isi',
            'password_baru.required' => 'Password baru harus di isi',
            'password_baru.min' => 'Password minimal 6 karakter',
            'confirm_password.required' => 'Password confirm harus di isi',
            'confirm_password.same' => 'Password harus sama dengan password baru',
        ];

        $request->validate([
            'password_lama' => 'required',
            'password_baru' => 'required|min:6',
            'confirm_password' => 'required|same:password_baru'
        ], $pesan);

        $user = auth()->user();

        if (!Hash::check($request->password_lama, $user->password)) {
            return redirect()->back()->with('error', 'password lama salah');
        } else {
            $user->update([
                'password' => Hash::make($request->password_baru)
            ]);
            return redirect()->back()->with('success', 'berhasil diperbarui');
        }

    }

    public function getprofile(Request $request, $id)
    {
        $dataUser = User::where('id', $id)->first();
        return response()->json([
            'dataUser' => $dataUser,
            'dataUserActive' => auth()->user()->id,
        ], 200);
    }

    public function getdata(Request $request)
    {
        $explore = Foto::where('id_user', $request->get('idUser'))->with(['likefoto', 'favorites'])->withCount(['likefoto', 'comments'])->orderBy('id', 'DESC')->paginate(9);
        return response()->JSON([
            'data' => $explore,
            'statuscode' => 200,
            'idUser' => auth()->user()->id
        ]);
    }
}
