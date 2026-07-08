<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        $features = [
            [
                'icon_class' => 'bi bi-bounding-box-circles',
                'title' => 'Innovative Solutions',
                'description' => 'Our innovative solutions are designed to transform your life and your business.',
            ],
            [
                'icon_class' => 'bi bi-calendar4-week',
                'title' => 'Free Consultations',
                'description' => 'Get free expert advice from our team and grow faster.',
            ],
            [
                'icon_class' => 'bi bi-broadcast',
                'title' => 'Strong Network',
                'description' => 'Gain access to unlimited opportunities through our strong network.',
            ],
        ];        

        collect($features)->each(fn($feature) => Feature::create($feature));

        $this->command->info('Features seeded successfully!');
    }
}
