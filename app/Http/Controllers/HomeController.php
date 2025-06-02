<?php

namespace App\Http\Controllers;

use App\Models\FrozenFriesProduct;
use App\Models\FrozenPotatoProduct;
use App\Models\FrozenParathaProduct;
use App\Models\HashBrownProduct;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('admin.dashboard');
    // }


    public function index()
    {
        $friesCount = FrozenFriesProduct::count();
        $parathaCount = FrozenParathaProduct::count();
        $potatoCount = FrozenPotatoProduct::count();
        $hashBrownCount = HashBrownProduct::count();

        return view('admin.dashboard', compact('friesCount', 'parathaCount', 'potatoCount', 'hashBrownCount'));
    }
}
