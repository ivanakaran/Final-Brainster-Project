<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'JavaScript',
            'slug' => Str::slug('learn javascript', '-'),
            'logo' => "https://hackr.io/tutorials/javascript/logo-javascript.svg?ver=1610114223",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'PHP',
            'slug' => Str::slug('learn php', '-'),
            'logo' => "https://hackr.io/tutorials/php/logo-php.svg?ver=1610114282",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'Laravel',
            'slug' => Str::slug('learn laravel', '-'),
            'logo' => "https://hackr.io/tutorials/laravel/logo-laravel.svg?ver=1603206644",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'Python',
            'slug' => Str::slug('learn python', '-'),
            'logo' => "https://hackr.io/tutorials/python/logo-python.svg?ver=1562823957",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'HTML 5',
            'slug' => Str::slug('learn html 5', '-'),
            'logo' => "https://hackr.io/tutorials/html-5/logo-html-5.svg?ver=1587977020",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'Java',
            'slug' => Str::slug('learn java', '-'),
            'logo' => "https://hackr.io/tutorials/java/logo-java.svg?ver=1610114251",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'Java',
            'slug' => Str::slug('learn CSS', '-'),
            'logo' => "https://hackr.io/tutorials/css/logo-css.svg?ver=1587721903",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'C++',
            'slug' => Str::slug('learn c plus plus', '-'),
            'logo' => "https://hackr.io/tutorials/c-plus-plus/logo-c-plus-plus.svg?ver=1579861999",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'React',
            'slug' => Str::slug('learn react', '-'),
            'logo' => "https://hackr.io/tutorials/react/logo-react.svg?ver=1610114789",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'Node.js',
            'slug' => Str::slug('learn node js', '-'),
            'logo' => "https://hackr.io/tutorials/node-js/logo-node-js.svg?ver=1610118577",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'C',
            'slug' => Str::slug('learn c', '-'),
            'logo' => "https://hackr.io/tutorials/c/logo-c.svg?ver=1610115043",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'Django',
            'slug' => Str::slug('learn django', '-'),
            'logo' => "https://hackr.io/tutorials/django/logo-django.svg?ver=1610114943",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'MySQL',
            'slug' => Str::slug('learn mysql', '-'),
            'logo' => "https://hackr.io/tutorials/mysql/logo-mysql.svg?ver=1587981026",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'Bootstrap',
            'slug' => Str::slug('learn bootstrap', '-'),
            'logo' => "https://hackr.io/tutorials/bootstrap/logo-bootstrap.svg?ver=1555328097",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'Flutter',
            'slug' => Str::slug('learn flutter', '-'),
            'logo' => "https://hackr.io/tutorials/flutter/logo-flutter.svg?ver=1610118714",
            'channel_id' => Channel::where('title', 'Programming')->first()->id,
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => Str::slug('learn machine learning', '-'),
            'logo' => "https://hackr.io/tutorials/machine-learning-ml/logo-machine-learning-ml.svg?ver=1559644608",
            'channel_id' => Channel::where('title', 'Data Science')->first()->id,
        ]);

        Category::create([
            'name' => 'Data Science',
            'slug' => Str::slug('learn data science', '-'),
            'logo' => "https://hackr.io/tutorials/data-science/logo-data-science.svg?ver=1555775500",
            'channel_id' => Channel::where('title', 'Data Science')->first()->id,
        ]);

        Category::create([
            'name' => 'Deep Learning',
            'slug' => Str::slug('learn deep learning', '-'),
            'logo' => "https://hackr.io/tutorials/deep-learning/logo-deep-learning.svg?ver=1576625961",
            'channel_id' => Channel::where('title', 'Data Science')->first()->id,
        ]);

        Category::create([
            'name' => 'Tensor Flow',
            'slug' => Str::slug('learn tensor flow', '-'),
            'logo' => "https://hackr.io/tutorials/tensorflow/logo-tensorflow.svg?ver=1563364741",
            'channel_id' => Channel::where('title', 'Data Science')->first()->id,
        ]);

        Category::create([
            'name' => 'R',
            'slug' => Str::slug('learn r', '-'),
            'logo' => "https://hackr.io/tutorials/r/logo-r.svg?ver=1563444139",
            'channel_id' => Channel::where('title', 'Data Science')->first()->id,
        ]);

        Category::create([
            'name' => 'Hadoop',
            'slug' => Str::slug('learn hadoop', '-'),
            'logo' => "https://hackr.io/tutorials/hadoop-big-data/logo-hadoop-big-data.svg?ver=1555234281",
            'channel_id' => Channel::where('title', 'Data Science')->first()->id,
        ]);

        Category::create([
            'name' => 'Docker',
            'slug' => Str::slug('learn docker', '-'),
            'logo' => "https://hackr.io/tutorials/docker/logo-docker.svg?ver=1603206033",
            'channel_id' => Channel::where('title', 'DevOps')->first()->id,
        ]);

        Category::create([
            'name' => 'AWS',
            'slug' => Str::slug('learn aws', '-'),
            'logo' => "https://hackr.io/tutorials/amazon-web-services-aws/logo-amazon-web-services-aws.svg?ver=1555328044",
            'channel_id' => Channel::where('title', 'DevOps')->first()->id,
        ]);

        Category::create([
            'name' => 'DevOps',
            'slug' => Str::slug('learn devops', '-'),
            'logo' => "https://hackr.io/tutorials/devops/logo-devops.svg?ver=1584099883",
            'channel_id' => Channel::where('title', 'DevOps')->first()->id,
        ]);

        Category::create([
            'name' => 'Game Design',
            'slug' => Str::slug('learn game design', '-'),
            'logo' => "https://hackr.io/tutorials/game-design/logo-game-design.svg?ver=1587724643",
            'channel_id' => Channel::where('title', 'Design')->first()->id,
        ]);

        Category::create([
            'name' => 'Photoshop',
            'slug' => Str::slug('learn photoshop', '-'),
            'logo' => "https://hackr.io/tutorials/photoshop/logo-photoshop.svg?ver=1588061585",
            'channel_id' => Channel::where('title', 'Design')->first()->id,
        ]);

        Category::create([
            'name' => 'Illustrator',
            'slug' => Str::slug('learn illustrator', '-'),
            'logo' => "https://hackr.io/tutorials/adobe-illustrator/logo-adobe-illustrator.svg?ver=1550076656",
            'channel_id' => Channel::where('title', 'Design')->first()->id,
        ]);

    }
}