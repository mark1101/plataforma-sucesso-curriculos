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
            ['name' => 'Plano Mensal' , 'price' => 15.90 , 'days' => 30, 'recurrence' => 'Mensal'],
            ['name' => 'Plano Trimestral' , 'price' => 12.90 , 'days' => 90, 'recurrence' => 'Trimestral'],
            ['name' => 'Plano Semestral' , 'price' => 9.90 , 'days' => 180, 'recurrence' => 'Semestral']
        ];

        CandidatePlan::insert($plans);
    }
}
