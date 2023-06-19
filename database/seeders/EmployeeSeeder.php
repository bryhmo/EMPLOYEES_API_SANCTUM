<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([


            //the manager 
            [
                'name'=>'isiaka ibrahim ',
                'email'=>'isiaka@gmail.com',
                'password'=>Hash::make('password'),
                'phone'=>'08135363013',
                'address'=>'Futa South gate Akure',
                'role'=>'coordinator',
                'status'=>'Excellent',
            ],

            //the agent
            [
                'name'=>'tijani bafana',
                'email'=>'bafamoney@gmail.com',
                'password'=>Hash::make('password'),
                'phone'=>'08180842000',
                'address'=>'Futa South why me lodge',
                'role'=>'coordinator',
                'status'=>'Very Good',
            ],

            //the User

            [
                'name'=>'omolade samuel bose ',
                'email'=>'samuelbose@gmail.com',
                'password'=>Hash::make('password'),
                'phone'=>'08135363013',
                'address'=>'Futa South gate Akure',
                'role'=>'coordinator',
                'status'=>'Average',
            ],


        ]);

    }
}
