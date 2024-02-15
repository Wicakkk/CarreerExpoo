<?php

namespace Database\Seeders;

use App\Models\Perusahaan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id' => 8643846,
                'perusahaan' => 'Pharos Group',
                'level' => 'Pharos'
            ],[
                'id' => 1434252,
                'perusahaan' => 'PT. All Qurrny Bagas Pratama',
                'level' => 'Qurrny'
            ],[
                'id' => 3123463,
                'perusahaan' => 'PT. Hana Anargya',
                'level' => 'Hana'
            ],[
                'id' => 2432364,
                'perusahaan' => 'Cirill Indonesia',
                'level' => 'Cirill'
            ],[
                'id' => 5377296,
                'perusahaan' => 'AnterAja',
                'level' => 'Anteraja'
            ],[
                'id' => 8968634,
                'perusahaan' => 'Trapo Indonesia',
                'level' => 'Trapo'
            ],[
                'id' => 9864462,
                'perusahaan' => 'Indomaret Group',
                'level' => 'Indomaret'
            ],[
                'id' => 9565489,
                'perusahaan' => 'Sigma Solusi Servis',
                'level' => '3S'
            ],[
                'id' => 2432532,
                'perusahaan' => 'Sutindo',
                'level' => 'Sutindo'
            ],[
                'id' => 7654645,
                'perusahaan' => 'Saham Rakyat',
                'level' => 'Saham'
            ],[
                'id' => 3541477,
                'perusahaan' => 'Asosiasi Penyelenggara Pemagangan Luar Negeri',
                'level' => 'AP2LN'
            ],[
                'id' => 5786878,
                'perusahaan' => 'Indivara Group',
                'level' => 'Indivara'
            ],[
                'id' => 1131412,
                'perusahaan' => 'PT. Prima Fajar Cahaya Surya',
                'level' => 'Fajar'
            ],[
                'id' => 1872744,
                'perusahaan' => 'Infomedia',
                'level' => 'Infomedia'
            ]
        ];

        foreach ($users as $key => $value) {
            Perusahaan::create($value);
        }
    }
}
