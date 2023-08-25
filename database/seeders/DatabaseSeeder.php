<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $amdin1 = new \App\Models\User(
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
            ]
        );

        $amdin1->password = bcrypt('admin');
        $amdin1->save();
        $user1 = new \App\Models\User(
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'role' => 'user',
            ]
        );

        $user1->password = bcrypt('user');
        $user1->save();
        
    }
}
