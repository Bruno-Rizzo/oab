<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['name' => 'Diretor']);
        Role::create(['name' => 'Subdiretor']);
        Role::create(['name' => 'Chefe de Segurança']);
        Role::create(['name' => 'Controle de Portaria']);
    }
}
