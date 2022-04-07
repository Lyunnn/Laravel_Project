<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'exp_proj_id' => 1,
            'image' => '/experiences_images/design-doc.jpg'
        ]);
        DB::table('images')->insert([
            'exp_proj_id' => 1,
            'image' => '/experiences_images/wireframe.jpg'
        ]);
    }
}
