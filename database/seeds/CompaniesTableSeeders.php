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
use App\Characteristic;
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
        $branch->save();

        
        $user = new User;
        $user->role = "user";
        $user->email = "lili_ana@gmail.com";
        $user->password = bcrypt("Hol@mundo1");
        $user->save();

        //WDNG
        $product = new Product;
        $product->name = "Warriors Defender Firewall New Generate";
        $product->description = "Se Obtiene el producto WDNG para el uso más conveniente del cliente";
        $product->time = 5;
        $product->period = "years";
        $product->users = 1000;
        $product->save();

        //WDF
        $product = new Product;
        $product->name = "Warriors Defender Firewall";
        $product->description = "Se Obtiene el producto WDF para el uso más conveniente del cliente";
        $product->time = 5;
        $product->period = "years";
        $product->users = 1000;
        $product->save();
        //WDM
        $product = new Product;
        $product->name = "Warriors Defender Mail";
        $product->description = "Se Obtiene el producto WDM para el uso más conveniente del cliente";
        $product->time = 5;
        $product->period = "years";
        $product->users = 1000;
        $product->storage = 5;
        $product->unitstorage = "GB";
        $product->save();
        //WDCP
        $product = new Product;
        $product->name = "Warriors Defender Captive Portal";
        $product->description = "Se Obtiene el producto WDCP para el uso más conveniente del cliente";
        $product->time = 5;
        $product->period = "years";
        $product->users = 1000;
        $product->save();
        //WDS
        $product = new Product;
        $product->name = "Warriors Defender Storage";
        $product->description = "Se Obtiene el producto WDS para el uso más conveniente del cliente";
        $product->time = 36;
        $product->period = "months";
        $product->users = 1000;
        $product->storage = 5;
        $product->unitstorage = "TB";
        $product->save();
        //WDIPS/IDS
        $product = new Product;
        $product->name = "Warriors Defender IPS/IDS";
        $product->description = "Se Obtiene el producto WDIPS/IDS para el uso más conveniente del cliente";
        $product->time = 5;
        $product->period = "years";
        $product->users = 1000;
        $product->save();
        //WDCC
        $product = new Product;
        $product->name = "Warriors Defender Central Console";
        $product->description = "Se Obtiene el producto WDCCpara el uso más conveniente del cliente";
        $product->time = 5;
        $product->period = "years";
        $product->users = 1000;
        $product->save();
        //WDR
        $product = new Product;
        $product->name = "Warriors Defender Reporter";
        $product->description = "Se Obtiene el producto WDR para el uso más conveniente del cliente";
        $product->time = 5;
        $product->period = "years";
        $product->users = 1000;
        $product->save();

        $charac = new Characteristic;
        $charac->time = 5;
        $charac->numberusers = 5;
        $charac->save();

        $licence = new License;
        $licence->serialkey = "HUYT-23ED-6TH7-7YHJ-2WDE-MODE-L87Y";
        $licence->save();

        $type = new AcquisitionType;
        $type->type = "Sale";
        $type->save();

        $type = new AcquisitionType;
        $type->type = "Demo";
        $type->save();

        $acq = new Acquisition;
        $acq->products_id = 1;
        $acq->acquisition_types_id = 1;
        $acq->licenses_id = 1;
        $acq->characteristics_id = 1;
        $acq->save();

        $customer = new Customer;
        $customer->users_id = 2;
        $customer->acquisitions_id = 1;
        $customer->companies_id = 1;
        $customer->branches_id = 1;
        $customer->save();
        

    }
}

