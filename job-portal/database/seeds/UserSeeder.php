<?php
use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            [
                'user_type' => 1,  // 1 Job seeker
                'first_name' => 'abc',
                'last_name' => 'abc',
                'phone' => 97279902406,
                'email'     => 'darpan@gmail.com',
                'password'  => bcrypt('abc@123'),
                'confirmpass' => bcrypt('abc@123'),
                'checked' => 1,
            ],
            [
                'user_type' => 2,  // 2 Recruiter
                'first_name' => 'xyz',
                'last_name' => 'xyz',
                'phone' => 97279902406,
                'email'     => 'xyz@gmail.com',
                'password'  => bcrypt('xyz@123'),
                'confirmpass' => bcrypt('xyz@123'),
                'checked' => 1,
            ],
            [

                'user_type' => 3, // 3 freelencer
                'first_name' => 'pqr',
                'last_name' => 'pqr',
                'phone' => 97279902406,
                'email'     => 'pqr@gmail.com',
                'password'  => bcrypt('pqr@123'),
                'confirmpass' => bcrypt('pqr@123'),
                'checked' => 1,
            ],

        ]);

    }

}
