<?php

use Illuminate\Database\Seeder;
use App\Link;


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
            $title = str_random(12); 
            $user_id = rand(1, 15);
            $picture = str_random(8); 
            $category_id = rand(1,3);

            $links[] = [
                'url'=>$url,
                'title'=>$title,
                'user_id'=>$user_id,
                'picture'=>$picture,
                'category_id'=>$category_id
            ];
            
        endfor;

        foreach($links AS $link):
            Link::create($link);
        endforeach;
    }
}
