<?php

use Illuminate\Database\Seeder;
use App\Acquisition;
use App\AcquisitionType;
use App\Branch;
use App\Company;
use App\ContactBranch;
use App\ContactCompany;
use App\Customer;
use App\Disc;
use App\License;
use App\Maker;
use App\Memory;
use App\NumberUser;
use App\People;
use App\Period;
use App\Processor;
use App\Product;
use App\Storage;
use App\UnitStorage;
use App\User;
use App\Year;

class CompaniesTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Company data
        $contactc = new ContactCompany;
        $contactc->name = "Liliana";
        $contactc->lastname = "Linares";
        $contactc->telephone1 = 123-456-7890;
        $contactc->telephone2 = 541-453-1237;
        $contactc->email1 = "lili@hotmail.com";
        $contactc->email2 = "lili@gmail.com";
        $contactc->area = "Recursos humano";
        $contactc->save();

        $compan = new Company;
        $compan->companyrfc = "HYTG652534R65";
        $compan->companyname = "Salvatori";
        $compan->companytelephone1 = 248-564-8720;
        $compan->companytelephone2 = 246-176-1729;
        $compan->companyemail1 = "Sal_va@hotmail.com";
        $compan->companyemail2 = "Sal_va@gmail.com";
        $compan->zipcode = 10912;
        $compan->district = "Insurgentes";
        $compan->street = "Abasolo";
        $compan->insidenumber = 101;
        $compan->exteriornumber = 2;
        $compan->contact_companies_id = 1;
        $compan->save();

        //Branch data
        $contactb = new ContactBranch;
        $contactb->name = "Isa";
        $contactb->lastname = "Barrera";
        $contactb->telephone1 = 123-456-7890;
        $contactb->telephone2 = 541-453-1237;
        $contactb->email1 = "Isa@hotmail.com";
        $contactb->email2 = "Isa@gmail.com";
        $contactb->area = "Marketing";
        $contactb->save();

        $branch = new Branch;
        $branch->name = "Own";
        $branch->branchtelephone1 = 231-234-5671;
        $branch->branchtelephone2 = 904-200-5273;
        $branch->branchemail1 = "Own@hotmail.com";
        $branch->branchemail2 = "Own@gmail.com";
        $branch->zipcode = 12365;
        $branch->district = "General Anaya";
        $branch->street = "Anacahuita";
        $branch->insidenumber = 12;
        $branch->exteriornumber = 10;
        $branch->contact_branches_id = 1;
        $branch->save();

        
        $user = new User;
        $user->role = "user";
        $user->email = "admin@admin.com";
        $user->password = bcrypt("Hol@mundo1");
        $user->save();

        //WDNG
        $product = new Product;
        $product->name = "Warriors Defender Firewall New Generate";
        $product->description = "Se Obtiene el producto WDNG para el uso más conveniente del cliente";
        $product->save();
        // $product->time = 5;
        // $product->period = "years";
        // $product->users = 1000;
        

        //WDF
        $product = new Product;
        $product->name = "Warriors Defender Firewall";
        $product->description = "Se Obtiene el producto WDF para el uso más conveniente del cliente";
        $product->save();
        //WDM
        $product = new Product;
        $product->name = "Warriors Defender Mail";
        $product->description = "Se Obtiene el producto WDM para el uso más conveniente del cliente";
        $product->save();
        //WDCP
        $product = new Product;
        $product->name = "Warriors Defender Captive Portal";
        $product->description = "Se Obtiene el producto WDCP para el uso más conveniente del cliente";
        $product->save();
        //WDS
        $product = new Product;
        $product->name = "Warriors Defender Storage";
        $product->description = "Se Obtiene el producto WDS para el uso más conveniente del cliente";
        $product->save();
        //WDIPS/IDS
        $product = new Product;
        $product->name = "Warriors Defender IPS/IDS";
        $product->description = "Se Obtiene el producto WDIPS/IDS para el uso más conveniente del cliente";
        $product->save();
        //WDCC
        $product = new Product;
        $product->name = "Warriors Defender Central Console";
        $product->description = "Se Obtiene el producto WDCCpara el uso más conveniente del cliente";
        $product->save();

        //WDR
        $product = new Product;
        $product->name = "Warriors Defender Reporter";
        $product->description = "Se Obtiene el producto WDR para el uso más conveniente del cliente";
        // $product->time = 5;
        // $product->period = "years";
        // $product->users = 1000;
        $product->save();

        //License
        $licence = new License;
        $licence->serialkey = "*WDCEB2108192-306*";
        $licence->save();

        //Acquisition type
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
        $acq->save();

        $customer = new Customer;
        $customer->acquisitions_id = 1;
        $customer->companies_id = 1;
        $customer->branches_id = 1;
        $customer->save();
        

    }
}

