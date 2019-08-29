<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Company;
use App\Branch;
use App\Customer;
use App\Acquisition;
use App\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        
        $user = new User;
        $user->role = "Super";
        $user->email = "chochej10@gmail.com";
        $user->password = bcrypt("Hol@mundo1");
        $user->save();

        $this->call(
            //CompaniesTableSeeders::class
        );
    }
}
