<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([


                //the manager
            [
                'name'=>'isiaka ibrahim ',
                'email'=>'isiaka@gmail.com',
                'password'=>Hash::make('password'),
                'phone'=>'08135363013',
                'address'=>'Futa South gate Akure',
            ],
                //the agent 
            [
                'name'=>'tijani bafana',
                'email'=>'bafamoney@gmail.com',
                'password'=>Hash::make('password'),
                'phone'=>'08180842000',
                'address'=>'Futa South why me lodge',
            ],
                //the agent 2
            [
                'name'=>'omolade samuel bose ',
                'email'=>'samuelbose@gmail.com',
                'password'=>Hash::make('password'),
                'phone'=>'08135363013',
                'address'=>'Futa South gate Akure',
            ],
  
        ]);
    }
}
