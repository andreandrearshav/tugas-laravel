<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'operator',
                'email' => 'operator@gmail.com',
                'role' => 'operator',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'keuangan',
                'email' => 'keuangan@gmail.com',
                'role' => 'keuangan',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'marketing',
                'email' => 'marketing@gmail.com',
                'role' => 'marketing',
                'password' => bcrypt('123'),
            ],
        ];
        foreach($userData as $key=>$val)
        {
            User::create($val);
        }

    }
}
