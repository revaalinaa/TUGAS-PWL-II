<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matakuliah')->insert([
        [
            'kode_matakuliah' => 'IF101',
            'nama_matakuliah' => 'Basis Data',
            'sks' => 3
        ],
        [
            'kode_matakuliah' => 'IF102',
            'nama_matakuliah' => 'Pemrograman Web',
            'sks' => 3
        ]
    ]);
    }
}
