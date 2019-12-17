<?php

use Illuminate\Database\Seeder;
use App\Performance;

class PerformancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('performances')->delete();
        $json= File::get('database/data/performances.json');
        $data=json_decode($json);
        foreach ($data as $obj) {
            Performance::create(array(
                'stage_id' =>$obj->stage_id,
                'artist_id' =>$obj->artist_id,
                'timedate' =>$obj->timedate,
                'duration' =>$obj->duration
            ));
        }
    }
}
