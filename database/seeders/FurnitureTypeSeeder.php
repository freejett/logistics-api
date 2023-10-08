<?php

namespace Database\Seeders;

use App\Models\FurnitureType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FurnitureTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $furnitureType = [[
            'title' => 'Стул',
        ], [
            'title' => 'Стол',
        ], [
            'title' => 'Кресло',
        ]];

        FurnitureType::insert($furnitureType);
    }
}
