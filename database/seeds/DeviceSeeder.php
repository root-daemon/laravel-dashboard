<?php

use Illuminate\Database\Seeder;
use App\Device;
class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Device::create([
            'owner_id'=>1,
            'name'=>'Macbook',
            'imei1' => '121212',
            'imei2' => '141414',
            'status'=>'upcoming',
            'invoice_id'=>909090,
            'lot_id'=>0215621,
            'current_location'=>'India'
        ]);
    }
}
