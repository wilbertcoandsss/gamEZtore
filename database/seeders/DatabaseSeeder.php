<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(GenreSeeder::class);
        $this->call(GameSeeder::class);

        User::insert([
            'name' => 'Wilbert Coandadiputra',
            'email' => 'wilbert@gmail.com',
            'password' => bcrypt("wilbert123"),
            'gender' => 'Male',
            'dob' => '2003-07-24'
        ]);

        User::insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt("admin123"),
            'gender' => 'Female',
            'dob' => '2003-07-24',
            'role' => 'admin'
        ]);
    }
}
