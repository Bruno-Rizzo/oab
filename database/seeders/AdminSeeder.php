<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\PrisionalUnit;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'              => 'Bruno Rizzo',
            'email'             => '50008382@pp.rj',
            'identify'          => '50008382',
            'password'          => bcrypt('password'),
            'role_id'           => Role::create(['name' => 'Administrador'])->id,
            'prisional_unit_id' => PrisionalUnit::create(['name' => 'Desenvolvimento', 'acronym' => 'SEAPSTI'])->id,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
    }
}
