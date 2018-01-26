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
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->command->info("Categories Seeder GOOD");
=======
        $this->call(LinksTableSeeder::class);
        $this->command->info('Seeder Links GOOD');
>>>>>>> links_entity
    }
}
