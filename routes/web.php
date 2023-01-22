<?php

use App\Http\Controllers\dataProspekController;
use App\Models\dataProspek;
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

Route::get('/on-progress', [dataProspekController::class, 'showDataProgress']);

Route::get('/validated', [dataProspekController::class, 'showDataValidated']);

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

Route::get('/addmarketing', function () {
    return view('addmarketing', [
        "title" => "Add Marketing"
    ]);
});

Route::get('/inputProspek', function () {
    return view('inputProspek', [
        "title" => "Prospek"
    ]);
});

// buat tab marketings jangan prospek dimana didalamnya ada nama2 marketing dan ketika di klik baru mengarah ke prospek implementasu sama seperti halam 1 & 2 di video