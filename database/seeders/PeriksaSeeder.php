<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Periksa;
use App\Models\Obat;
use App\Models\DetailPeriksa;
class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Periksa::create([
            'id_pasien' => 2,
            'id_dokter' => 1,
            'tgl_periksa' => now(),
            'catatan' => 'Demam dan pusing',
            'biaya_periksa' => 50000,
        ]);
    }
}
