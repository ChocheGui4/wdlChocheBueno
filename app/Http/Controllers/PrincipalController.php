<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use Lava;
use App\Company;
use App\Branch;
use App\People;
use App\User;
use App\Area;
use App\Customer;
use App\Contact;
use App\Acquisition;
use App\Characteristic;
use App\Product;
use App\License;
use App\AcquisitionType;

class PrincipalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Página principal
    public function Home()
    {
        // $lava = new Lavacharts; // See note below for Laravel

        // $stocksTable = Lava::DataTable();
        // $stocksTable->addDateColumn('Day of Month')
        //     ->addNumberColumn('Projected')
        //     ->addNumberColumn('Official');

        // for ($a = 1; $a < 30; $a++) {
        //     $stocksTable->addRow([
        //         '2015-10-' . $a, rand(800,1000), rand(800,1000)
        //     ]);
        // }
        
        // $chart = Lava::LineChart('MyStocks', $stocksTable);
            
            
        // $reasons->addStringColumn(‘Reasons’)
        // ->addNumberColumn(‘Percent’)
        // ->addRow([‘Check Reviews’, 5])
        // ->addRow([‘Watch Trailers’, 2])
        // ->addRow([‘See Actors Other Work’, 4])
        // ->addRow([‘Settle Argument’, 89]);

        // $lava->PieChart(‘IMDB’, $stocksTable, [
        // ‘title’ => "Hola como esta",
        // ‘is3D’ => true
        // ]);
        // $products = Company::join('customers', 'customers.companies_id', '=', 'companies.id')
        //         ->join('acquisitions', 'acquisitions.id', '=', 'customers.acquisitions_id')
        //         ->join('products', 'products.id', '=', 'acquisitions.products_id')
        //         ->join('characteristics', 'characteristics.id', '=', 'acquisitions.characteristics_id')
        //         ->get();
        // dd($products);
        return view('super.principal');
    }
    
}
