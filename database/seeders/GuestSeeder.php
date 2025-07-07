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
                "link_drive" => "https://drive.google.com/drive/folders/1vFgGWlavZaTgT6jLPeHPwJ87sr8GMJtc?usp=sharing",
            ],
            [
                "nama" => "Celine & Joshua",
                "jumlah_pax" => 2,
                "jenis_tamu" => "Pasangan",
                "link_drive" => "https://drive.google.com/drive/folders/1vI5XGbJKgeNtmc2qCtUbkrj1tbKENos0?usp=sharing",
            ],
            [
                "nama" => "Michelle & Josiah",
                "jumlah_pax" => 2,
                "jenis_tamu" => "Pasangan",
                "link_drive" => "https://drive.google.com/drive/folders/1owxrS-4XpcfEeMaPxFoh4fdUGX68Rp8s?usp=sharing",
            ],
            [
                "nama" => "Jessica Michelle",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1O23o7B2DOOGDV7zfi8dVqOFsaHZzO_nP?usp=sharing",
            ],
            [
                "nama" => "Lala & Deo",
                "jumlah_pax" => 2,
                "jenis_tamu" => "Pasangan",
                "link_drive" => "https://drive.google.com/drive/folders/1lbo6GRDQb1xWM9J2pMPOJQJsH8UESdLM?usp=sharing",
            ],
            [
                "nama" => "Felicia & Christian",
                "jumlah_pax" => 2,
                "jenis_tamu" => "Pasangan",
                "link_drive" => "https://drive.google.com/drive/folders/1SgRrNN9i12wi4Z4CEVkVgpm2vgvhIYkY?usp=sharing",
            ],
            [
                "nama" => "Vaness & Geoffrey",
                "jumlah_pax" => 2,
                "jenis_tamu" => "Pasangan",
                "link_drive" => "https://drive.google.com/drive/folders/1fw710lpzBBeI6no-rUMKku5QBzcbAxtS?usp=sharing",
            ],
            [
                "nama" => "Velia",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1Oxn8NG8o5yebqeHT84Nz7nTOvCzjgXd9?usp=sharing",
            ],
            [
                "nama" => "Grace",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1qubxQrTSgqL_UZ7QAQ5aRYnZ5gtJrXSj?usp=sharing",
            ],
            [
                "nama" => "Tan, Yessika",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1dsRAOx-PdIBouWMA7HyecO6BaekUctGI?usp=sharing",
            ],
            [
                "nama" => "Sherine",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1Dj0ryoPgpdcZS7q_X7nTOocfD_79xQWP?usp=sharing",
            ],
            [
                "nama" => "Rania",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/11mHExHoP-UK5M92keBu3IjHZjU9iidEW?usp=sharing",
            ],
            [
                "nama" => "Renatha",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1D2UMJ3fTvKsycbagkoHHf_a6fisFkkDN?usp=sharing",
            ],
            [
                "nama" => "Dany",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Pria",
                "link_drive" => "https://drive.google.com/drive/folders/1vGoqDumXeYQoFNroAYCy1S4fdQFgIgxg?usp=sharing",
            ],
            [
                "nama" => "Devina",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1GJDrua0q1wkSPXMQ1TylBKcs7sUUDdRr?usp=sharing",
            ],
            [
                "nama" => "Lydia",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1owvw1-NX3mr7S3fLqg37oHBfjJpNqNqh?usp=sharing",
            ],
            [
                "nama" => "Stelly",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1nOFRKrfIFC3116JI1hsGoILIT-bt7c_V?usp=sharing",
            ],
            [
                "nama" => "Nadya",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1hcW2Em4pyIsOKZ-K3ja42yjQiJNJ0KaE?usp=sharing",
            ],
            [
                "nama" => "Aurel",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1wwZqyN4N4ruTSSl0g4a7ddKLHBnnRDMV?usp=sharing",
            ],
            [
                "nama" => "Catherine",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1ACqfDQwoONTW-YQbEzv8Mje3wFzvSaVD?usp=sharing",
            ],
            [
                "nama" => "Christiana",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1CUZfqzkFhM9NFzHet9CnZ5WMJ2Xs8yog?usp=sharing",
            ],
            [
                "nama" => "Maggie",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1ZSEHvTNvtu3V0V-F9jsGbAo9uD42Wm_m?usp=sharing",
            ],
            [
                "nama" => "Gaby",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Wanita",
                "link_drive" => "https://drive.google.com/drive/folders/1Fr1g-xA3DhfOdqnrv9XKHB2xBFh5ubqN?usp=sharing",
            ],





            [
                "nama" => "Naldy & Kezia",
                "jumlah_pax" => 2,
                "jenis_tamu" => "Pasangan",
                "link_drive" => "https://drive.google.com/drive/folders/1IOnmsxh2n_5uPPpirPnpR3wcyFYQAcKR?usp=sharing",
            ],
            [
                "nama" => "Lee & Mayleen",
                "jumlah_pax" => 2,
                "jenis_tamu" => "Pasangan",
                "link_drive" => "https://drive.google.com/drive/folders/1J3ybcggsEYnFGAPNggBjzvHQEkRx1IV1?usp=sharing",
            ],
            [
                "nama" => "Lucky",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Pria",
                "link_drive" => "https://drive.google.com/drive/folders/1YzXlgT2kogeY-PQg63yoxpFXO6p5FJPU?usp=sharing",
            ],
            [
                "nama" => "Vicky",
                "jumlah_pax" => 1,
                "jenis_tamu" => "Pria",
                "link_drive" => "https://drive.google.com/drive/folders/1tlEPLEdiJjzb1JhJkEg9scZxO9i7KNGj?usp=sharing",
            ]
        ];

        foreach ($guests as $guest) {
            Guest::create([
                'id' => (string) Str::orderedUuid(),
                'nama' => $guest['nama'],
                'jumlah_pax' => $guest['jumlah_pax'],
                'jenis_tamu' => $guest['jenis_tamu'],
                'link_drive' => $guest['link_drive'],
                'status' => "Belum Reservasi"
            ]);
        }
    }
}
