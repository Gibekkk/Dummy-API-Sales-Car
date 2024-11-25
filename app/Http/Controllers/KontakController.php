<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class KontakController extends Controller
{
    public function general()
    {
        $return = [
            "Hot" => [
                [
                    "email" => "example@gmail.com",
                    "namaKontak" => "Mary Jane",
                    "sumberDatabase" => "Teman Kuliah",
                    "diarsipkan" => true,
                    "nomorKontak" => [
                        [
                            "isWhatsapp" => true,
                            "nomorTelepon" => "08123456789",
                        ],
                        [
                            "isWhatsapp" => false,
                            "nomorTelepon" => "08123456789",
                        ],
                    ],
                ],
                [
                    "email" => "example@gmail.com",
                    "namaKontak" => "John Doe",
                    "sumberDatabase" => "Teman Kuliah",
                    "diarsipkan" => true,
                    "nomorKontak" => [
                        [
                            "isWhatsapp" => true,
                            "nomorTelepon" => "08123456789",
                        ],
                    ],
                ],
            ],
            "Medium" => [
                [
                    "email" => "example@gmail.com",
                    "namaKontak" => "Mary Jane",
                    "sumberDatabase" => "Teman Kuliah",
                    "diarsipkan" => true,
                    "nomorKontak" => [
                        [
                            "isWhatsapp" => true,
                            "nomorTelepon" => "08123456789",
                        ],
                        [
                            "isWhatsapp" => false,
                            "nomorTelepon" => "08123456789",
                        ],
                    ],
                ],
                [
                    "email" => "example@gmail.com",
                    "namaKontak" => "John Doe",
                    "sumberDatabase" => "Teman Kuliah",
                    "diarsipkan" => true,
                    "nomorKontak" => [
                        [
                            "isWhatsapp" => true,
                            "nomorTelepon" => "08123456789",
                        ],
                    ],
                ],
            ],
            "Low" => [
                [
                    "email" => "example@gmail.com",
                    "namaKontak" => "Mary Jane",
                    "sumberDatabase" => "Teman Kuliah",
                    "diarsipkan" => true,
                    "nomorKontak" => [
                        [
                            "isWhatsapp" => true,
                            "nomorTelepon" => "08123456789",
                        ],
                        [
                            "isWhatsapp" => false,
                            "nomorTelepon" => "08123456789",
                        ],
                    ],
                ],
                [
                    "email" => "example@gmail.com",
                    "namaKontak" => "John Doe",
                    "sumberDatabase" => "Teman Kuliah",
                    "diarsipkan" => true,
                    "nomorKontak" => [
                        [
                            "isWhatsapp" => true,
                            "nomorTelepon" => "08123456789",
                        ],
                    ],
                ],
            ],
        ];
        return response()->json($return);
    }
}
