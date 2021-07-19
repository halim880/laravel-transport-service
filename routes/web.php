<?php

use App\Support\MyPaginator;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\TransportQueryController;
use App\Models\Transport;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource("/transports", TransportController::class)->except(["update"]);
Route::get("/transport/{transport}/destroy", [TransportController::class, "destroy"]);
Route::post("/transport/{transport}/update", [TransportController::class, "update"]);


Route::get("/show_by_date/{date}", [TransportQueryController::class, "show_by_date"])->name("show_by_date");
Route::post("/search_by_date", [TransportQueryController::class, "search_by_date"])->name("search_by_date");
Route::get("/search_by_date_to_date/form", [TransportQueryController::class, "search_by_date_to_date"])->name("search_by_date_to_date");
Route::post("/show_by_date_to_date", [TransportQueryController::class, "show_by_date_to_date"])->name("show_by_date_to_date");
Route::get("search_by_date/form", [TransportQueryController::class, "date_form"]);

