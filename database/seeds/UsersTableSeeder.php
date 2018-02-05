<?php

use App\User;
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
        factory(App\User::class, 50)->create();

        User::create([
            'last_name' => 'tuhiti',
            'first_name' => 'christopher',
            'email' => 'ctuhiti@gmail.com',
            'password' => 'tahiti2017',
            'user_type_id' => 1,
            'remember_token' => str_random(10),
            ]);
    }
}
