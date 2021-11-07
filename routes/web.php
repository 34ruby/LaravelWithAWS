<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/upload', UploadController::class)->middleware(['auth']);;


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth']);;

Route::get('/view', [ViewController::class, "index"])->middleware(['auth']);;


// Route::get('/upload', [UploadController::class, 'index']);
// Route::post('/upload', [UploadController::class, 'store']);
