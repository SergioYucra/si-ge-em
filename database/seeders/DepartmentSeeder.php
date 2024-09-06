<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'name' => 'Administración' ,
        ]);
        Department::create([
            'name' => 'Producción' ,
        ]);
        Department::create([
            'name' => 'Soporte Técnico' ,
        ]);
        Department::create([
            'name' => 'Desarrollo de Productos' ,
        ]);
        Department::create([
            'name' => 'RRHH' ,
        ]);

        Department::factory(45)->create();
    }
}
