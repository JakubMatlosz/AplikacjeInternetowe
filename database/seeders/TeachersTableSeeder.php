<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeachersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('teachers')->insert([
            'name' => 'Piotr',
            'surname' => 'Nowak',
            'email' => 'piotr@email.com',
            'language' => 'English',
            'phone_number' => '789246012',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teachers')->insert([
            'name' => 'Maria',
            'surname' => 'Kwiatkowska',
            'email' => 'maria@email.com',
            'language' => 'German',
            'phone_number' => '841094752',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teachers')->insert([
            'name' => 'Michał',
            'surname' => 'Fuzowski',
            'email' => 'michal@email.com',
            'language' => 'French',
            'phone_number' => '810238594',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teachers')->insert([
            'name' => 'Gabriel',
            'surname' => 'Kurasz',
            'email' => 'gabriel@email.com',
            'language' => 'Italian',
            'phone_number' => '819023586',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teachers')->insert([
            'name' => 'Konrad',
            'surname' => 'Prorok',
            'email' => 'konrad@email.com',
            'language' => 'Spanish',
            'phone_number' => '209102754',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('teachers')->insert([
            'name' => 'Bartłomiej',
            'surname' => 'Pacześniak',
            'email' => 'bartłomiej@email.com',
            'language' => 'Chinese',
            'phone_number' => '729012574',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
