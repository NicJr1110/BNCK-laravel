<?php

use Illuminate\Database\Seeder;
use App\Stage;

class StagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stages')->delete();
        $json= File::get('database/data/stages.json');
        $data=json_decode($json);
        foreach ($data as $obj) {
            Stage::create(array(
                'name' =>$obj->name
            ));
        }
    }   
}
