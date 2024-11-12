<?php

use App\Exports\CountryTemplateExport;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/countries', CountryController::class);

    Route::get('/download-country-template', function () {
        return Excel::download(new CountryTemplateExport, 'country_template.xlsx');
    })->name('downloadCountriesTemplate');

    Route::post('/upload-countries', [CountryController::class, 'uploadCountries'])->name('uploadCountries');
});

Route::get('/payment-methods', [PageController::class, 'showPaymentOptionsPage'])->name('paymentOptions');
Route::get('/technicians-finder', [PageController::class, 'showTechniciansFinder'])->name('techniciansFinder');
