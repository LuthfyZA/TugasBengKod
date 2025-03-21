<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Periksa;
use App\Models\Obat;
use App\Models\DetailPeriksa;

class DetailPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailPeriksa::create([
            'id_periksa' => 1,
            'id_obat' => 1,
        ]);
    }
}
