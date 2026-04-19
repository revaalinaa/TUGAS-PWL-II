<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $kategori = [
            'nama_kategori' => 'Pemograman',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $kategori = [
            'nama_kategori' => 'Database Design',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('kategori')->insert($kategori);
    }
}
