<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for($i = 0; $i < 50;$i++){
            $new_comic = new Comic;

            $new_comic -> title = $faker->name();
            $new_comic -> description = $faker->text(100);
            $new_comic -> genre = $faker->word();
            $new_comic -> company = $faker->company();
            $new_comic -> price = $faker->randomNumber(2);

            $new_comic->save();

        }
    }
}
