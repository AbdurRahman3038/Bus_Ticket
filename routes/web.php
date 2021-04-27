<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\TripController;
use App\Http\Controllers\Backend\BusController;
use App\Http\Controllers\Backend\UserController as BackendUserController;

use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\TripviewController;
use App\Http\Controllers\Frontend\SeatController;
use App\Http\Controllers\Frontend\BookingController;


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
Route::post('/registration',[UserController::class,'registration'])->name('registration');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/user',[BackendUserController::class,'displayUser'])->name('display.user');


// route for tripview
Route::post('/tripview',[TripviewController::class,'tripview'])->name('tripview');



// route for seat
Route::get('/seat',[SeatController::class,'seat'])->name('seat');
Route::post('/seat',[SeatController::class,'create'])->name('seat.create');

// route for booking

Route::get('/booking',[BookingController::class,'bookingTable'])->name('bookingTable');







// BACKEND ROUTE


//admin login route
Route::get('login',[BackendUserController::class,'loginForm'])->name('admin.login');
Route::post('do-login',[BackendUserController::class,'doLogin'])->name('admin.dologin');







Route::group(['middleware'=>'admin-auth'],function (){
// Route::get('/',[DashboardController::class,'home'])->name('home');


//base url
Route::get('/', function () {
    return view('backend.master');
});


//admin logout route
Route::get('/admin/logout',[BackendUserController::class,'logout'])->name('admin.logout');


//Route for dashboard
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');


//Route for admin
Route::get('/admin',[AdminController::class,'admin'])->name('admin');
Route::post('/admin',[AdminController::class,'create'])->name('admin.create');


// route for customer
Route::get('/customer',[CustomerController::class,'customer'])->name('customer');
Route::post('/customer',[CustomerController::class,'create'])->name('customer.create');


// route for location
Route::get('/location',[LocationController::class,'location'])->name('location');
Route::post('/location',[LocationController::class,'create'])->name('location.create');


// route for trip
Route::get('/trip',[TripController::class,'trip'])->name('trip');
Route::post('/trip',[TripController::class,'create'])->name('trip.create');


// route for trip
Route::get('/bus',[BusController::class,'bus'])->name('bus');
Route::post('/bus',[BusController::class,'create'])->name('bus.create');

});










//<div style="user-select:none;border:1px solid">
