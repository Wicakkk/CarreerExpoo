<?php

namespace App\Http\Controllers;

use App\Models\Pelamar;
use illuminate\support\Facades\Auth;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class KepsekController extends Controller
{

    public function index()
    {

        if (Auth::user()->level != 'Kepsek') {
            return redirect()->route('dashboard');
        } else {
            $Jumpelamar = Pelamar::count();
            $perusahaan = Perusahaan::all();
            $labelChart = [];
            $persentaseChart = [];

            foreach ($perusahaan as $item) {
                $pelamarLoop = Pelamar::where('id_perusahaan', $item->id)->count();

                if ($pelamarLoop != 0) {
                    $persentase = $pelamarLoop / $Jumpelamar * 100;
                } else {
                    $persentase = 0;
                }

                $labelChart[] = $item->perusahaan;
                $persentaseChart[] = $persentase;
            }

            $data = [
                'pelamar' => Pelamar::all(),
                'label' => json_encode($labelChart),
                'persentase' => json_encode($persentaseChart)
            ];
            return view("statisdoangcok.kepsek", $data);
        }
    }

    public function hrd()
    {

        if (Auth::user()->level == 'Kepsek') {
            return redirect()->route('kepsek');
        } else {
            $id = Auth::user()->id_perusahaan;
            $perusahaan = Perusahaan::where('id', $id)->pluck('perusahaan')->first();
            $data = Pelamar::where('id_perusahaan', Auth::user()->id_perusahaan)->get();
            return view('statisdoangcok.HR', [
                'data' => $data,
                'perusahaan' => $perusahaan
            ]);
        }
    }
}
