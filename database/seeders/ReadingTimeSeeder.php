<?php

namespace Database\Seeders;

use App\Models\ReadingTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReadingTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrs = ['Long Reads', 'Medium Reads', 'Quick Reads'];
        $detail = ['20 minutes', '10 minutes', '5 minutes'];

        for ($i = 0; $i < count($arrs); $i++) {
            ReadingTime::create([
                'read_time' => $arrs[$i],
                'durations' => $detail[$i]
            ]);
        }
    }
}
