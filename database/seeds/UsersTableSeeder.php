<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$nbnR/3u/7YYSLqe7TKew0OvZYPVwF4FojIiWoX.nITqTD2u8kyx/a',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
