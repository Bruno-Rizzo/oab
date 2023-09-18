<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{

    public function run(): void
    {
        Permission::create(['name' => 'usuario-cadastrar']);
        Permission::create(['name' => 'usuario-visualizar']);
        Permission::create(['name' => 'usuario-editar']);
        Permission::create(['name' => 'usuario-excluir']);
    }
}
