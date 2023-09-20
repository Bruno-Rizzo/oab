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
            'name'              => 'José Carlos',  // Diretor Cotrin Neto
            'email'             => '12345678@pp.rj',
            'password'          => bcrypt('password'),
            'role_id'           => 2,
            'prisional_unit_id' => 2,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Mauricio Duarte',  // Subdiretor Cotrin Neto
            'email'             => '876543218@pp.rj',
            'password'          => bcrypt('password'),
            'role_id'           => 3,
            'prisional_unit_id' => 2,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Diego Alcântara',  // Chefe de Segurança Cotrin Neto
            'email'             => '24681012@pp.rj',
            'password'          => bcrypt('password'),
            'role_id'           => 4,
            'prisional_unit_id' => 2,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Ana Maria',  // Controle de Portaria Cotrin Neto
            'email'             => '35791113@pp.rj',
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
            'password'          => bcrypt('password'),
            'role_id'           => 3,
            'prisional_unit_id' => 6,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Rodrigo Almeida',  // Chefe de Segurança Helio Gomes
            'email'             => '43211234@pp.rj',
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
            'password'          => bcrypt('password'),
            'role_id'           => 5,
            'prisional_unit_id' => 10,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
    }
}
