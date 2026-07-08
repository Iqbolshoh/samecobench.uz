<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Statistics;

class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statistics::create([
            'icon' => 'bi bi-emoji-smile',
            'count' => 50,
            'title' => 'Happy Clients',
            'description' => 'Our success is measured by our clients\' satisfaction.',
        ]);

        Statistics::create([
            'icon' => 'bi bi-journal-richtext',
            'count' => 30,
            'title' => 'Projects',
            'description' => 'Our creativity and innovation in action.',
        ]);

        Statistics::create([
            'icon' => 'bi bi-headset',
            'count' => 1453,
            'title' => 'Support Hours',
            'description' => 'We are always available to help our clients.',
        ]);

        Statistics::create([
            'icon' => 'bi bi-people',
            'count' => 15,
            'title' => 'Dedicated Team',
            'description' => 'Our dedicated team makes it all happen.',
        ]);
        
        $this->command->info('Statistics seeded successfully!');
    }
}
