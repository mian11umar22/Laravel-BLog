<?php

use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\admin\CategoryController as AdminCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SubscriberController;

Route::get('/', [CategoryController::class, 'index'])->name('/');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/article/{slug}', [CategoryController::class, 'article'])->name('article.show');
Route::get('search',[SearchController::class,'search'])->name('search');
Route::get('About',[CategoryController::class, 'about'])->name('About');
Route::get('Contact',[ContactController::class,'contact'])->name('Contact');
Route::post('contact',[ContactController::class, 'contactform'])->name('contactform');
Route::get('signup',[AuthController::class, 'signupshow'])->name('signupshow');
Route::post('Signup',[AuthController::class, 'signup'])->name('signup');
Route::get('Login',[AuthController::class, 'loginshow'])->name('loginshow');
Route::post('login',[AuthController::class, 'login'])->name('login');
Route::get('forgotpassword',[AuthController::class, 'forgotshow'])->name('forgotshow');
Route::post('showforgotpassword',[AuthController::class, 'forgotform'])->name('forgotform');
Route::get('resetpassword/{token}',[AuthController::class, 'resetshow'])->name('resetshow');
Route::post('resetform',[AuthController::class, 'resetfrom'])->name('resetform');
    
//admin routes
Route::get('dashboard',[DashboardController::class, 'view'])->middleware('Auth:admin')->name('dashboard');
Route::get('logout',[AuthController::class, 'logout'])->name('logout');
Route::resource('cat',AdminCategoryController::class)->middleware('Auth:admin');
Route::resource('art',ArticleController::class)->middleware('Auth:admin');
Route::resource('subscriber',SubscriberController::class)->middleware('Auth:admin');
 





// Validation → ✅
// Form validation, custom rules, error messages

// Migrations → 🗄️
// Database structure changes, schema builder

// Seeding → 🌱
// Database seeding, test data generation

// Factories => 🏭
// Model factories, fake data generation