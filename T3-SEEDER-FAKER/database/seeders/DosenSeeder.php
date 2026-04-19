<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosen')->insert([
        [
            'nidn' => '1234567890',
            'nama' => 'Dr. Budi Santoso'
        ],
        [
            'nidn' => '0987654321',
            'nama' => 'Dr. Siti Rahma'
        ]
    ]);
    }
}
