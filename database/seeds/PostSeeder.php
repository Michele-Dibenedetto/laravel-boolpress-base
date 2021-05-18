<?php

use Illuminate\Database\Seeder;

use App\Post;

use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<4; $i++) {
            $newPost = new Post;
            $newPost->nome = $faker->name();
            $newPost->data_publicazione = $faker->date();
            $newPost->immagine_profilo = $faker->imageUrl(640, 480);
            $newPost->testo = $faker->text();
            $newPost->save();
        }
    }
}
