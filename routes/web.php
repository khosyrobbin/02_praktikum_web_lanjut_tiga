<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
//praktikum 2
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArtikelController;
//praktikum3
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;

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
// //Praktikum 2
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/artikel/{id}', [PageController::class, 'artikel']);

//praktikum 3
//1
Route::get('/',[HomeController::class,'index']);

//2 Menampilkan daftar product 
Route::prefix('category')->group(function () {
    Route::get('/marbel-education-games',[CategoryController::class,'eduGames']);
    Route::get('/marbel-friend-kids-games',[CategoryController::class,'kidsGames']);
    Route::get('/riri-story-books',[CategoryController::class,'storyBook']);
    Route::get('/kolak-kids-songs',[CategoryController::class,'kidsSong']);
});

//3 Menampilkan Daftar berita
Route::get('/news',[BeritaController::class,'berita1']);
Route::get('/news/{param}',[BeritaController::class,'berita']);

//4 Menampilkan Daftar Program
Route::prefix('program')->group(function () {
    Route::get('/karir',[ProgramController::class,'karir']);
    Route::get('/magang',[ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri',[ProgramController::class, 'kunjungan']);
});

//5 Menampilkan About Us
Route::get('/about-us',[AboutController::class,'About']);

//6 Menampilkan Contact Us
Route::get('/contact-us',[ContactUsController::class,'contact']);

