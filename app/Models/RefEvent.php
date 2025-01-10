<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RefEvent extends Model
{
    use HasFactory;

    protected $table = 'ref_event';

    // Soal 2: Event dengan total transaksi
    public static function getTopEvents()
    {
        return DB::table('ref_event as re')
            ->leftJoin('qris_transaction as qt', function ($join) {
                $join->on('qt.tanggal_transaksi', '>=', 're.jadwal_pelaksanaan_mulai')
                     ->on('qt.tanggal_transaksi', '<=', 're.jadwal_pelaksanaan_selesai');
            })
            ->select(
                're.nama_event as nama_event',
                DB::raw('COUNT(re.id) AS total_event')
            )
            ->groupBy('re.id', 're.nama_event')
            ->orderByDesc('total_event')
            ->limit(5)
            ->get();
    }
}
