<?php

namespace Database\Seeders;

use App\Models\Colour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colours = [[
            'title' => 'Красный',
        ], [
            'title' => 'Синий',
        ], [
            'title' => 'Желтый',
        ], [
            'title' => 'Зеленый',
        ], [
            'title' => 'Белый',
        ]];

        Colour::insert($colours);
    }
}
