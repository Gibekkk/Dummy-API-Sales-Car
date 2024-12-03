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

    public function detailPenjualan()
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
            $customer = random_int(0, 100);
            $laki_laki = random_int(0, $customer);
            $tunai = random_int(0, $customer);
            $jumlah = random_int(0, 10);
            $baru = random_int(0, $jumlah);
            $jumlah -= $baru;
            $bekas = random_int(0, $jumlah);
            $jumlah -= $bekas;
            $tradeIn = $jumlah;
            $kategoriUmur = [
                "20 - 30 tahun",
                "31 - 35 tahun",
                "36 - 40 tahun",
                "41 - 45 tahun",
                "46 - 50 tahun",
                "51 tahun keatas"
            ];
            $umurPelanggan = [];
            $container = $customer;
            for($i = 0; $i < count($kategoriUmur); $i++){
                if($i == count($kategoriUmur) - 1) $umurPelanggan[$kategoriUmur[$i]] = $container;
                else $umurPelanggan[$kategoriUmur[$i]] = random_int(0, $container);
                $container -= $umurPelanggan[$kategoriUmur[$i]];
            }
            $return[$bulan] = [
                "Item Terjual" => $baru + $bekas + $tradeIn,
                "Baru" => $baru,
                "Bekas" => $bekas,
                "Trade In" => $tradeIn,
                "Customer" => [
                    "Jenis Kelamin" => [
                        "Laki-Laki" => $laki_laki,
                        "Perempuan" => $customer - $laki_laki
                    ],
                    "Tipe Penjualan" => [
                        "Tunai" => $tunai,
                        "Kredit" => $customer - $tunai
                    ],
                    "Umur Customer" => $umurPelanggan
                ]
            ];
        }
        return response()->json($return);
    }
}
