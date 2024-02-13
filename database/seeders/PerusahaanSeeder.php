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
                'id' => 1,
                'perusahaan' => 'Pharos Group',
                'level' => 'Pharos'
            ],[
                'id' => 2,
                'perusahaan' => 'PT. All Qurrny Bagas Pratama',
                'level' => 'Qurrny'
            ],[
                'id' => 3,
                'perusahaan' => 'PT. Hana Anargya',
                'level' => 'Hana'
            ],[
                'id' => 4,
                'perusahaan' => 'Cirill Indonesia',
                'level' => 'Cirill'
            ],[
                'id' => 5,
                'perusahaan' => 'AnterAja',
                'level' => 'Anteraja'
            ]
        ];

        foreach ($users as $key => $value) {
            Perusahaan::create($value);
        }
    }
}
