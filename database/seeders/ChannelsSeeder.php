<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChannelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            'title' => 'Programming',
            'slug' => Str::slug('programming', '-'),
        ]);

        Channel::create([
            'title' => 'Data Science',
            'slug' => Str::slug('data science', '-'),
        ]);

        Channel::create([
            'title' => 'DevOps',
            'slug' => Str::slug('devops', '-'),
        ]);

        Channel::create([
            'title' => 'Design',
            'slug' => Str::slug('design', '-'),
        ]);

    }
}