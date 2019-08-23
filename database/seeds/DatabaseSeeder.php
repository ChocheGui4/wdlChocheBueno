<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$this->call(
            AreasTableSeeders::class,
            ContactsTableSeeders::class
        );*/
        $user = new User;
        $user->role = "Super";
        $user->email = "chochej10@gmail.com";
        $user->password = bcrypt("Hol@mundo1");
        $user->save();        
    }
}
