<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\VotingCategory;

class VotingCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voting_categories')->delete();

        VotingCategory::create([
            'name' => 'mk1'
        ]);

        VotingCategory::create([
            'name' => 'mk2'
        ]);

        VotingCategory::create([
            'name' => 'mk3'
        ]);
    }
}
