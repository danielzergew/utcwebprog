<?php

namespace Database\Seeders;

use App\Models\Author;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");

        for($i = 0; $i < 5; $i++) {
            Author::create([
                'name' => $faker->name()
            ]);
        }
    }
}
