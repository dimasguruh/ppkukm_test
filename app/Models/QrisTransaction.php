<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class QrisTransaction extends Model
{
    use HasFactory;
    
    protected $table = 'qris_transaction';

    // Soal 1: Total transaksi dan nominal
    public static function getTotalTransaksi()
    {
        return DB::table('qris_transaction as qt')
            ->leftJoin('peserta_qris as pq', 'qt.peserta_id', '=', 'pq.id')
            ->select(
                'qt.peserta_id',
                'pq.nama_pemilik_qris',
                'pq.nama_usaha',
                DB::raw('COUNT(qt.peserta_id) AS total_transaksi'),
                DB::raw('SUM(qt.nominal) AS total_nominal_transaksi')
            )
            ->groupBy('qt.peserta_id', 'pq.nama_pemilik_qris', 'pq.nama_usaha')
            ->get();
    }

    // Soal 3: Total nominal per bulan
    public static function getTotalNominalPerBulan()
    {
        return DB::table('qris_transaction')
            ->select(
                DB::raw("DATE_FORMAT(tanggal_transaksi, '%Y-%m') AS bulantahun"),
                DB::raw('SUM(nominal) AS total_nominal')
            )
            ->groupBy('bulantahun')
            ->orderBy('bulantahun')
            ->get();
    }
}
