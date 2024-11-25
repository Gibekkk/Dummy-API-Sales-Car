<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class KontakController extends Controller
{
    public function general()
    {
        $return = [
            "Hot" => random_int(0, 30),
            "Medium" => random_int(0, 30),
            "Low" => random_int(0, 30),
            "Follow Up" => random_int(0, 30),
            "Follow Up Lanjutan" => random_int(0, 30),
            "Customer" => random_int(0, 30),
            "Netral" => random_int(0, 30),
            "Repeat Order" => random_int(0, 30),
        ];
        return response()->json($return);
    }

    public function getAll()
    {
        $return = [
            [
                "namaKontak" => "John Doe",
                "address" => "123 Main Street",
                "pekerjaanJabatan" => "Programmer",
                "nomorTelpon" => [
                    [
                        "isWhatsapp" => true,
                        "nomorTelepon" => "08123456789",
                    ],
                    [
                        "isWhatsapp" => false,
                        "nomorTelepon" => "08123456789",
                    ],
                ],
                "fotoProfil" => "https://firebasestorage.googleapis.com/v0/b/sales-mobil-dba13.appspot.com/o/default_profile.png?alt=media&token=f2715c1f-822e-4c65-89b3-0b6faf8614ba",
            ],
            [
                "namaKontak" => "Mary Jane",
                "address" => "123 Main Street",
                "pekerjaanJabatan" => "Programmer",
                "nomorTelpon" => [
                    [
                        "isWhatsapp" => true,
                        "nomorTelepon" => "08123456789",
                    ],
                ],
                "fotoProfil" => "https://firebasestorage.googleapis.com/v0/b/sales-mobil-dba13.appspot.com/o/default_profile.png?alt=media&token=f2715c1f-822e-4c65-89b3-0b6faf8614ba",
            ],
        ];
        return response()->json($return);
    }
}
