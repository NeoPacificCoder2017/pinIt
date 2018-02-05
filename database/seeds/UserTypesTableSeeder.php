<?php

use App\UserType;
use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::create(['title' => 'admin']);
            
        UserType::create(['title' => 'guess']);
    }
}
