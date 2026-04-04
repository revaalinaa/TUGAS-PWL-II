<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('suppliers')->insert([
        [
            'nama_supplier' => 'PT Sumber Jaya',
            'alamat' => 'Jakarta',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nama_supplier' => 'PT Maju Mundur',
            'alamat' => 'Bandung',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ]);
    }
}
