<?php

namespace Database\Seeders;

use App\Models\CandidatePlan;
use Illuminate\Database\Seeder;

class PlanCandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            ['name' => 'Plano 1' , 'price' => 10.0 , 'days' => 30, 'recurrence' => 'Mensal'],
            ['name' => 'Plano 2' , 'price' => 20.0 , 'days' => 60, 'recurrence' => 'Trimestral'],
            ['name' => 'Plano 3' , 'price' => 30.0 , 'days' => 120, 'recurrence' => 'Semestral']
        ];

        CandidatePlan::insert($plans);
    }
}
