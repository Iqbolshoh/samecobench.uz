<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsList = [
            [
                'title' => 'Laravel Master: Iqbolshoh\'s Blade Conversion Project',
                'description' => 'Iqbolshoh is converting legacy PHP websites into modern Laravel Blade applications, making the code cleaner, faster, and easier to maintain. His work is gaining popularity among the developer community.',
                'image' => 'news-images/01JV1F1WJ31QJH3XCCY9ZEK3T6.jpg',
                'views' => 453,
            ],
            [
                'title' => 'Iqbolshoh Ilhomjonov Launches the e-kurs.uz Platform',
                'description' => 'Iqbolshoh, a young and ambitious full-stack developer from Samarkand, has officially announced the launch of e-kurs.uz — an educational platform for teaching C++, Laravel, and modern web technologies!',
                'image' => 'news-images/01JV08YNT4SKC4ZJR4RMPBEVM7.jpg',
                'views' => 570,
            ],
            [
                'title' => 'From Student to Mentor: Iqbolshoh Inspires 50+ Learners',
                'description' => 'Driven by a passion for coding and teaching, Iqbolshoh now mentors more than 50 students in C++ and web development. His hands-on approach and real-world projects have made him a local tech icon.',
                'image' => 'news-images/01JV08Z9CPYFHWM6W2YCB7VR8V.jpg',
                'views' => 720,
            ],
            [
                'title' => 'Tech Visionary Iqbolshoh Builds His Own Web Server',
                'description' => 'Using NGINX and Linux, Iqbolshoh turned his own computer into a full web server and set up his own domain, test.iqbolshoh.uz. He is now hosting applications professionally!',
                'image' => 'news-images/01JV092NGPX2JDHNTQX78KFM7F.jpg',
                'views' => 777,
            ],
        ];

        collect($newsList)->each(function ($news) {
            News::create($news);
        });

        $this->command->info(string: 'News data seeded successfully!');
    }
}
