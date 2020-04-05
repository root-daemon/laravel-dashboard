<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ClientTableSeeder::class);
        $this->call(DeviceSeeder::class);
        $this->call(EsimSeeder::class);
        $this->call(OwnerSeeder::class);
        $this->call(PlanSeeder::class);
    }
}
