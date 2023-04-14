<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\AdminTablesController;
use App\Http\Controllers\DestinationCheckoutController;
use App\Http\Controllers\DestinationCheckoutSummaryController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\DestinationDetailController;
use App\Http\Controllers\DestinationSuccessCheckoutController;
use App\Http\Controllers\DiscoveryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OpenDetailController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PrivateDetailController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
Route::get('/aboutus',[AboutusController::class, 'index'])->name('aboutus');
Route::get('/destination',[DestinationController::class, 'index'])->name('destination');
Route::get('/discovery',[DiscoveryController::class, 'index'])->name('discovery');
Route::get('/package', [PackageController::class, 'index'])->name('package');
Route::get('/destinationdetail', [DestinationDetailController::class, 'index'])->name('destinationdetail');
Route::get('/destinationcheckout', [DestinationCheckoutController::class, 'index'])->name('destinationcheckout');
Route::get('/summarycheck', [DestinationCheckoutSummaryController::class, 'index'])->name('summarycheck');
Route::get('/checkoutsuccess',[DestinationSuccessCheckoutController::class, 'index'])->name('checkoutsuccess');
Route::get('/privatedetail',[PrivateDetailController::class, 'index'])->name('privatedetail');
Route::get('/opendetail',[OpenDetailController::class, 'index'])->name('opendetail');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/process-login', [LoginController::class, 'login'])->name('process-login');
    Route::prefix('admin')->middleware('isAdmin')->group(function(){
        // Admin index route
        Route::get('/adminindex', [AdminIndexController::class, 'index'])->name('adminindex');
        Route::get('/admingallery', [AdminGalleryController::class, 'index'])->name('admingallery');
        Route::get('/admintables', [AdminTablesController::class, 'index'])->name('admintables');
    });

