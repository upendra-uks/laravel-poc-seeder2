<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Here is my code added to insert user data in user table
        DB::table('users')->insert([    

            'name' => 'upendra2',  
   
            'email' => 'upendra7july2@gmail.com',   
   
            'password' => Hash::make('password'),   
   
         ]);  
    }
}
