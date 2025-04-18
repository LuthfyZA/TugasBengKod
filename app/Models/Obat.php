<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang benar
    protected $table = 'obats';
    
    // Menentukan kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'nama_obat',
        'kemasan',
        'harga'
    ];

    // Relasi dengan DetailPeriksa
    public function detailPeriksas()
    {
        return $this->hasMany(DetailPeriksa::class, 'id_obat');
    }
}