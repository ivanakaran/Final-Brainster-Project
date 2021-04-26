<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Course::create([
           'user_id' => 1,
           'title' => 'Learn JavaScript - Full Course for Beginners',
           'link' => 'https://www.youtube.com/watch?v=PkZNo7MFNFg',
           'free' => '0',
           'paid' => '1',
           'language' => 'macedonian',
           'level' => 'beginner',
           'status' => '1'
           
        ]);
    }
}
