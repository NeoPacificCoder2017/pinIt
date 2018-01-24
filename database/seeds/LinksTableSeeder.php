<?php

use Illuminate\Database\Seeder;


class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = [];

        for($i = 0; $i < 10; $i++):
            $url = str_random(8);
            $title = str_random(12).'@ mail.com'; 
            $user_id = rand(1, 3);
            $picture = str_random(8); 
            $category_id = str_random(12);
        endfor;
    }
}
