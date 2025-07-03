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
                "nama" => "Lucky",
                "jumlah_pax" => 1
            ],
            [
                "nama" => "Vicky",
                "jumlah_pax" => 1
            ]
        ];

        foreach ($guests as $guest) {
            Guest::create([
                'id' => (string) Str::orderedUuid(),
                'nama' => $guest['nama'],
                'jumlah_pax' => $guest['jumlah_pax'],
                'status' => "Belum Reservasi"
            ]);
        }
    }
}
