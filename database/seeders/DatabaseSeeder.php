<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Aluno;
use App\Models\Classe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'example@email.com',
            'password' => Hash::make('secret')
        ]);

        $classes = [
            "primeira classe",
            "segunda classe",
            "terceira classe" ,
            "quarta classe"];
        foreach($classes as $classe){
            Classe::factory()->create([
                'name' => $classe
            ]);
        }

        Aluno::factory(100)->create();
    }
}
