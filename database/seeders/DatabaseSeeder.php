<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       $this->call(UserSeeder::class);

       //without using UserFactory,create direct dbseeder
    //    User::factory()->create([
    // 'name' => 'Admin',
    // 'email' => 'admin@gmail.com',
    // 'phone' => '09259190620',
    // 'role' => 'admin',
    // 'password' => Hash::make('admin@123')
    //    ]);
    }
}

//factory->seeder->db seeder