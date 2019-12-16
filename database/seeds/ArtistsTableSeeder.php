<?php

use Illuminate\Database\Seeder;
use App\Artists;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->delete();
        $json= File::get('database/data/artists.json');
        $data=json_decode($json);
        foreach ($data as $obj) {
            Artists::create(array(
                'name' =>$obj->name,
                'bio' =>$obj->bio,
                'image' =>$obj->image
            ));
        }
    }
}
