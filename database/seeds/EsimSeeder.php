<?php

use Illuminate\Database\Seeder;
use App\Esim;
class EsimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Esim::create([
            'msisiidn'=>'123456789',
            'iccid1'=>'0000047',
            'iccid2'=>'0000045',
            'status'=>'active',
            'device_id'=> '1'
        ]);
    }
}
