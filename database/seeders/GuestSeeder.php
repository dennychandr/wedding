<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guests = [
            [
                "nama" => "Gracia & Daniel",
                "jumlah_pax" => 2,
                "jenis_tamu" => "Pasangan",
            ],
            [
                "nama" => "Celine & Joshua",
                "jumlah_pax" => 2,
                "jenis_tamu" => "Pasangan",
            ],
            [
                "nama" => "Michelle & Josiah",
                "jumlah_pax" => 2,
                "jenis_tamu" => "Pasangan",
            ],
            [
                "nama" => "Jessica Michelle",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Lala & Deo",
                "jumlah_pax" => 2,
                "jenis_tamu" => "Pasangan",
            ],
            [
                "nama" => "Felicia & Christian",
                "jumlah_pax" => 2,
                "jenis_tamu" => "Pasangan",
            ],
            [
                "nama" => "Vaness & Geoffrey",
                "jumlah_pax" => 2,
                "jenis_tamu" => "Pasangan",
            ],
            [
                "nama" => "Velia",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Grace",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Tan, Yessika",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Sherine",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Rania",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Renatha",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Dany",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Pria",
            ],
            [
                "nama" => "Devina",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Lydia",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Stelly",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Nadya",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Aurel",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Catherine",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Christiana",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Maggie",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],
            [
                "nama" => "Gaby",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
            ],





            [
                "nama" => "Lucky",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Pria",
            ],
            [
                "nama" => "Vicky",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Pria",
            ]
        ];

        foreach ($guests as $guest) {
            Guest::create([
                'id' => (string) Str::orderedUuid(),
                'nama' => $guest['nama'],
                'jumlah_pax' => $guest['jumlah_pax'],
                'jenis_tamu' => $guest['jenis_tamu'],
                'status' => "Belum Reservasi"
            ]);
        }
    }
}
