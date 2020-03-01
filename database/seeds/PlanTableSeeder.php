<?php

use Illuminate\Database\Seeder;
use App\CurrentPlans;
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
            'name' => 'testuser3',
            'email' => 'testuser3@gmail.com',
            'clien_id'=> 123123132,
            'mobile_number'=> 9999999999,
            'imeinum'=>'123456789123456',

        ]);
    }
}
