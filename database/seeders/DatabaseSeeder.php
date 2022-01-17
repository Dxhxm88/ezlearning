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
        // \App\Models\Subject::factory(10)->create();
        // \App\Models\Classs::factory(10)->create();
        \App\Models\Student::factory(5)->create();
    }
}
