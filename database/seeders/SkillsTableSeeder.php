<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([ 
            // 'proj_id' => 1,
            'skill_name' => 'HTML',
        ]);
        DB::table('skills')->insert([ 
            // 'proj_id' => 1,
            'skill_name' => 'CSS',
        ]);
        DB::table('skills')->insert([ 
            // 'proj_id' => 1,
            'skill_name' => 'PHP',
        ]);
        DB::table('skills')->insert([ 
            // 'proj_id' => 1,
            'skill_name' => 'JavaScript',
        ]);
        DB::table('skills')->insert([ 
            // 'proj_id' => 1,
            'skill_name' => 'MySQL',
        ]);
        DB::table('skills')->insert([ 
            // 'proj_id' => 1,
            'skill_name' => 'Laravel',
        ]);
        DB::table('skills')->insert([ 
            // 'proj_id' => 2,
            'skill_name' => 'Python',
        ]);
        DB::table('skills')->insert([ 
            // 'proj_id' => 3,
            'skill_name' => 'Swift',
        ]);
        DB::table('skills')->insert([ 
            // 'proj_id' => 4,
            'skill_name' => 'C',
        ]);
    }
}
