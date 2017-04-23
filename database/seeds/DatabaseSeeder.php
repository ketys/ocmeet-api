<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(VotingCategorySeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(CarSeeder::class);
    }
}
