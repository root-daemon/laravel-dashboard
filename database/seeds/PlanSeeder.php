<?php

use Illuminate\Database\Seeder;
use App\Plan;
use Carbon\Carbon;
class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::create([
            'name'=>'test_plan_name',
            'start'=>Carbon::parse('2020-04-01 07:56:40'),
            'end'=>Carbon::parse('2020-04-30'),
            'validity'=>296,
            'type'=>'=SMS-CALL',
            'data_limit'=>1.5,
            'bandwith'=>'4G',
            'status'=>'current',
            'pricing'=>500,
            'operator'=>'JIO'
            ]);
    }
}

