<?php

namespace Database\Seeders;

use App\Models\CompanyPlan;
use Illuminate\Database\Seeder;

class CompanyPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            ['name' => 'Pacote Gratuito' , 'price' => 00.0 , 'quantity' => 30, 'type' => 1],
            ['name' => 'Pacote Básico' , 'price' => 69.90 , 'quantity' => 10, 'type' => 2],
            ['name' => 'Pacote Premium' , 'price' => 99.90 , 'quantity' => 30, 'type' => 2]
        ];

        CompanyPlan::insert($plans);
    }
}
