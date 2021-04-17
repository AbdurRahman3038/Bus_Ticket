<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\RouteController;
use App\Http\Controllers\Backend\TripController;
use App\Http\Controllers\Backend\BusController;

use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\UserController;

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


// FRONTEND ROUTE

// route for homepage
Route::get('/homepage',[HomepageController::class,'homepage'])->name('homepage');

// route for login-registration

Route::get('/login-registration',[UserController::class,'showLoginRegistration'])->name('login.registration.form');






// BACKEND ROUTE




Route::get('/', function () {
    return view('backend.master');
});


//Route for dashboard
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');


//Route for admin
Route::get('/admin',[AdminController::class,'admin'])->name('admin');
Route::post('/admin',[AdminController::class,'create'])->name('admin.create');


// route for customer
Route::get('/customer',[CustomerController::class,'customer'])->name('customer');
Route::post('/customer',[CustomerController::class,'create'])->name('customer.create');


// route for route
Route::get('/route',[RouteController::class,'route'])->name('route');
Route::post('/route',[RouteController::class,'create'])->name('route.create');


// route for trip
Route::get('/trip',[TripController::class,'trip'])->name('trip');
Route::post('/trip',[TripController::class,'create'])->name('trip.create');


// route for trip
Route::get('/bus',[BusController::class,'bus'])->name('bus');
Route::post('/bus',[BusController::class,'create'])->name('bus.create');












//<div style="user-select:none;border:1px solid">
