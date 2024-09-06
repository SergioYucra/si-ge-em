<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'name' => 'Sergio' ,
            'lastname' => 'Yucra',
            'ci' => '8411828',
            'email' => 'sergio22yucra@gmail.com',
            'address' => 'Pampahasi Av. circunvalacion',
            'department_id' => 4,
        ]);

        Employee::factory(49)->create();
    }
}
