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
            return redirect()->route('login');
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
}
