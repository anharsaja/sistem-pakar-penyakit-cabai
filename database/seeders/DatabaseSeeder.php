<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role'  => 'admin',
            'phone' => '081234567890',
            'address' => 'Jl. Contoh Alamat No.123, Kota Contoh',
            'password' => bcrypt('admin'),
        ]);
        User::factory()->create([
            'name' => 'Budi Wahyudi',
            'email' => 'user1@gmail.com',
            'role'  => 'user',
            'phone' => '081234567890',
            'address' => 'Jl. Contoh Alamat No.123, Kota Contoh',
            'password' => bcrypt('user'),
        ]);
        User::factory()->create([
            'name' => 'Dendi Suharto',
            'email' => 'user2@gmail.com',
            'role'  => 'user',
            'phone' => '081234567890',
            'address' => 'Jl. Contoh Alamat No.123, Kota Contoh',
            'password' => bcrypt('user'),
        ]);
        User::factory()->create([
            'name' => 'Sugeng Cahyadi',
            'email' => 'user3@gmail.com',
            'role'  => 'user',
            'phone' => '081234567890',
            'address' => 'Jl. Contoh Alamat No.123, Kota Contoh',
            'password' => bcrypt('user'),
        ]);

        $this->call(GejalaSeeder::class);
        $this->call(PenyakitSeeder::class);
        $this->call(BobotGejalaSeeder::class);
        $this->call(BobotPakarSeeder::class);
    }
}
