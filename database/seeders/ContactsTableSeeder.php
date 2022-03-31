<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([ 
            'contact_name' => 'Lin Yun',
            'contact_email' => 'linyun@gmail.com',
            'contact_subject' => 'Inquiry About Career Plan',
            'contact_message' => 'What is your future career plan? ',
            'created_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
    }
}
