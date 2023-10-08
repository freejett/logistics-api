<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $warehouse = [[
            'title' => 'Склад 1',
        ], [
            'title' => 'Склад 2',
        ]];

        Warehouse::insert($warehouse);
    }
}
