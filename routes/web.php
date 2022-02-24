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
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\AdvertiseController;
use App\Http\Controllers\PostController;
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
Route::get('/category_list/{id}', [FrontendController::class, 'category_list'])->name('category.list');
Route::get('/user-login', [FrontendController::class, 'login'])->name('user.login');
Route::post('/signup-store',[UserController::class, 'signup'])->name('signup.store');
Route::post('/login-store',[UserController::class, 'login'])->name('login.store');
Route::get('/user-registration', [FrontendController::class, 'registration'])->name('user.registration');
Route::get('/terms-condition', [FrontendController::class, 'terms'])->name('terms.condition');
Route::get('/privacy-policy', [FrontendController::class, 'privacy'])->name('privacy.policy');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about.us');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact.us');
//post
Route::get('/post_list/{id}', [PostController::class, 'index'])->name('post.list');
Route::get('/post_single/{id}', [PostController::class, 'single'])->name('post.single');

Route::get('/search',[SearchController::class, 'search']);

Route::get('/password-reset-form', [FrontendController::class, 'passwordReset'])->name('password.reset.form');
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
    Route::resource('advertise', AdvertiseController::class);
    Route::get('/user-list', [UserController::class, 'userlist'])->name('user.list');
    Route::get('/user-delete', [UserController::class, 'delete'])->name('user.delete');
    Route::get('/user-admin-edit/{id}', [UserController::class, 'edit'])->name('user.admin.edit.form');
    Route::post('/user-admin-update/{id}', [UserController::class, 'update'])->name('user.admin.update');
    Route::delete('/selected-students', [AdvertiseController::class, 'deletedCheckedStudents'])->name('student.deleteSelected');

    Route::get('/free-ad-permission/{id}', [UserController::class, 'free'])->name('free.ad.permission');
    Route::get('/paid-ad-permission/{id}', [UserController::class, 'paid'])->name('paid.ad.permission');
    Route::get('/multiple-ad-permission/{id}', [UserController::class, 'multiple'])->name('multiple.ad.permission');

    Route::get('/free-ad-neg/{id}', [UserController::class, 'free_neg'])->name('free.ad.neg');
    Route::get('/paid-ad-neg/{id}', [UserController::class, 'paid_neg'])->name('paid.ad.neg');
    Route::get('/multiple-ad-neg/{id}', [UserController::class, 'multiple_neg'])->name('multiple.ad.neg');
});



Route::group(['middleware' => ['auth','user']], function () {
    Route::get('/user_dashboard',[UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/post-role', [FrontendController::class, 'role'])->name('post.role');
    Route::get('/post-ad', [FrontendController::class, 'postad'])->name('post.ad');
    Route::get('/choose-location/{id}', [FrontendController::class, 'choose'])->name('choose.location');
    Route::get('/choose-category/{id}', [FrontendController::class, 'category'])->name('choose.category');
    Route::get('/choose-subcategory/{id}', [FrontendController::class, 'subcategory'])->name('choose.subcategory');
    Route::get('/add-credit', [FrontendController::class, 'addCredit'])->name('add.credit');
    //free ad
    Route::get('/user-adform/{id}', [FrontendController::class, 'adform'])->name('user.adform');
    Route::post('/post-adform', [FrontendController::class, 'adstore'])->name('adstore');
    Route::get('/preview-adform', [FrontendController::class, 'preview'])->name('preview.adform');
    Route::post('/post-ad', [FrontendController::class, 'post_ad'])->name('post_ad');
    Route::get('/ad-confirm', [FrontendController::class, 'adConfirm'])->name('ad_confirm');

    //paid single
    Route::get('/paid-adform/{id}', [FrontendController::class, 'payment'])->name('paid.adform');
    //pain single

    Route::get('/advertise/{advertise}/edit', [FrontendController::class, 'editAdform'])->name('edit.adform');
    Route::put('/update-ad/{id}', [FrontendController::class, 'update_ad'])->name('adupdate');
  
    Route::get('advertise/{advertise}', [AdvertiseController::class, 'show'])->name('advertise.show');
    Route::delete('advertise/{advertise}', [AdvertiseController::class, 'destroy'])->name('advertise.destroy');
    //Route::resource('advertise', AdvertiseController::class);
});
