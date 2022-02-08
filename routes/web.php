<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SubRegionController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use Laravel\Socialite\Facades\Socialite;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/category_list', [FrontendController::class, 'category_list'])->name('category.list');
Route::get('/user-login', [FrontendController::class, 'login'])->name('user.login');
Route::post('/signup-store',[UserController::class, 'signup'])->name('signup.store');
Route::post('/login-store',[UserController::class, 'login'])->name('login.store');
Route::get('/user-registration', [FrontendController::class, 'registration'])->name('user.registration');

Auth::routes();

Route::get('auth/google', [GoogleController::class,'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class,'handleCallback']);

Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('region', RegionController::class);
    Route::resource('subregion', SubRegionController::class);
    Route::resource('city', CityController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('subcategory', SubcategoryController::class);
    Route::resource('about', AboutusController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('term', TermController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('role', RoleController::class);
});



Route::group(['middleware' => ['auth','user']], function () {
    Route::get('/user_dashboard',[UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/post-role', [FrontendController::class, 'role'])->name('post.role');
    Route::get('/post-ad', [FrontendController::class, 'postad'])->name('post.ad');
    Route::get('/choose-location', [FrontendController::class, 'choose'])->name('choose.location');
    Route::get('/choose-category/{id}', [FrontendController::class, 'category'])->name('choose.category');
    Route::get('/choose-subcategory/{id}', [FrontendController::class, 'subcategory'])->name('choose.subcategory');
    Route::get('/user-adform/{id}', [FrontendController::class, 'adform'])->name('user.adform');
    Route::post('/post-adform', [FrontendController::class, 'adstore'])->name('adstore');
});