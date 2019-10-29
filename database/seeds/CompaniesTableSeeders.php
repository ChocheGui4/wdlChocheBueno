<?php

use Illuminate\Database\Seeder;
use App\Acquisition;
use App\AcquisitionType;
use App\Branch;
use App\Company;
use App\Contact;
use App\ContactBranch;
use App\ContactCompany;
use App\Customer;
use App\Disc;
use App\License;
use App\Maker;
use App\MailService;
use App\Memory;
use App\NumberUser;
use App\NumberUserStorage;
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
        $contactc->telephone1 = "123-456-7890";
        // $contactc->telephone2 = "541-453-1237";
        $contactc->email = "lili@hotmail.com";
        $contactc->email2 = "lili@gmail.com";
        $contactc->area = "Administración y Recursos Humanos";
        $contactc->ccstatus = 1;
        $contactc->save();

        $compan = new Company;
        $compan->companyrfc = "HYTG652534R65";
        $compan->companyname = "Salvatori";
        $compan->companyimg = "company.png";
        $compan->companytelephone1 = "248-564-8720";
        $compan->companytelephone2 = "246-176-1729";
        $compan->companyemail1 = "Sal_va@hotmail.com";
        $compan->companyemail2 = "Sal_va@gmail.com";
        $compan->zipcode = 10912;
        $compan->district = "Insurgentes";
        $compan->street = "Abasolo";
        $compan->insidenumber = 101;
        $compan->exteriornumber = 2;
        $compan->companystatus = 1;
        $compan->save();
        
        $Cont = new Contact;
        $Cont->companies_id = 1;
        $Cont->contact_companies_id = 1;
        $Cont->save();

        //Branch
        $branch = new Branch;
        $branch->branchname = "Own";
        $branch->branchimg = "sucursal.jpg";
        $branch->branchtelephone1 = "231-234-5671";
        $branch->branchtelephone2 = "904-200-5273";
        $branch->branchemail1 = "Own@hotmail.com";
        $branch->branchemail2 = "Own@gmail.com";
        $branch->zipcode = 12365;
        $branch->district = "General Anaya";
        $branch->street = "Anacahuita";
        $branch->insidenumber = 12;
        $branch->exteriornumber = 10;
        $branch->branchstatus = 1;
        $branch->save();
        //Contact branch data
        $contactb = new ContactBranch;
        $contactb->name = "Isa";
        $contactb->lastname = "Barrera";
        $contactb->telephone1 = "123-456-7890";
        $contactb->telephone2 = "541-453-1237";
        $contactb->email = "Isa@hotmail.com";
        $contactb->email2 = "Isa@gmail.com";
        $contactb->area = "Marketing";
        $contactb->cbstatus = 1;
        $contactb->branches_id = 1;
        $contactb->save();

        $user = new User;
        $user->role = "user";
        $user->email = "admin@admin.com";
        $user->password = bcrypt("Hol@mundo1");
        $user->usstatus = 1;
        $user->save();

        //WDNG
        $product = new Product;
        $product->name = "Warriors Defender Firewall New Generate";
        $product->description = "Se Obtiene el producto WDNG para el uso más conveniente del cliente";
        $product->urlimg = "WDNG.png";
        $product->productstatus = 1;
        $product->save();
        // $product->time = 5;
        // $product->period = "years";
        // $product->users = 1000;
        

        //WDF
        $product = new Product;
        $product->name = "Warriors Defender Firewall";
        $product->description = "Se Obtiene el producto WDF para el uso más conveniente del cliente";
        $product->urlimg = "WDF.png";
        $product->productstatus = 1;
        $product->save();
        //WDM
        $product = new Product;
        $product->name = "Warriors Defender Mail";
        $product->description = "Se Obtiene el producto WDM para el uso más conveniente del cliente";
        $product->urlimg = "WDM.png";
        $product->productstatus = 1;
        $product->save();
        //WDCP
        $product = new Product;
        $product->name = "Warriors Defender Captive Portal";
        $product->description = "Se Obtiene el producto WDCP para el uso más conveniente del cliente";
        $product->urlimg = "WDCP.png";
        $product->productstatus = 1;
        $product->save();
        //WDS
        $product = new Product;
        $product->name = "Warriors Defender Storage";
        $product->description = "Se Obtiene el producto WDS para el uso más conveniente del cliente";
        $product->urlimg = "WDS.png";
        $product->productstatus = 1;
        $product->save();
        //WDIPS/IDS
        $product = new Product;
        $product->name = "Warriors Defender IPS/IDS";
        $product->description = "Se Obtiene el producto WDIPS/IDS para el uso más conveniente del cliente";
        $product->urlimg = "IDS.png";
        $product->productstatus = 1;
        $product->save();
        //WDCC
        $product = new Product;
        $product->name = "Warriors Defender Central Console";
        $product->description = "Se Obtiene el producto WDCCpara el uso más conveniente del cliente";
        $product->urlimg = "IDS.png";
        $product->productstatus = 1;
        $product->save();

        //WDR
        $product = new Product;
        $product->name = "Warriors Defender Reporter";
        $product->description = "Se Obtiene el producto WDR para el uso más conveniente del cliente";
        $product->urlimg = "WLicenciamiento.png";
        $product->productstatus = 1;
        $product->save();

        //Maker
        $maker = new Maker;
        $maker->namem = "Intel";
        $maker->valuem = "A";
        $maker->save();
        $maker = new Maker;
        $maker->namem = "Lanner";
        $maker->valuem = "B";
        $maker->save();
        $maker = new Maker;
        $maker->namem = "Nexcom";
        $maker->valuem = "C";
        $maker->save();
        $maker = new Maker;
        $maker->namem = "Milogo";
        $maker->valuem = "D";
        $maker->save();
        $maker = new Maker;
        $maker->namem = "Axiomtek";
        $maker->valuem = "E";
        $maker->save();
        $maker = new Maker;
        $maker->namem = "Lenovo";
        $maker->valuem = "F";
        $maker->save();

        //Porcessor
        $process = new Processor;
        $process->namep = "Intel Atom";
        $process->valuep = "A";
        $process->save();
        $process = new Processor;
        $process->namep = "Intel Pentium";
        $process->valuep = "A";
        $process->save();
        $process = new Processor;
        $process->namep = "Dual Core 2.5 ghz";
        $process->valuep = "B";
        $process->save();
        $process = new Processor;
        $process->namep = "Core 2 duo";
        $process->valuep = "B";
        $process->save();
        $process = new Processor;
        $process->namep = "Intel Xeon";
        $process->valuep = "C";
        $process->save();
        $process = new Processor;
        $process->namep = "Intel Quad Core";
        $process->valuep = "D";
        $process->save();
        $process = new Processor;
        $process->namep = "Intel Celeron M";
        $process->valuep = "E";
        $process->save();
        $process = new Processor;
        $process->namep = "Intel Dual Core Doble";
        $process->valuep = "F";
        $process->save();
        $process = new Processor;
        $process->namep = "Intel Quad Core Doble";
        $process->valuep = "G";
        $process->save();
        $process = new Processor;
        $process->namep = "Core i3";
        $process->valuep = "H";
        $process->save();
        $process = new Processor;
        $process->namep = "Core i5";
        $process->valuep = "I";
        $process->save();
        $process = new Processor;
        $process->namep = "Core i7";
        $process->valuep = "J";
        $process->save();
        $process = new Processor;
        $process->namep = "Intel Celeron J";
        $process->valuep = "K";
        $process->save();
        //Memory
        $memory = new Memory;
        $memory->sizem = "1";
        $memory->valueme = "A";
        $memory->save();
        $memory = new Memory;
        $memory->sizem = "2";
        $memory->valueme = "B";
        $memory->save();
        $memory = new Memory;
        $memory->sizem = "4";
        $memory->valueme = "C";
        $memory->save();
        $memory = new Memory;
        $memory->sizem = "8";
        $memory->valueme = "D";
        $memory->save();
        $memory = new Memory;
        $memory->sizem = "16";
        $memory->valueme = "E";
        $memory->save();
        $memory = new Memory;
        $memory->sizem = "32";
        $memory->valueme = "F";
        $memory->save();
        $memory = new Memory;
        $memory->sizem = "64";
        $memory->valueme = "G";
        $memory->save();
        $memory = new Memory;
        $memory->sizem = "Otro";
        $memory->valueme = "H";
        $memory->save();
        //Disc
        $disc = new Disc;
        $disc->typed = "Hard Disk";
        $disc->valued = 0;
        $disc->save();
        $disc = new Disc;
        $disc->typed = "Compact Flash";
        $disc->valued = 1;
        $disc->save();
        $disc = new Disc;
        $disc->typed = "Solid Drive";
        $disc->valued = 2;
        $disc->save();
        
        //Year
        $year = new Year;
        $year->year = 1;
        $year->save();
        $year = new Year;
        $year->year = 2;
        $year->save();
        $year = new Year;
        $year->year = 3;
        $year->save();
        $year = new Year;
        $year->year = 4;
        $year->save();
        $year = new Year;
        $year->year = 5;
        $year->save();

        $mail = new MailService;
        $mail->storagem = 1;
        $mail->save();
        $mail = new MailService;
        $mail->storagem = 2;
        $mail->save();
        $mail = new MailService;
        $mail->storagem = 3;
        $mail->save();
        $mail = new MailService;
        $mail->storagem = 4;
        $mail->save();
        $mail = new MailService;
        $mail->storagem = 5;
        $mail->save();
        $mail = new MailService;
        $mail->storagem = 10;
        $mail->save();
        $mail = new MailService;
        $mail->storagem = 15;
        $mail->save();
        $mail = new MailService;
        $mail->storagem = 20;
        $mail->save();
        $mail = new MailService;
        $mail->storagem = 30;
        $mail->save();
        $mail = new MailService;
        $mail->storagem = 40;
        $mail->save();
        $mail = new MailService;
        $mail->storagem = 50;
        $mail->save();
        $mail = new MailService;
        $mail->storagem = 100;
        $mail->save();
        //Period
        $period = new Period;
        $period->period = "years";
        $period->save();

        //Number_users
        $numuser = new NumberUser;
        $numuser->user = 10;
        $numuser->save();
        $numuser = new NumberUser;
        $numuser->user = 20;
        $numuser->save();
        $numuser = new NumberUser;
        $numuser->user = 30;
        $numuser->save();
        $numuser = new NumberUser;
        $numuser->user = 40;
        $numuser->save();
        $numuser = new NumberUser;
        $numuser->user = 50;
        $numuser->save();
        $numuser = new NumberUser;
        $numuser->user = 60;
        $numuser->save();
        $numuser = new NumberUser;
        $numuser->user = 80;
        $numuser->save();
        $numuser = new NumberUser;
        $numuser->user = 100;
        $numuser->save();
        $numuser = new NumberUser;
        $numuser->user = 200;
        $numuser->save();
        $numuser = new NumberUser;
        $numuser->user = 400;
        $numuser->save();
        $numuser = new NumberUser;
        $numuser->user = 500;
        $numuser->save();
        $numuser = new NumberUser;
        $numuser->user = 1000;
        $numuser->save();

        //storage
        $storage = new Storage;
        $storage->storage = 2;
        $storage->save();
        $storage = new Storage;
        $storage->storage = 4;
        $storage->save();
        $storage = new Storage;
        $storage->storage = 6;
        $storage->save();
        $storage = new Storage;
        $storage->storage = 8;
        $storage->save();
        $storage = new Storage;
        $storage->storage = 10;
        $storage->save();

        //Unit_storage
        $unitstorage = new UnitStorage;
        $unitstorage->unit = "TB";
        $unitstorage->save();

        //NumberUserStorage
        $nstorage = new NumberUserStorage;
        $nstorage->userstorage = 30;
        $nstorage->save();
        $nstorage = new NumberUserStorage;
        $nstorage->userstorage = 50;
        $nstorage->save();
        $nstorage = new NumberUserStorage;
        $nstorage->userstorage = 100;
        $nstorage->save();
        $nstorage = new NumberUserStorage;
        $nstorage->userstorage = 150;
        $nstorage->save();
        $nstorage = new NumberUserStorage;
        $nstorage->userstorage = 200;
        $nstorage->save();
        $nstorage = new NumberUserStorage;
        $nstorage->userstorage = 500;
        $nstorage->save();
        $nstorage = new NumberUserStorage;
        $nstorage->userstorage = 1000;
        $nstorage->save();

        //License
        $licence = new License;
        $licence->serialkey = "*WDCEB2108192-306*";
        $licence->sstatus = 1;
        $licence->save();

        //Acquisition type
        $type = new AcquisitionType;
        $type->type = "Sale";
        $type->save();
        $type = new AcquisitionType;
        $type->type = "Demo";
        $type->save();

        $acq = new Acquisition;
        $acq->salenumber = 1;
        $acq->astatus = 1;
        $acq->products_id = 1;
        $acq->acquisition_types_id = 1;
        $acq->licenses_id = 1;
        $acq->save();

        $customer = new Customer;
        $customer->acquisitions_id = 1;
        $customer->companies_id = 1;
        $customer->branches_id = 1;
        $customer->customstatus = 1;
        $customer->save();
        
        $customer = new Customer;
        $customer->companies_id = 1;
        $customer->branches_id = 1;
        $customer->customstatus = 1;
        $customer->save();
        

    }
}

