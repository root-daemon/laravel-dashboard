<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'testuser1' ,
            'email' => 'testuser@gmail.com',
            'client_id'=> 12121212,
            'mobile_number'=> 9999999999,
            'imeinum'=>'123456789123456',
            'password'=> bcrypt('password')
        ]);
    }
}
