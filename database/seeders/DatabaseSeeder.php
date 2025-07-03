<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Denny',
            'email' => 'denny',
        ]);

        $this->call([
            GuestSeeder::class,
            // PelangganSeeder::class,
            // UserRolePermissionSeeder::class,
            // KategoriBarangSeeder::class,
            // BarangSeeder::class,
            // DetilBarangSeeder::class,
        ]);
    }
}
