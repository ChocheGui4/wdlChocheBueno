<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class ContactsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => Str::random(10),
            'lastName' => Str::random(25),
            'telephone' => Str::random(25),
            'email' => Str::random(32),
            'areas_id' => 1 
        ]);

        //DB::table('contacts')->truncate();
    }
}
