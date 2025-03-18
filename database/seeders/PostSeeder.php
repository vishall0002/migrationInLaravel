<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Post::insert([
            [
                'name' => 'First Post',
                'content' => 'This is the first post content.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Second Post',
                'content' => 'This is the second post content.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        
    }
}
