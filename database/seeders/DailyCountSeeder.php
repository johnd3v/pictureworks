<?php

namespace Database\Seeders;

use App\Models\DailyCount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DailyCountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dates = ['2022-12-12','2022-12-13','2022-12-14','2022-12-15','2022-12-16'];

        foreach($dates as $date){
            DailyCount::create([
                'count' => rand(2,50),
                'date' => $date
            ]);
        }
    }
}
