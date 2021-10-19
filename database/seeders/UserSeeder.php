<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_list = [
            ['fullname' => 'John Cena', 
            'gender' => 'Male',
            'address' => 'Somewhere in US',
            'email' => 'j_c@gmail.com',
            'password' => '12345'],
            ['fullname' => 'Hillary Clinton', 
            'gender' => 'Female',
            'address' => 'Also in US of course',
            'email' => 'hillary_c@gmail.com',
            'password' => 'qwerty'],
            ['fullname' => 'Omega', 
            'gender' => 'Female',
            'address' => 'Somewhere watching the universe',
            'email' => 'omega@gmail.com',
            'password' => 'omega3',
            'role' => 1]
        ];

        foreach ($data_list as $data) {
            User::create($data);
        }
    }
}
