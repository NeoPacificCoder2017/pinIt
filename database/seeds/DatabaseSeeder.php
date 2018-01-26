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
<<<<<<< HEAD
        $this->call(UsersTableSeeder::class);
        $this->command->info('users table seeded');
=======
<<<<<<< HEAD
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->command->info("Categories Seeder GOOD");
=======
        $this->call(LinksTableSeeder::class);
        $this->command->info('Seeder Links GOOD');
>>>>>>> links_entity
>>>>>>> 55e7bd583d1076e583f0a3d61e3a4e08e0ba55c8
    }
}
