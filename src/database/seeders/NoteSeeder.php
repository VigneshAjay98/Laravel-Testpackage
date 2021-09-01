<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();
        // $slug = $faker->sentence;
        foreach(range(1,10) as $value){
            DB::table('notes')->insert([
                'name' => $faker->name,
                'slug' => $faker->word,
                'description' => $faker->paragraph()
            ]);
        }
       
    }
}
