<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        User::create([
            "name"=> "kadu",
            "email" => "kadu@gmail.com",
            "password" => Hash::make('123456789'),
        ]);
        User::create([
            "name"=> "kadu2",
            "email" => "kadu2@gmail.com",
            "password" => Hash::make('123456789'),
        ]);
        User::create([
            "name"=> "kadu3",
            "email" => "kadu3@gmail.com",
            "password" => Hash::make('123456789'),
        ]);
        User::create([
            "name"=> "kadu4",
            "email" => "kadu4@gmail.com",
            "password" => Hash::make('123456789'),
        ]);
        User::create([
            "name"=> "kadu5",
            "email" => "kadu5@gmail.com",
            "password" => Hash::make('123456789'),
        ]);
        User::create([
            "name"=> "kadu6",
            "email" => "kadu6@gmail.com",
            "password" => Hash::make('123456789'),
        ]);
        User::create([
            "name"=> "kadu7",
            "email" => "kadu7@gmail.com",
            "password" => Hash::make('123456789'),
        ]);
    }
}
