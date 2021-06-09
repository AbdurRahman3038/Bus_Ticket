<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\LocationController;
use App\Http\Controllers\Backend\TripController;
use App\Http\Controllers\Backend\BusController;
use App\Http\Controllers\Backend\UserController as BackendUserController;

use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\TripviewController;
use App\Http\Controllers\Frontend\SeatController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\TicketController;
use App\Http\Controllers\Frontend\Mail;
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
// Route::get('/homepage',[HomepageController::class,'homepageDesign'])->name('homepage');

// route for login-registration

Route::get('/login-registration',[UserController::class,'showLoginRegistration'])->name('login.registration.form');
Route::post('/registration',[UserController::class,'registration'])->name('registration');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/user',[BackendUserController::class,'displayUser'])->name('display.user');


// route for tripview
Route::post('/tripview',[TripviewController::class,'tripview'])->name('tripview');



Route::group(['middleware'=>'user-auth'],function (){

// route for seat
Route::get('/seat',[SeatController::class,'seat'])->name('seat');
Route::post('/seat',[BookingController::class,'create'])->name('seat.create');

// route for booking
Route::get('/booking',[BookingController::class,'bookingTable'])->name('bookingTable');

// route for payment
Route::get('/payment',[PaymentController::class,'payment'])->name('payment');
Route::post('/payment/create',[PaymentController::class,'create'])->name('payment.create');

// route for ticket
Route::get('/ticket',[TicketController::class,'ticket'])->name('ticket');
Route::get('/ticket/view/{id}',[TicketController::class,'ticketView'])->name('ticketView');
Route::get('/ticket/cancel/{id}',[TicketController::class,'ticketCancel'])->name('ticketCancel');

});









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


// //Route for admin
// Route::get('/admin',[AdminController::class,'admin'])->name('admin');
// Route::post('/admin',[AdminController::class,'create'])->name('admin.create');


// route for customer
Route::get('/customer',[CustomerController::class,'customer'])->name('customer');
Route::post('/customer',[CustomerController::class,'create'])->name('customer.create');

// route for report
Route::get('/report',[ReportController::class,'report'])->name('report');



// route for location
Route::get('/location',[LocationController::class,'location'])->name('location');
Route::post('/location',[LocationController::class,'create'])->name('location.create');
Route::get('/location/edit/{id}', [LocationController::class, 'edit'])->name('location.edit');
Route::post('/location/update/{id}', [LocationController::class, 'update'])->name('location.update');


// route for trip
Route::get('/trip',[TripController::class,'trip'])->name('trip');
Route::post('/trip',[TripController::class,'create'])->name('trip.create');

Route::post('/trip/search',[TripController::class,'search'])->name('trip.search');

// route for trip
Route::get('/bus',[BusController::class,'bus'])->name('bus');
Route::post('/bus',[BusController::class,'create'])->name('bus.create');




// route for booking and booking details
Route::get('/bookingBackend',[BookingController::class,'bookingBackend'])->name('bookingBackend');

Route::get('/bookingBackend/bookingDetails',[BookingController::class,'bookingDetails'])->name('bookingDetails');

// route for trip
Route::get('/paymentBackend',[PaymentController::class,'paymentBackend'])->name('paymentBackend');
Route::get('/paymentBackend/confirm/{id}',[PaymentController::class,'paymentBackendConfirm'])->name('paymentBackendConfirm');
Route::get('/paymentBackend/cancel/{id}',[PaymentController::class,'paymentBackendCancel'])->name('paymentBackendCancel');

});







//<div style="user-select:none;border:1px solid">
