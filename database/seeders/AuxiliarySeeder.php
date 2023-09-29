<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AuxiliarySeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'              => 'José Carlos',  // Diretor Constantino Cokotós
            'email'             => '12345678@pp.rj',
            'identify'          => '12345678',
            'password'          => bcrypt('password'),
            'role_id'           => 2,
            'prisional_unit_id' => 2,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Mauricio Duarte',  // Subdiretor Constantino Cokotós
            'email'             => '87654321@pp.rj',
            'identify'          => '87654321',
            'password'          => bcrypt('password'),
            'role_id'           => 3,
            'prisional_unit_id' => 2,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Diego Alcântara',  // Chefe de Segurança Constantino Cokotós
            'email'             => '24681012@pp.rj',
            'identify'          => '24681012',
            'password'          => bcrypt('password'),
            'role_id'           => 4,
            'prisional_unit_id' => 2,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Ana Maria',  // Controle de Portaria Constantino Cokotós
            'email'             => '35791113@pp.rj',
            'identify'          => '35791113',
            'password'          => bcrypt('password'),
            'role_id'           => 5,
            'prisional_unit_id' => 2,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Flávio Rangel',  // Diretor Helio Gomes
            'email'             => '12348765@pp.rj',
            'identify'          => '12348765',
            'password'          => bcrypt('password'),
            'role_id'           => 2,
            'prisional_unit_id' => 6,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Rodrigo Almeida',  // Subdiretor Helio Gomes
            'email'             => '87651234@pp.rj',
            'identify'          => '87651234',
            'password'          => bcrypt('password'),
            'role_id'           => 3,
            'prisional_unit_id' => 6,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Márcio Botelho',  // Chefe de Segurança Helio Gomes
            'email'             => '43211234@pp.rj',
            'identify'          => '43211234',
            'password'          => bcrypt('password'),
            'role_id'           => 4,
            'prisional_unit_id' => 6,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Débora Martins',  // Controle de Portaria Helio Gomes
            'email'             => '43218765@pp.rj',
            'identify'          => '43218765',
            'password'          => bcrypt('password'),
            'role_id'           => 5,
            'prisional_unit_id' => 6,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Marcelo Ferreira',  // Diretor Jorge Santana
            'email'             => '50007385@pp.rj',
            'identify'          => '50007385',
            'password'          => bcrypt('password'),
            'role_id'           => 2,
            'prisional_unit_id' => 10,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Paulo Vieira',  // Subdiretor Jorge Santana
            'email'             => '51120008@pp.rj',
            'identify'          => '51120008',
            'password'          => bcrypt('password'),
            'role_id'           => 3,
            'prisional_unit_id' => 10,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Fernando Araújo',  // Chefe de Segurança Jorge Santana
            'email'             => '51124321@pp.rj',
            'identify'          => '51124321',
            'password'          => bcrypt('password'),
            'role_id'           => 4,
            'prisional_unit_id' => 10,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Cristiane Lima',  // Controle de Portaria Jorge Santana
            'email'             => '43215112@pp.rj',
            'identify'          => '43215112',
            'password'          => bcrypt('password'),
            'role_id'           => 5,
            'prisional_unit_id' => 10,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
    }
}
