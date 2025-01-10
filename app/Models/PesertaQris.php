<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PesertaQris extends Model
{
    use HasFactory;

    protected $table = 'peserta_qris';

    // Soal 4: Jumlah nama usaha
    public static function getJumlahNamaUsaha()
    {
        return DB::table('peserta_qris')
            ->select(
                'nama_usaha',
                DB::raw('COUNT(nama_usaha) AS jumlah_nama_usaha')
            )
            ->groupBy('nama_usaha')
            ->orderByDesc('jumlah_nama_usaha')
            ->get();
    }
}