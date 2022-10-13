<?php

namespace Database\Seeders;

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
        \App\Models\User::factory(5)->create();
        \App\Models\Book::factory(5)->create();
        \App\Models\Tanggal::factory(5)->create();
        \App\Models\Waktu::factory(5)->create();
    }
}
