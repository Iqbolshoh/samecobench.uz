<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banners = [
            [
                'image' => 'banner-images/01JTW42CNXV32HHWR0N357QHRB.jpg',
                'title' => 'Welcome to Sam Ecobench',
                'description' => 'Our company delivers high-quality services, innovative solutions, and professionalism. We always strive to create the best for you.',
                'button_text' => 'Get Started',
                'button_link' => '/about',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'banner-images/01JTW45HB9P8TT6PE97Z3REX2Y.jpg',
                'title' => 'We stand for fairness and reliability',
                'description' => 'We always strive to give our clients the best possible service. Every project is important to us and becomes a memorable experience.',
                'button_text' => 'Get Started',
                'button_link' => '/about',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'banner-images/01JTW478VEE3TCW5MHWZ7T8A77.jpg',
                'title' => 'Grow with us',
                'description' => 'Quality service, openness to innovation, and honesty — these are our core values. Let\'s step into the future together.',
                'button_text' => 'Get Started',
                'button_link' => '/about',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];        

        collect($banners)->each(function ($banner) {
            Banner::create($banner);
        });

        $this->command->info('Banners seeded successfully!');
    }
}
