<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'HomeController'])->name('home');
Route::get('/about',[HomeController::class, 'AboutController'])->name('about');
Route::get('/our_room',[HomeController::class, 'RoomController'])->name('room');
Route::get('/gallery',[HomeController::class, 'GalleryController'])->name('gallery');
Route::get('/blog',[HomeController::class, 'BlogController'])->name('blog');
Route::get('/contact_us',[HomeController::class, 'ContactController'])->name('contact');
