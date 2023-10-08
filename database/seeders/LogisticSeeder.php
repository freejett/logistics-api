<?php

namespace Database\Seeders;

use App\Models\Logistic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 2; $i <= 31; $i++) {
            Logistic::factory()->state(function ($item, $key) use ($i) {
                $departureDate = $i - 2;
                return [
                    'furniture_id' => rand(1,6),
                    'warehouse_id' => rand(1,2),
                    'arrival_date' => date('Y-m-d', strtotime("-$i days", strtotime("now"))),
                    'departure_date' => date('Y-m-d', strtotime("-$departureDate days", strtotime("now"))),
                ];
            })->create();
        }
    }
}
