<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class blogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$faker=Faker::create('id_ID');
for ($i=0; $i < 30; $i++) { 
    \DB::table('blogs')->insert([
        'image'=>$faker->image,
        'title'=> $faker->title,
        'content'=> $faker->address
    ]);
}
        // \DB::table('blogs')->insert([
        //     'image'=>'',
        //     'title'=>'title1',
        //     'content'=>'content1'
        // ]);

     
        // $blog = new \App\Models\Blog();
        // $blog->image = "";
        // $blog->title = "seed";
        // $blog->content = "seed content";
        // $blog->save();
    }
}
