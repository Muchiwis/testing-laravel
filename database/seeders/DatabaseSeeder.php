<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Curso;
use App\Models\Profesor;
use App\Models\Profesores;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            //User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
            Profesor::factory(60)->create();
            
            //el $this->call es para ejecutar el seeder craedo en un nuevo archhivo seeder
        
        // $this->call([
        //     ProfesorSeeder::class,
        // ]);
    }
}
