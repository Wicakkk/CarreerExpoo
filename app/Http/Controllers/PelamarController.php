<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    public function save(Request $request, $id)
    {
        // dd($request->all());

        $pelamar = new Pelamar();
        $pelamar->nama = $request->nama;
        $pelamar->notelp = $request->notelp;
        $pelamar->email = $request->email;
        $pelamar->jenis_kelamin = $request->jenis_kelamin;
        $pelamar->pendidikan_terakhir = $request->pendidikan_terakhir;
        $pelamar->jenis_pekerjaan = $request->jenis_pekerjaan;
        $pelamar->portofolio = $request->portofolio;
        $pelamar->id_perusahaan = $id;
        $pelamar->save();

        return redirect('/');
    }
}
