<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'username' => env('DUSER_USERNAME'),
        'email' => env('DUSER_EMAILADD'),
        'password' => bcrypt(env('DUSER_PASSWORD')),
      ]);
    }
}
