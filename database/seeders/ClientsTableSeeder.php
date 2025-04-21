<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create(); 

        // Créer plusieurs enregistrements
        for($i = 0; $i < 20; $i++) {
            DB::table("clients")->insert([ 
                "npr" => $faker->name(), 
                "adresse" => $faker->address, 
                "email" => $faker->unique()->safeEmail, 
            ]);
        }
    }
}
