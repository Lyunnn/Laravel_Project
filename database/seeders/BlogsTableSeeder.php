<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'blog_message' => 'Can be better',
            'user_id' => 1,
        ]);
        DB::table('blogs')->insert([
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'blog_message' => 'Nice',
            'user_id' => 2,
        ]);
        DB::table('blogs')->insert([
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
            'blog_message' => 'Okay',
            'user_id' => 3,
        ]);
    }
}
