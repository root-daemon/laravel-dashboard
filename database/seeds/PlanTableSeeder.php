<?php

use Illuminate\Database\Seeder;
use App\CurrentPlans;
//use App\User;
use Carbon\Carbon;
class PlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CurrentPlans::create([
            'user_id'=>1,
            'activated_date'=>Carbon::parse('2020-3-2'),
            'deactivated_date'=>Carbon::parse('2020-3-2'),

        ]);
    }
}
