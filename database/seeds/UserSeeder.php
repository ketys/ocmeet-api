<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'nickname' => 'ketys',
            'email' => 'john.doe@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'member'
        ]);

        User::create([
            'nickname' => 'raymon',
            'email' => 'jane.doe@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'member'
        ]);

        User::create([
            'nickname' => 'kisap',
            'email' => 'jason@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'member'
        ]);

        User::create([
            'nickname' => 'monty',
            'email' => 'monty@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'member'
        ]);

        User::create([
            'nickname' => 'jack',
            'email' => 'jack@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'member'
        ]);

        User::create([
            'nickname' => 'tom',
            'email' => 'tom@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'member'
        ]);

        User::create([
            'nickname' => 'jerry',
            'email' => 'jerry@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'member'
        ]);

        User::create([
            'nickname' => 'lancelot',
            'email' => 'lancelot@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'member'
        ]);

        User::create([
            'nickname' => 'hanes',
            'email' => 'hanes@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'member'
        ]);

        User::create([
            'nickname' => 'lupino',
            'email' => 'lupino@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'member'
        ]);

    }
}
