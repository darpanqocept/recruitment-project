<?php

use Illuminate\Database\Seeder;
use App\Models\UserType;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usertype')->insert([
            [
                'name' => 'Job seeker',
            ],
            [
                'name' => 'Recruiter',
            ],
            [
                'name' => 'Freelencer',
            ]
        ]);
    }

}
