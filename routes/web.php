<?php

use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AdminServicesController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeBlogController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Events\Login;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/blog', [HomeBlogController::class, 'index']);
Route::get('/blog/show/{id}', [HomeBlogController::class, 'show']);
Route::get('/contact',[HomeContactController::class,'index']);
Route::post('/contact/send',[HomeContactController::class,'send']);





Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin']);

//ADMIN

Route::prefix('/admin')->middleware('auth')->group(function () {
   Route::get('/logout',[AdminAuthController::class,'logout']);
   Route::get('/dashboard', [AdminDashboardController::class, 'index']);
   Route::resource('/posts/blog',AdminBlogController::class);
   Route::resource('/posts/kategori',AdminKategoriController::class);
   Route::resource('/pesan',AdminPesanController::class);
   Route::resource('/user', AdminUserController::class);
   Route::resource('/banner', AdminBannerController::class);
   Route::resource('/services', AdminServicesController::class);
   Route::resource('/about', AdminServicesController::class);
   Route::get('/about',[ AdminAboutController::class, 'index'] );
   Route::put('/about/update',[AdminAboutController::class, 'update']);
   
  //  Route::put('/about/update', [AdminAboutController::class, 'update'])->name('about.update');


});

