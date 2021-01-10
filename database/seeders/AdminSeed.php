<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try{
            \DB::table('admins')->insert([
                'name' => 'TrungPhuNA',
                'email' => 'phupt.humg.94@gmail.com',
                'phone' => '0986420994',
                'password' => \Hash::make('123456789')
            ]);
        }catch (\Exception $exception){
            \Log::error("[Seed Admin] ". $exception->getMessage());
        }

        try{
            \DB::table('admins')->insert([
                'name' => 'CodeThue',
                'email' => 'codethue94@gmail.com',
//                'phone' => '0986420994',
                'password' => \Hash::make('123456789')
            ]);
        }catch (\Exception $exception){
            Log::error("[Seed User] ". $exception->getMessage());
        }

    }
}
