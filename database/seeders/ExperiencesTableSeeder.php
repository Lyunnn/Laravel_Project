<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->insert([ 
            'proj_name' => 'Design Documentation',
            'proj_year' => 2019,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        DB::table('experiences')->insert([ 
            'proj_name' => 'Website Creation',
            'proj_year' => 2020,
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
