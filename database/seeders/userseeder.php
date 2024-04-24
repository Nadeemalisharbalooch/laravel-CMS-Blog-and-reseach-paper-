<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'name'=>'nadeem',
            'email'=>'nadeem50@gmail.com',
            'password' => Hash::make('nadeem123'),
           'is_admin'=>1
        ]);
    }
}