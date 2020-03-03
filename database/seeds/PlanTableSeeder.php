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
            'user_client_id'=>12121212,
            'activated_date'=>Carbon::parse('2020-3-3'),
            'deactivated_date'=>Carbon::parse('2020-3-7'),

        ]);
        CurrentPlans::create([
            'user_client_id'=>12121212,
            'activated_date'=>Carbon::parse('2020-3-4'),
            'deactivated_date'=>Carbon::parse('2020-3-4'),

        ]);
    }
}
