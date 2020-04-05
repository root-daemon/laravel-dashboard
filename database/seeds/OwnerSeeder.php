<?php

use Illuminate\Database\Seeder;
use App\Owner;
class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::create([
        'contact_person'=>'Can_t find a better Name',
            'client_client_id'=>111111,
            'desingnation'=>'CEO',
            'contact_number'=>'9766818892',
            'street'=>'Washington Street',
            'city'=> 'Wasingtion City',
            'state'=>'Washington',
            'zipcode'=> 6000028,
            'country'=> 'USA'
        ]);
    }
}
