<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Jan',
            'email' => 'jan@example.com',
        ]);
        User::factory()->create([
            'name' => 'Michał',
            'email' => 'michal@example.com',
        ]);
        User::factory()->create([
            'name' => 'Kasia',
            'email' => 'ksia@example.com',
        ]);
        User::factory()->create([
            'name' => 'Martyna',
            'email' => 'martyna@example.com',
        ]);
    }
}
