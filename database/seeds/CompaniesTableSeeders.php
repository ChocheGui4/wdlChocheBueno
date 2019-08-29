<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\Branch;
use App\Contact;
use App\Area;
use App\User;
use App\Customer;
use App\Acquisition;
use App\Product;
use App\License;
use App\AcquisitionType;

class CompaniesTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = new Area;
        $area->name = "Administrador";
        $area->save();

        $contact = new Contact;
        $contact->name ="Liliana";
        $contact->lastname ="Linares";
        $contact->telephone =1234567890;
        $contact->areas_id =1;
        $contact->save();

        $compan = new Company;
        $compan->companyrfc = "HYTG652534R65";
        $compan->companyname = "Salvatori";
        $compan->companytelephone = 2461768729;
        $compan->companyemail = "Sal_va@gmail.com";
        $compan->zipcode = 10912;
        $compan->district = "Insurgentes";
        $compan->street = "Abasolo";
        $compan->insidenumber = 101;
        $compan->exteriornumber = 2;
        $compan->contacts_id = 1;
        $compan->save();

        $branch = new Branch;
        $branch->name = "Hildegan";
        $branch->zipcode = 12365;
        $branch->district = "General Anaya";
        $branch->street = "Anacahuita";
        $branch->insidenumber = 12;
        $branch->exteriornumber = 10;
        $branch->companies_id= 1;
        $branch->save();

        
        $user = new User;
        $user->role = "user";
        $user->email = "lili_ana@gmail.com";
        $user->password = bcrypt("Hol@mundo1");
        $user->save();

        $product = new Product;
        $product->name = "Warriors Defender Firewall";
        $product->description = "Se Obtiene el producto WDF para el uso más conveniente del cliente";
        $product->save();

        $licence = new License;
        $licence->serialkey = "HUYT-23ED-6TH7-7YHJ-2WDE-MODE-L87Y";
        $licence->save();

        $type = new AcquisitionType;
        $type->type = "Buy";
        $type->save();

        $acq = new Acquisition;
        $acq->products_id = 1;
        $acq->acquisition_types_id = 1;
        $acq->licenses_id = 1;
        $acq->save();

        $customer = new Customer;
        $customer->users_id = 2;
        $customer->acquisitions_id = 1;
        $customer->companies_id = 1;
        $customer->save();
        

    }
}

