<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
              'name' => 'Kaique Godoi',
              'email' => 'kaique@gmail.com',
              'password' => bcrypt('123456')
            ],
            [
               'name' => 'Raphael Godoi',
               'email' => 'raphael@gmail.com',
               'password' => bcrypt('123456')
            ],
        ];

        User::insert($users);


    }
}
