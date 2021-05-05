<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $working_date = ['2021/04/01', '2021/04/15', '2021/04/30'];

        foreach ($working_date as $day) {
            DB::table('attendaces')->insert([
                'attendances_id' => substr(bin2hex(random_bytes(16)), 0, 16),
                'working_date' => $day,
                'working_time' => 6,
                'travel_cost' => 620,
                'houlry_wage' => 950,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
