<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutItem;

class AboutItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            'We deliver high-quality services tailored to every client\'s needs.',
            'We develop innovative solutions using modern technologies.',
            'We take a personal approach to every project and bring creative ideas to the table.',
            'Our experienced specialists are ready to solve any challenge.',
            'Our support team is always ready to help our clients.',
            'We raise service quality through innovative approaches.',
            'We create custom strategies for every unique project.',
            'We help our clients unlock new opportunities.',
        ];

        foreach ($items as $item) {
            AboutItem::create([
                'about_id' => 1,
                'bullet_point' => $item,
            ]);
        }

        $this->command->info('About items seeded successfully!');
    }
}
