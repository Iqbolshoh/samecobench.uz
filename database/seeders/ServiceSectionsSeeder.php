<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceSection;

class ServiceSectionsSeeder extends Seeder
{
    public function run()
    {
        ServiceSection::create([
            'title' => 'Our Services',
            'text_1' => 'Our experience and skills are tailored to deliver the best service experience. Our offerings are designed to provide you with high-quality, fast solutions.',
            'image' => 'services-images/01JTW56PWQ74AGDHFZTV4Y1V9E.jpg',
            'sub_title' => 'Our Product Development and Delivery Approach',
            'text_2' => 'We embrace modern technologies in product development and always strive to deliver the latest innovations.',
        ]);

        $this->command->info('Service Sections seeded successfully!');
    }
}
