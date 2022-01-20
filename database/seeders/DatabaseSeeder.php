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
        // \App\Models\Subject::factory(5)->create();
        // \App\Models\Teacher::factory(2)->create();
        // \App\Models\Classs::factory(2)->create();
        \App\Models\Student::factory(5)->create();
    }
}
