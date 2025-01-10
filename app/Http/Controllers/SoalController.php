<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QrisTransaction;
use App\Models\RefEvent;
use App\Models\PesertaQris;

class SoalController extends Controller
{
        //  Soal 1
        public function soal1()
        {
            $data = QrisTransaction::getTotalTransaksi();
            return view('soal.soal1', compact('data'));
        }
    
        // Query 2
        public function soal2()
        {
            $data = RefEvent::getTopEvents();

            $labels = [];
            $total_event = [];

            foreach ($data as $item) {
                $labels[] = $item->nama_event;
                $total_event[] = (float) $item->total_event;
            }

            return view('soal.soal2', compact('labels', 'total_event'));
        }
    
        // Soal 3
        public function soal3()
        {
            $data = QrisTransaction::getTotalNominalPerBulan();

            $labels = [];
            $nominal = [];

            foreach ($data as $item) {
                $labels[] = $item->bulantahun;
                $nominal[] = (float) $item->total_nominal;
            }

            return view('soal.soal3', compact('labels', 'nominal'));
        }
    
        // Soal 4
        public function soal4()
        {
            $data = PesertaQris::getJumlahNamaUsaha();
            $labels = [];
            $jumlah_nama_usaha = [];

            foreach ($data as $item) {
                $labels[] = $item->nama_usaha;
                $jumlah_nama_usaha[] = (float) $item->jumlah_nama_usaha;
            }

            return view('soal.soal4', compact('labels', 'jumlah_nama_usaha'));
        }
}