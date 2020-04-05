<?php

use Illuminate\Database\Seeder;
use App\Client;
class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'name' => 'testclient',
            'email'=>'test2@gmail.com',
            'client_id'=> 111111,
            'number'=>'1212121212',
            'contact_number'=>'9999999991',
            'contact_person'=>'contactperson1',
            'designation' => 'designation1',
            'street'=>'street1',
            'city'=>'city1',
            'state'=>'state1',
            'zipcode'=>121212,
            'country'=>'India',
            'password'=> Hash::make('password')
        ]);
    }
}
