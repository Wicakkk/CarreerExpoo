<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function save(Request $request, $id)
    {
        // dd($request->all());
        Pelamar::create([
            "nama" => $request->nama,
            "notelp" => $request->notelp,
            "email" => $request->email,
            "jenis_kelamin" => $request->jenis_kelamin,
            "pendidikan_terakhir" => $request->pendidikan_terakhir,
            "jenis_pekerjaan" => $request->jenis_pekerjaan,
            "portofolio" => $request->portofolio,
            "id_perusahaan" => $id,
        ]);

        return redirect('/');
    }
}
