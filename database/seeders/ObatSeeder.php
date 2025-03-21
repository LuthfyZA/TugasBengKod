<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Periksa;
use App\Models\Obat;
use App\Models\DetailPeriksa;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Obat::create([
            'nama_obat' => 'Paracetamol',
            'kemasan' => 'Strip',
            'harga' => 500000000,
        ]);
    }
}
