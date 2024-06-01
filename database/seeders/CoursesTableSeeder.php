<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->insert([
            'name' => 'English for Beginners',
            'language' => 'English',
            'teacher_id' => 1,
            'img'=>'english.jpg',
            'start_date' => '2024-01-01',
            'end_date' => '2024-03-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('courses')->insert([
            'name' => 'Intermediate English',
            'language' => 'English',
            'teacher_id' => 1,
            'img'=>'english.jpg',
            'start_date' => '2024-01-01',
            'end_date' => '2024-03-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('courses')->insert([
            'name' => 'Advanced English',
            'language' => 'English',
            'teacher_id' => 1,
            'img'=>'english.jpg',
            'start_date' => '2024-01-01',
            'end_date' => '2024-03-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('courses')->insert([
            'name' => 'German for Beginners',
            'language' => 'German',
            'teacher_id' => 2,
            'img'=>'german.jpg',
            'start_date' => '2024-03-01',
            'end_date' => '2024-05-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('courses')->insert([
            'name' => 'Intermediate German',
            'language' => 'German',
            'teacher_id' => 2,
            'img'=>'german.jpg',
            'start_date' => '2024-03-01',
            'end_date' => '2024-05-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('courses')->insert([
            'name' => 'Advanced German',
            'language' => 'German',
            'teacher_id' => 2,
            'img'=>'german.jpg',
            'start_date' => '2024-03-01',
            'end_date' => '2024-05-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('courses')->insert([
            'name' => 'French for Beginners',
            'language' => 'French',
            'teacher_id' => 3,
            'img'=>'french.jpg',
            'start_date' => '2024-05-01',
            'end_date' => '2024-07-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('courses')->insert([
            'name' => 'Intermediate French',
            'language' => 'French',
            'teacher_id' => 3,
            'img'=>'french.jpg',
            'start_date' => '2024-05-01',
            'end_date' => '2024-07-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('courses')->insert([
            'name' => 'Advanced French',
            'language' => 'French',
            'teacher_id' => 3,
            'img'=>'french.jpg',
            'start_date' => '2024-05-01',
            'end_date' => '2024-07-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('courses')->insert([
            'name' => 'Italian for Beginners',
            'language' => 'Italian',
            'teacher_id' => 4,
            'img'=>'italian.jpg',
            'start_date' => '2024-07-01',
            'end_date' => '2024-09-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('courses')->insert([
            'name' => 'Intermediate Italian',
            'language' => 'Italian',
            'teacher_id' => 4,
            'img'=>'italian.jpg',
            'start_date' => '2024-07-01',
            'end_date' => '2024-09-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('courses')->insert([
            'name' => 'Advanced Italian',
            'language' => 'Italian',
            'teacher_id' => 4,
            'img'=>'italian.jpg',
            'start_date' => '2024-07-01',
            'end_date' => '2024-09-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('courses')->insert([
            'name' => 'Spanish for Beginners',
            'language' => 'Spanish',
            'teacher_id' => 5,
            'img'=>'spanish.jpg',
            'start_date' => '2024-09-01',
            'end_date' => '2024-11-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('courses')->insert([
            'name' => 'Intermediate Spanish',
            'language' => 'Spanish',
            'teacher_id' => 5,
            'img'=>'spanish.jpg',
            'start_date' => '2024-09-01',
            'end_date' => '2024-11-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('courses')->insert([
            'name' => 'Advanced Spanish',
            'language' => 'Spanish',
            'teacher_id' => 5,
            'img'=>'spanish.jpg',
            'start_date' => '2024-09-01',
            'end_date' => '2024-11-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('courses')->insert([
            'name' => 'Chinese for Beginners',
            'language' => 'Chinese',
            'teacher_id' => 6,
            'img'=>'chinese.jpg',
            'start_date' => '2024-11-01',
            'end_date' => '2025-01-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('courses')->insert([
            'name' => 'Intermediate Chinese',
            'language' => 'Chinese',
            'teacher_id' => 6,
            'img'=>'chinese.jpg',
            'start_date' => '2024-11-01',
            'end_date' => '2025-01-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('courses')->insert([
            'name' => 'Advanced Chinese',
            'language' => 'Chinese',
            'teacher_id' => 6,
            'img'=>'chinese.jpg',
            'start_date' => '2024-11-01',
            'end_date' => '2025-01-01',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
