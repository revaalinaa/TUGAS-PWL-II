<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('mahasiswa')->insert([
        [
            'npm' => '5520124001',
            'nidn' => '1234567890',
            'nama' => 'Andi Saputra'
        ],
        [
            'npm' => '5520124002',
            'nidn' => '0987654321',
            'nama' => 'Rina Putri'
        ]
    ]);
    }
}
