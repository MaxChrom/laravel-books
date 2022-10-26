<?php

use App\Http\Controllers\Api\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;

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

Route::get('/', [HomePageController::class, 'showCollection'])->name('homePage');
Route::get('/about', function () {
    return view('index.about');
})->name('about');
Route::get('/api/test/array', [TestController::class, 'arrayResponse']);
Route::get('/api/test/model', [TestController::class, 'modelResponse']);
Route::get('/api/test/book/{book_id}', [TestController::class, 'book']);
Route::get('/api/test/collection', [TestController::class, 'collectionResponse']);
Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');
// Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');
