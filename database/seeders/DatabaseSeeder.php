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
        \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Guilherme',
        //     'lastname' => 'Miranda',
        //     'email' => 'admin@email.com',
        //     'password' => '12345678',
        //     'user_role' => 'Medic',
        // ]);

        \App\Models\Patients::factory(2000)->create();

        // \App\Models\Patients::factory()->create([
        //     'name' => 'Drauzio',
        //     'lastname' => 'Almeida',
        //     'document' => '12892312323',
        //     'smoker' => false,
        //     'allergies' => false,
        //     'diabetic' => false,
        //     'high_pressure' => false,
        //     'dsts' => false,
        //     'more_information' => null,
        // ]);
    }
}
