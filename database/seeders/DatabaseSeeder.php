<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            PrisionalUnitSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            AssignPermissionsSeeder::class,
            AuxiliarySeeder::class
        ]);
    }
}
