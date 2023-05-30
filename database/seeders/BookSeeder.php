<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");

        for($i = 0; $i < 15; $i++) {
            Book::create([
                'reading_time_id' => mt_rand(1, 3),
                'title' => $faker->sentence(3),
                'author' => $faker->name(),
                'description' => $faker->sentence(10),
                'views' => mt_rand(0, 10000),
                'body' => $faker->paragraph(100),
                'created' => $faker->date(),
                'photo' => 'https://picsum.photos/640/360'
            ]);
        }
    }
}
