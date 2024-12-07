<?php

namespace Database\Seeders;

use App\Models\Departmen;
use App\Models\Department;
use Illuminate\Container\Attributes\DB;
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
            'name' => 'Business and Corporate',
            'status' => '1',
        ]);
        Department::create([
            'name' => 'Constitutional',
            'status' => '1',
        ]);
        Department::create([
            'name' => 'Customs',
            'status' => '1',
        ]);
        Department::create([
            'name' => 'VAT and Income Tax',
            'status' => '1',
        ]);
        Department::create([
            'name' => 'Crime',
            'status' => '1',
        ]);
    }
}
