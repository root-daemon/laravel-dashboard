<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Sri Vishal Sivasubramanian',
            'email' => 'ssrivishal06@gmail.com',
            'password' => bcrypt('password'),

        ]);
    }
}
