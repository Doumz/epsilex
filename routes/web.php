<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\SiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[WebSiteController::class, 'index'])->name('index');
Route::get('/contact',[WebSiteController::class, 'contact'])->name('contact');
Route::get('/product',[WebSiteController::class, 'product'])->name('product');
Route::get('/services',[WebSiteController::class, 'service'])->name('service');
Route::get('/gallery',[WebSiteController::class, 'gallery'])->name('gallery');

//dashboard 
Route::get('/dashboard',[WebSiteController::class, 'dashboard'])->name('dashboard');
Route::get('/slider',[WebSiteController::class, 'slider'])->name('slider');
Route::get('/texte',[WebSiteController::class, 'texte'])->name('texte');
Route::get('/image',[WebSiteController::class, 'image'])->name('image');

//Add
Route::post('add/slider', [SiteController::class, 'add_slider'])->name("add_slider");
Route::post('add/texte', [SiteController::class, 'add_texte'])->name("add_texte");
Route::post('add/image', [SiteController::class, 'add_img'])->name("add_img");

//update
Route::get('/update/slider/{id}' ,[SiteController::class, 'update_slider'])->name('updateSlider');
Route::post('/update/slider/{id}', [SiteController::class, 'edite_slider'])->name('edite_slider');
Route::get('/update/texte/{id}' ,[SiteController::class, 'update_texte'])->name('update_texte');
Route::post('/update/texte/{id}', [SiteController::class, 'edite_texte'])->name('edite_texte');
Route::get('/update/img/{id}' ,[SiteController::class, 'update_img'])->name('update_img');
Route::post('/update/img/{id}', [SiteController::class, 'edite_img'])->name('edite_img');

//delete
Route::get('/delete/slider/{id}' ,[SiteController::class, 'delete_slider'])->name('deleteSlider');
Route::get('/delete/texte/{id}' ,[SiteController::class, 'delete_texte'])->name('deleteTexte');
Route::get('/delete/img/{id}' ,[SiteController::class, 'delete_img'])->name('deleteImg');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
