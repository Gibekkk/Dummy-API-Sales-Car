<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class StatisticController extends Controller
{
    public function generalPenjualan()
    {
        $bulans = [
            "Januari",
            "Februari",
            "Maret",
            "April",
            "Mei",
            "Juni",
            "Juli",
            "Agustus",
            "September",
            "Oktober",
            "November",
            "Desember"
        ];
        $return = [];
        foreach($bulans as $bulan){
            $jumlah = random_int(0, 10);
            $baru = random_int(0, $jumlah);
            $jumlah -= $baru;
            $bekas = random_int(0, $jumlah);
            $jumlah -= $bekas;
            $tradeIn = $jumlah;
            $return[$bulan] = [
                "Item Terjual" => $baru + $bekas + $tradeIn,
                "Baru" => $baru,
                "Bekas" => $bekas,
                "Trade In" => $tradeIn
            ];
        }
        return response()->json($return);
    }
}
