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
                'id' => 2
            ],[
                'id' => 2
            ]
        ];

        foreach ($users as $key => $value) {
            Perusahaan::create($value);
        }
    }
}
