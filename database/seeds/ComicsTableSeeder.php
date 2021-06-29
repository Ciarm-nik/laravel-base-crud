<?php

use App\comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $comicList= config("comics");

        foreach ($comicList as $comic) {
            $newEntry = new Comic();

            $newEntry->fill($comic);
            $newEntry->save();
        }
    }
}
