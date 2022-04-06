<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(HomesTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(EducationsTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
    }
}
