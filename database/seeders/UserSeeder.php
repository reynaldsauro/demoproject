<?php

namespace Database\Seeders;
use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $users = [
            [
                'name' => 'Reynald Sauro',
                'email' => 'naldsauro@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('sauro123')
            ],
            [
                'name' => 'Kim Vincent Cucharo',
                'email' => 'teodorocucharo@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('mushroomking123')
            ],
            [
                'name' => 'Ryan Patayon',
                'email' => 'rypatayon@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('cecilyan143')
            ],

        ];
        foreach($users as $user){
            User::create($user);

        }
    }
}
