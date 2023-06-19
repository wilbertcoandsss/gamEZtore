<?php

namespace Database\Seeders;

use App\Models\Genre;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Genre::insert([
            'genre' => 'FPS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Genre::insert([
            'genre' => 'Sandbox',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Genre::insert([
            'genre' => 'Survival',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Genre::insert([
            'genre' => 'RPG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Genre::insert([
            'genre' => 'RTS',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Genre::insert([
            'genre' => 'Arcade',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Genre::insert([
            'genre' => 'Sports',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
