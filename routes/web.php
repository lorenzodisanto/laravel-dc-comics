<?php

use Illuminate\Support\Facades\Route;

// importo il controller
use App\Http\Controllers\ComicController;

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

Route::get("/", function(){
    return view("home");
})->name("home");

// metodo resource per generare le rotte
Route::resource("comics", ComicController::class);
