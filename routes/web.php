<?php

use App\Http\Controllers\dataProspekController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\addMarketingController;
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

Route::get('/mhome', function () {
    return view('marketingHome', [
        "title" => "Home"
    ]);
});

Route::get('/bmhome', function () {
    return view('bmHome',[
        "title" => "Home"
    ]);
});

Route::get('/branchManager', [dataProspekController::class, 'bm']);
// Route::get('/mycontroller/{href}', [MyController::class, 'index']);
Route::get('/marketing', [dataProspekController::class, 'marketing']);

Route::get('/marketing/{slug}', [dataProspekController::class, 'showMarketing']);

Route::post('/marketing/inputProspek', [dataProspekController::class, 'store']);

Route::get('/branchManager/{slug}', [dataProspekController::class, 'showBm']);

// Route::get('/index', [loginController::class, 'index']);

// Route::post('/index', [loginController::class, 'authenticate']);

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('home', [HomeController::class, 'home'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/addmarketing', [addMarketingController::class, 'index']);

Route::post('/addmarketing', [addMarketingController::class, 'store']);

Route::get('/bmValidated', function () {
    return view('bmValidated',[
        "title" => "Prospek"
    ]);
});

Route::get('/bmProgress', function () {
    return view('bmProgress', [
        "title" => "Prospek"
    ]);
});

// Route::get('/addmarketing', function () {
//     return view('addmarketing', [
//         "title" => "Add Marketing"
//     ]);
// });
