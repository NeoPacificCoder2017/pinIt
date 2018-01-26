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

        $this->call(UsersTableSeeder::class);
        $this->command->info('users table seeded');
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->command->info("Categories Seeder GOOD");
        $this->call(LinksTableSeeder::class);
        $this->command->info('Seeder Links GOOD');
        $this->call(UserTypesTableSeeder::class);
        $this->command->info('user_types table seeded');
    }
}
