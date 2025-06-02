<?php

namespace App\Http\Controllers;

use App\Models\FrozenFriesProduct;
use App\Models\FrozenPotatoProduct;
use App\Models\FrozenParathaProduct;
use App\Models\HashBrownProduct;
use App\Models\OurProduct;
use App\Models\HomeFoodMenuProduct;
use App\Models\CompanyJourny;
use App\Models\PioneersJourney;
use App\Models\HomeAboutUs;
use App\Models\HomeCarousal;
use Illuminate\Http\Request;
use App\Models\veggieSpecialties;
use App\Models\BakedSnacks;

class WebsiteController extends Controller
{
    public function index()
    {
        // return view('website.home');
        $HomeFoodMenuProducts = HomeFoodMenuProduct::all();
        $homeaboutus = HomeAboutUs::latest()->first();
        $home_carousals = HomeCarousal::latest()->first();
        $OurProducts = OurProduct::all();
        return view('website.home', compact('HomeFoodMenuProducts', 'homeaboutus', 'home_carousals', 'OurProducts'));
    }
    public function about()
    {
        $PioneersJourneys = PioneersJourney::latest()->first();
        return view('website.about', compact('PioneersJourneys'));
    }

    public function about_compyJourney()
    {
        $companyJourney = CompanyJourny::latest()->first();
        return view('website.about_compyJourney', compact('companyJourney'));
        //return view('website.about_compyJourney');
    }
    public function FrozenFries()
    {
        $products = FrozenFriesProduct::all();
        return view('website.FrozenFries', compact('products'));
        // return view('website.FrozenFries');
    }
    public function FrozenParathas()
    {
        $FrozenParathaProducts = FrozenParathaProduct::all();
        return view('website.FrozenParathas', compact('FrozenParathaProducts'));
        //return view('website.FrozenParathas');
    }
    public function FrozenPotato()
    {
        $potatoproducts = FrozenPotatoProduct::all();
        return view('website.FrozenPotato', compact('potatoproducts'));

        //return view('website.FrozenPotato');
    }
    public function hashBrown()
    {
        $HashBrownProducts = HashBrownProduct::all();
        return view('website.hashBrown', compact('HashBrownProducts'));
        //return view('website.hashBrown');
    }

    public function OurProduct()
    {
        $OurProducts = OurProduct::all();
        return view('website.OurProduct', compact('OurProducts'));
    }


    public function VeggieSpecialties()
    {
        $veggieSpecialtiess = veggieSpecialties::all();
        return view('website.veggieSpecialties', compact('veggieSpecialtiess'));
    }
    public function BakedSnacks()
    {
        $BakedSnackss = BakedSnacks::all();
        return view('website.BakedSnacks', compact('BakedSnackss'));
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function TermsAndCondition()
    {
        return view('website.TermsAndCondition');
    }

    public function PrivacyPolicy()
    {
        return view('website.PrivacyPolicy');
    }
    public function RefundPolicy()
    {
        return view('website.RefundPolicy');
    }
}
