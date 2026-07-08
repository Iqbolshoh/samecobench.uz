<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        About::create([
            'title' => 'Our Services',
            'text_1' => "We are ready to offer innovative architectural projects and unique solutions using renewable energy sources such as solar panels, wind turbines, and small hydroelectric plants. Our team always strives to achieve the best results. We continuously grow our expertise to offer our clients the most effective solutions.",
            'text_2' => "Building long-term, trustworthy relationships with our clients is our top priority.",
            'image' => 'about-images/01JTW4V2P04DS50V40QB4F845Z.jpg',
        ]);

        $this->command->info('About section seeded successfully!');
    }
}
