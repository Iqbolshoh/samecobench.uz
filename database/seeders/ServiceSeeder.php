<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $services = [
            [
                'title' => 'Our Services',
                'description' => 'We provide personalized solutions tailored to every client.',
                'icon' => 'bi bi-activity',
            ],
            [
                'title' => 'Custom Solutions',
                'description' => 'Our services deliver unique solutions tailored to every client\'s needs.',
                'icon' => 'bi bi-broadcast',
            ],
            [
                'title' => 'Innovative Approaches',
                'description' => 'We solve your challenges with innovative methods and strategies.',
                'icon' => 'bi bi-easel',
            ],
            [
                'title' => 'Fast and Efficient Services',
                'description' => 'We deliver fast, efficient services with a strong focus on quality.',
                'icon' => 'bi bi-bounding-box-circles',
            ],
            [
                'title' => 'Expert Consultation',
                'description' => 'Our experts provide top-tier guidance to help you grow.',
                'icon' => 'bi bi-calendar4-week',
            ],
            [
                'title' => 'Client Communication',
                'description' => 'We maintain open, friendly communication with our clients. We are always listening.',
                'icon' => 'bi bi-chat-square-text',
            ],
        ];        

        foreach ($services as $service) {
            Service::create($service);
        }

        $this->command->info('Services seeded successfully!');
    }
}
