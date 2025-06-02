<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FrozenFrizeController;
use App\Http\Controllers\FrozenParathaController;
use App\Http\Controllers\FrozenPotatoController;
use App\Http\Controllers\HashBrownController;
use App\Http\Controllers\OurProductController;
use App\Http\Controllers\HomeFoodMenuController;
use App\Http\Controllers\CompanyJournyController;
use App\Http\Controllers\PioneersJourneyController;
use App\Http\Controllers\HomeAboutUsController;
use App\Http\Controllers\HomeCarousalController;
use App\Http\Controllers\veggieSpecialtiesController;
use App\Http\Controllers\BakedSnacksController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormController;
use App\Models\BakedSnacks;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {return view('welcome');});
Route::get('/', [WebsiteController::class, 'index'])->name('Websitehome');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/about_compyJourney', [WebsiteController::class, 'about_compyJourney'])->name('about_compyJourney');

Route::get('/FrozenFries', [WebsiteController::class, 'FrozenFries'])->name('FrozenFries');
Route::get('/FrozenParathas', [WebsiteController::class, 'FrozenParathas'])->name('FrozenParathas');
Route::get('/FrozenPotato', [WebsiteController::class, 'FrozenPotato'])->name('FrozenPotato');
Route::get('/hashBrown', [WebsiteController::class, 'hashBrown'])->name('hashBrown');

Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/TermsAndCondition', [WebsiteController::class, 'TermsAndCondition'])->name('TermsAndCondition');
Route::get('/RefundPolicy', [WebsiteController::class, 'RefundPolicy'])->name('RefundPolicy');
Route::get('/PrivacyPolicy', [WebsiteController::class, 'PrivacyPolicy'])->name('PrivacyPolicy');
Route::get('/websiteOurProduct', [WebsiteController::class, 'OurProduct'])->name('OurProduct');
Route::get('/websiteVeggieSpecialties', [WebsiteController::class, 'VeggieSpecialties'])->name('WebVeggieSpecialties');
Route::get('/webBakedSnacks', [WebsiteController::class, 'BakedSnacks'])->name('websiteBakedSnacks');

// for contact route
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');
// for admin panael show the contact form details
Route::get('/admin/contacts', [ContactFormController::class, 'index'])->name('admin.contactsForm.index');

Route::post('/contact/send', [ContactFormController::class, 'store'])->name('contactForm.send');


// for admin 

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::resource('products', FrozenFrizeController::class);

    //For Frozen Fries
    Route::get('/AdminfrozenfriesCreate', [FrozenFrizeController::class, 'index'])->name('admin.frozefries');
    Route::get('/AdminfrozenfriesAdd', [FrozenFrizeController::class, 'addproduct'])->name('admin.frozen_fries.add');
    Route::post('/frozenfrize', [FrozenFrizeController::class, 'store'])->name('admin.frozenfrize.store');
    Route::get('/editFrozenFrize/{id}', [FrozenFrizeController::class, 'edit'])->name('admin.frozenfrize.edit');
    Route::put('/updateFrozenFrize/{id}', [FrozenFrizeController::class, 'update'])->name('admin.frozen_fries.update');
    Route::delete('/DeleteFrozenFrize/{id}', [FrozenFrizeController::class, 'destroy'])->name('admin.frozenfrize.destroy');

    //For Frozen Paratha
    Route::get('/AdminfrozenparathaCreate', [FrozenParathaController::class, 'index'])->name('admin.frozenparatha');
    Route::get('/AdminfrozenparathaAdd', [FrozenParathaController::class, 'addproduct'])->name('admin.frozen_paratha.add');
    Route::post('/frozenparatha', [FrozenParathaController::class, 'store'])->name('admin.frozenparatha.store');
    Route::get('/editFrozenParatha/{id}', [FrozenParathaController::class, 'edit'])->name('admin.frozenParatha.edit');
    Route::put('/updateFrozenParatha/{id}', [FrozenParathaController::class, 'update'])->name('admin.frozenParatha.update');
    Route::delete('/DeleteParathaFrize/{id}', [FrozenParathaController::class, 'destroy'])->name('admin.frozenParatha.destroy');

    //for frozen patato
    Route::get('/AdminfrozenpotatoCreate', [FrozenPotatoController::class, 'index'])->name('admin.frozenPotato.index');
    Route::get('/AdminfrozenpotatoAdd', [FrozenPotatoController::class, 'addproduct'])->name('admin.frozen_Potato.add');
    Route::post('/frozenPotato', [FrozenPotatoController::class, 'store'])->name('admin.frozenPotato.store');
    Route::get('/editFrozenPotato/{id}', [FrozenPotatoController::class, 'edit'])->name('admin.frozenPotato.edit');
    Route::put('/updateFrozenPotato/{id}', [FrozenPotatoController::class, 'update'])->name('admin.frozenPotato.update');
    Route::delete('/DeleteFrozenPotato/{id}', [FrozenPotatoController::class, 'destroy'])->name('admin.frozenPotato.destroy');

    //for hash brown
    Route::get('/AdminhashbrownCreate', [HashBrownController::class, 'index'])->name('admin.Hash_Brown.index');
    Route::get('/AdminhashbrownAdd', [HashBrownController::class, 'addproduct'])->name('admin.Hash_Brown.add');
    Route::post('/hashbrown', [HashBrownController::class, 'store'])->name('admin.Hash_Brown.store');
    Route::get('/editHashBrown/{id}', [HashBrownController::class, 'edit'])->name('admin.HashBrownProduct.edit');
    Route::put('/updateHashBrown/{id}', [HashBrownController::class, 'update'])->name('admin.HashBrownProduct.update');
    Route::delete('/DeleteHashBrown/{id}', [HashBrownController::class, 'destroy'])->name('admin.HashBrownProduct.destroy');

    // for our products
    Route::get('/AdminOurProductCreate', [OurProductController::class, 'index'])->name('admin.Our_Product.index');
    Route::get('/AdminOurProductAdd', [OurProductController::class, 'addproduct'])->name('admin.Our_Product.add');
    Route::post('/AdminOurproduct', [OurProductController::class, 'store'])->name('admin.Our_Product.store');
    Route::get('/editOurProduct/{id}', [OurProductController::class, 'edit'])->name('admin.Our_Product.edit');
    Route::put('/updateOurProduct/{id}', [OurProductController::class, 'update'])->name('admin.Our_Product.update');
    Route::delete('/DeleteOurProduct/{id}', [OurProductController::class, 'destroy'])->name('admin.Our_Product.destroy');


    // for home Menu
    Route::get('/AdminHomeMenuCreate', [HomeFoodMenuController::class, 'index'])->name('admin.Home_food_menu.index');
    Route::get('/AdminHomeMenuAdd', [HomeFoodMenuController::class, 'addproduct'])->name('admin.Home_food_menu.add');
    Route::post('/AdminHomeMenu', [HomeFoodMenuController::class, 'store'])->name('admin.Home_food_menu.store');
    Route::get('/editHomeMenu/{id}', [HomeFoodMenuController::class, 'edit'])->name('admin.Home_food_menu.edit');
    Route::put('/updateHomeMenu/{id}', [HomeFoodMenuController::class, 'update'])->name('admin.Home_food_menu.update');
    Route::delete('/DeleteHomeMenu/{id}', [HomeFoodMenuController::class, 'destroy'])->name('admin.Home_food_menu.destroy');

    // for company Journey
    Route::get('/AdminCompanyJourneyCreate', [CompanyJournyController::class, 'index'])->name('admin.CompanyJourney.index');
    Route::get('/AdminCompanyJourneyAdd', [CompanyJournyController::class, 'addproduct'])->name('admin.Company_Journey.add');
    Route::post('/AdminCompanyJourney', [CompanyJournyController::class, 'store'])->name('admin.Company_Journey.store');
    Route::get('/editCompanyJourney/{id}', [CompanyJournyController::class, 'edit'])->name('admin.Company_Journey.edit');
    Route::put('/updateCompanyJourney/{id}', [CompanyJournyController::class, 'update'])->name('admin.Company_Journey.update');
    Route::delete('/DeleteCompanyJourney/{id}', [CompanyJournyController::class, 'destroy'])->name('admin.companyJourney.destroy');


    //for Pioneers Journey
    Route::get('/AdminPioneersJourneyCreate', [PioneersJourneyController::class, 'index'])->name('admin.Pioneers_Journey.index');
    Route::get('/AdminPioneersJourneyAdd', [PioneersJourneyController::class, 'addproduct'])->name('admin.Pioneers_Journey.add');
    Route::post('/AdminPioneersJourney', [PioneersJourneyController::class, 'store'])->name('admin.Pioneers_Journey.store');
    Route::get('/editPioneersJourney/{id}', [PioneersJourneyController::class, 'edit'])->name('admin.Pioneers_Journey.edit');
    Route::put('/updatePioneersJourney/{id}', [PioneersJourneyController::class, 'update'])->name('admin.Pioneers_Journey.update');
    Route::delete('/DeletePioneersJourney/{id}', [PioneersJourneyController::class, 'destroy'])->name('admin.Pioneers_Journey.destroy');



    // for home about-us
    Route::get('/AdminHomeAboutUsCreate', [HomeAboutUsController::class, 'index'])->name('admin.Home_about_us.index');
    Route::get('/AdminHomeAboutUsAdd', [HomeAboutUsController::class, 'addproduct'])->name('admin.Home_about_us.add');
    Route::post('/AdminHomeAboutUs', [HomeAboutUsController::class, 'store'])->name('admin.Home_about_us.store');
    Route::get('/editHomeAboutUs/{id}', [HomeAboutUsController::class, 'edit'])->name('admin.Home_about_us.edit');
    Route::put('/updateHomeAboutUs/{id}', [HomeAboutUsController::class, 'update'])->name('admin.Home_about_us.update');
    Route::delete('/DeleteHomeAboutUs/{id}', [HomeAboutUsController::class, 'destroy'])->name('admin.Home_about_us.destroy');

    // for carousal
    Route::get('/AdminCarousalCreate', [HomeCarousalController::class, 'index'])->name('admin.Home_carousal.index');
    Route::get('/AdminCarousalAdd', [HomeCarousalController::class, 'addproduct'])->name('admin.home_carousal.add');
    Route::post('/AdminCarousal', [HomeCarousalController::class, 'store'])->name('admin.Home_carousal.store');
    Route::get('/editCarousal/{id}', [HomeCarousalController::class, 'edit'])->name('admin.Home_carousal.edit');
    Route::put('/updateCarousal/{id}', [HomeCarousalController::class, 'update'])->name('admin.Home_carousal.update');
    Route::delete('/DeleteCarousal/{id}', [HomeCarousalController::class, 'destroy'])->name('admin.Home_carousal.destroy');

    // for VeggieSpecialties
    Route::get('/AdminVeggieSpecialtiesCreate', [veggieSpecialtiesController::class, 'index'])->name('admin.Veggie_specialties.index');
    Route::get('/AdminVeggieSpecialtiesAdd', [veggieSpecialtiesController::class, 'addproduct'])->name('admin.VeggieSpecialties.add');
    Route::post('/AdminVeggieSpecialties', [veggieSpecialtiesController::class, 'store'])->name('admin.VeggieSpecialties.store');
    Route::get('/editVeggieSpecialties/{id}', [veggieSpecialtiesController::class, 'edit'])->name('admin.VeggieSpecialties.edit');
    Route::put('/updateVeggieSpecialties/{id}', [veggieSpecialtiesController::class, 'update'])->name('admin.VeggieSpecialties.update');
    Route::delete('/DeleteVeggieSpecialties/{id}', [veggieSpecialtiesController::class, 'destroy'])->name('admin.VeggieSpecialties.destroy');

    // for BakedSnacks
    Route::get('/AdminBakedSnacksCreate', [BakedSnacksController::class, 'index'])->name('admin.bakedSnacks.index');
    Route::get('/AdminBakedSnacksAdd', [BakedSnacksController::class, 'addproduct'])->name('admin.BakedSnacks.add');
    Route::post('/AdminBakedSnacks', [BakedSnacksController::class, 'store'])->name('admin.BakedSnacks.store');
    Route::get('/editBakedSnacks/{id}', [BakedSnacksController::class, 'edit'])->name('admin.BakedSnacks.edit');
    Route::put('/updateBakedSnacks/{id}', [BakedSnacksController::class, 'update'])->name('admin.BakedSnacks.update');
    Route::delete('/DeleteBakedSnacks/{id}', [BakedSnacksController::class, 'destroy'])->name('admin.BakedSnacks.destroy');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
