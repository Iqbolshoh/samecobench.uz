<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        $messages = [
            [
                'sender_name' => 'Iqbolshoh',
                'sender_email' => 'iqbolshoh@gmail.com',
                'subject' => 'Hello!',
                'body' => 'I have a question about Laravel.',
                'status' => 'read',
            ],
            [
                'sender_name' => 'Ahmad',
                'sender_email' => 'ahmad@gmail.com',
                'subject' => 'Feedback',
                'body' => 'Your website looks amazing!',
                'status' => 'read',
            ],
            [
                'sender_name' => 'Sara',
                'sender_email' => 'sara@mail.com',
                'subject' => 'Partnership',
                'body' => 'I would like to collaborate.',
                'status' => 'read',
            ],
            [
                'sender_name' => 'John',
                'sender_email' => 'john@example.com',
                'subject' => 'Project',
                'body' => 'Your portfolio is very impressive.',
                'status' => 'read',
            ],
            [
                'sender_name' => 'Zarina',
                'sender_email' => 'zarina@yahoo.com',
                'subject' => 'Need Help',
                'body' => 'I am running into an error with the Filament forms.',
                'status' => 'unread',
            ],
            [
                'sender_name' => 'Karim',
                'sender_email' => 'karim@domain.com',
                'subject' => 'Bug Report',
                'body' => 'There is a bug on the website.',
                'status' => 'unread',
            ],
            [
                'sender_name' => 'Ali',
                'sender_email' => 'ali@ali.com',
                'subject' => 'Question',
                'body' => 'Could you write about NGINX configuration, please?',
                'status' => 'unread',
            ],
        ];        

        collect($messages)->each(function ($message) {
            Message::create($message);
        });

        $this->command->info('All messages seeded successfully!');
    }
}
