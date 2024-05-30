<?php

use App\Models\Whyus;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\BackEndController\PricePlaneController;
use App\Http\Controllers\BackEndController\FaqController;
use App\Http\Controllers\BackEndController\HeroController;
use App\Http\Controllers\BackEndController\TeamController;
use App\Http\Controllers\BackEndController\AboutController;
use App\Http\Controllers\BackEndController\PriceController;
use App\Http\Controllers\BackEndController\SkillController;
use App\Http\Controllers\BackEndController\WhyusController;
use App\Http\Controllers\BackEndController\ActionController;
use App\Http\Controllers\BackEndController\ClientController;
use App\Http\Controllers\BackEndController\ContactController;
use App\Http\Controllers\BackEndController\ServiceController;
use App\Http\Controllers\BackEndController\TestimonialController;

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


//Start BackEnd Section//
Route::get('/admin', [HeroController::class, 'index'])->name('admin');
Route::group(['as'=>'admin.', 'prefix'=>'admin/'], function(){

    Route::group(['as'=>'hero.', 'prefix'=>'hero/'], function(){
        Route::get('/', [HeroController::class, 'index'])->name('index');
        Route::get('create', [HeroController::class, 'create'])->name('create');
        Route::post('store', [HeroController::class, 'store_data'])->name('store');
        Route::put('{id}/update', [HeroController::class, 'update_data'])->name('update');
    });

    Route::group(['as'=>'client.', 'prefix'=>'client/'], function(){
        Route::get('/', [ClientController::class, 'index'])->name('index');
        Route::get('create', [ClientController::class, 'create'])->name('create');
        Route::post('store', [ClientController::class, 'store_data'])->name('store');
        Route::get('{id}/edit', [ClientController::class, 'edit_data'])->name('edit');
        Route::put('{id}/update', [ClientController::class, 'update_data'])->name('update');
        Route::delete('{id}/update', [ClientController::class, 'destroy'])->name('destroy');
    });

    Route::group(['as'=>'about.', 'prefix'=>'about/'], function(){
        Route::get('/', [AboutController::class, 'index'])->name('index');
        Route::get('create', [AboutController::class, 'create'])->name('create');
        Route::post('store', [AboutController::class, 'store'])->name('store');
        Route::put('{id}/update', [AboutController::class, 'update'])->name('update');
    });

    Route::group(['as'=>'whyus.', 'prefix'=>'whyus/'], function(){
        Route::get('/', [WhyusController::class, 'index'])->name('index');
        Route::get('create', [WhyusController::class, 'create'])->name('create');
        Route::post('store', [WhyusController::class, 'store'])->name('store');
        Route::put('{id}/update', [WhyusController::class, 'update'])->name('update');
    });

    Route::group(['as'=>'skills.', 'prefix'=>'skills/'], function(){
        Route::get('/', [SkillController::class, 'index'])->name('index');
        Route::get('create', [SkillController::class, 'create'])->name('create');
        Route::post('store', [SkillController::class, 'store'])->name('store');
        Route::put('{id}/update', [SkillController::class, 'update'])->name('update');
    });

    Route::group(['as'=>'service.', 'prefix'=>'service/'], function(){
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::get('create', [ServiceController::class, 'create'])->name('create');
        Route::post('store', [ServiceController::class, 'store'])->name('store');
        Route::get('{id}/edit', [ServiceController::class, 'edit_data'])->name('edit');
        Route::put('{id}/update', [ServiceController::class, 'update'])->name('update');
        Route::delete('{id}/update', [ServiceController::class, 'destroy'])->name('destroy');
    });

    Route::group(['as'=>'action.', 'prefix'=>'action/'], function(){
        Route::get('/', [ActionController::class, 'index'])->name('index');
        Route::get('create', [ActionController::class, 'create'])->name('create');
        Route::post('store', [ActionController::class, 'store'])->name('store');
        Route::put('{id}/update', [ActionController::class, 'update'])->name('update');
    });

    Route::group(['as'=>'team.', 'prefix'=>'team/'], function(){
        Route::get('/', [TeamController::class, 'index'])->name('index');
        Route::get('create', [TeamController::class, 'create'])->name('create');
        Route::post('store', [TeamController::class, 'store'])->name('store');
        Route::get('{id}/edit', [TeamController::class, 'edit'])->name('edit');
        Route::put('{id}/update', [TeamController::class, 'update'])->name('update');
        Route::delete('{id}/update', [TeamController::class, 'destroy'])->name('destroy');
    });

    Route::group(['as'=>'price.', 'prefix'=>'price/'], function(){
        Route::get('/', [PriceController::class, 'index'])->name('index');
        Route::get('plane', [PriceController::class, 'plane'])->name('plane');
        Route::get('create', [PriceController::class, 'create'])->name('create');
        Route::post('store', [PriceController::class, 'store'])->name('store');
        Route::get('{id}/edit', [PriceController::class, 'edit'])->name('edit');
        Route::put('{id}/update', [PriceController::class, 'update'])->name('update');
        Route::delete('{id}/delete', [PriceController::class, 'destroy'])->name('destroy');
    });

    Route::group(['as'=>'priceplane.', 'prefix'=>'priceplane/'], function(){
        // Route::get('/', [PricePlaneController::class, 'index'])->name('index');
        Route::get('create', [PricePlaneController::class, 'create'])->name('create');
        Route::post('store', [PricePlaneController::class, 'store'])->name('store');
        Route::get('{id}/edit', [PricePlaneController::class, 'editplane'])->name('edit');
        Route::put('{id}/update', [PricePlaneController::class, 'update'])->name('update');
        Route::delete('{id}/delete', [PricePlaneController::class, 'destroy'])->name('destroy');
    });

    Route::group(['as'=>'testimonial.', 'prefix'=>'testimonial/'], function(){
        Route::get('/', [TestimonialController::class, 'index'])->name('index');
        Route::get('create', [TestimonialController::class, 'create'])->name('create');
        Route::post('store', [TestimonialController::class, 'store'])->name('store');
        Route::get('{id}/edit', [TestimonialController::class, 'edit'])->name('edit');
        Route::put('{id}/update', [TestimonialController::class, 'update'])->name('update');
        Route::delete('{id}/delete', [TestimonialController::class, 'destroy'])->name('destroy');
    });

    Route::group(['as'=>'faq.', 'prefix'=>'faq/'], function(){
        Route::get('/', [FaqController::class, 'index'])->name('index');
        Route::get('create', [FaqController::class, 'create'])->name('create');
        Route::post('store', [FaqController::class, 'store'])->name('store');
        Route::get('{id}/edit', [FaqController::class, 'edit'])->name('edit');
        Route::put('{id}/update', [FaqController::class, 'update'])->name('update');
        Route::delete('{id}/delete', [FaqController::class, 'destroy'])->name('destroy');
    });

    Route::group(['as'=>'contact.', 'prefix'=>'contact/'], function(){
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::get('create', [ContactController::class, 'create'])->name('create');
        Route::post('store', [ContactController::class, 'store'])->name('store');
        Route::put('{id}/update', [ContactController::class, 'update'])->name('update');
    });

});

Route::group(['as'=>'home.', 'prefix'=>'home/'], function(){

});
    // Territory Routes
    // Route::group(['as'=>'hero.','prefix'=>'hero/'],function(){
    //     Route::get('/',[HeroController::class, 'index'])->name('index');
        // Route::post('/admin/hero/store',[HeroController::class, 'store_or_update_data'])->name('store.or.update');
    //     // Route::post('edit', 'HeroController@edit')->name('edit');
    //     // Route::post('update', 'HeroController@update')->name('update');
    //     // Route::post('delete', 'HeroController@delete')->name('delete');
    // });

//Start FrontEnd Section//

Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('/about', [FrontEndController::class, 'about'])->name('about');
Route::get('/action', [FrontEndController::class, 'action'])->name('action');
Route::get('/client', [FrontEndController::class, 'client'])->name('client');
Route::get('/contact', [FrontEndController::class, 'contact'])->name('contact');
Route::get('/faq', [FrontEndController::class, 'faq'])->name('faq');
Route::get('/hero', [FrontEndController::class, 'hero'])->name('hero');
Route::get('/portfolio', [FrontEndController::class, 'portfolio'])->name('portfolio');
Route::get('/price', [FrontEndController::class, 'price'])->name('price');
Route::get('/services', [FrontEndController::class, 'services'])->name('services');
Route::get('/skills', [FrontEndController::class, 'skills'])->name('skills');
Route::get('/team', [FrontEndController::class, 'team'])->name('team');
Route::get('/testimonials', [FrontEndController::class, 'testimonials'])->name('testimonials');
Route::get('/whyus', [FrontEndController::class, 'whyus'])->name('whyus');



// Route::get('/admin/hero', [FrontEndController::class, 'hero'])->name('hero');
// Route::get('/admin/hero/form', [FrontEndController::class, 'add'])->name('add');
// Route::post('/admin/hero/store', [FrontEndController::class, 'store_data'])->name('store.or.update');
// Route::get('/admin/hero/edit/{id}', [FrontEndController::class, 'edit'])->name('edit');
// Route::put('/admin/hero/edit/{id}', [FrontEndController::class, 'update_data'])->name('update');
// Route::delete('/admin/hero/{id}', [FrontEndController::class, 'destroy'])->name('destroy');


//End FrontEnd Section//
Auth::routes();

