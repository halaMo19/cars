<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TestimoniaiController;


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);
Route::get('index', [MainController::class, 'index'])->name('index');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('contact', [MainController::class, 'contact'])->name('contact');
Route::get('testimonial', [MainController::class, 'testimonial'])->name('testimonial');
Route::get('blog', [MainController::class, 'blog'])->name('blog');
Route::get('listing', [MainController::class, 'listing'])->name('listing');
Route::get('main', [MainController::class, 'main'])->name('main');
Route::get('cars', [MainController::class, 'cars'])->name('cars');
Route::get('single', [MainController::class, 'single'])->name('single');
Route::get('addCategory', [CategoryController::class, 'index'])->name('addCategory');
Route::get(' testimonials', [TestimoniaiController::class, 'index'])->name(' testimonials');





Route::get('/index', [App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('cars', [CarController::class, 'index'])->name('cars');
Route::get('addCar', [CarController::class, 'create'])->name('addCar');

Route::post('ReciveCar',[CarController::class, 'store'])->name('ReciveCar');
Route::get('editCar/{id}', [CarController::class, 'edit'])->name('editCar');
Route::put('/update/{id}', [CarController::class, 'update'])->name('update');
Route::get('delete/{id}', [CarController::class, 'destroy'])->name('delete');

Route::get('categories', [CategoryController::class, 'index'])->name('categories');
Route::get('addCategory', [CategoryController::class, 'create'])->name('addCategory');

Route::post('ReciveCategory',[CategoryController::class, 'store'])->name('ReciveCategory');
Route::get('editCar/{id}', [CategoryController::class, 'edit'])->name('editCar');
Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
Route::get('delete/{id}', [CategoryController::class, 'destroy'])->name('delete');

Route::get('Messages', [MessageController::class, 'index'])->name('Messages');