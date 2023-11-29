<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
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
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/appointment', function () {
    return view('appointment');
})->name('appointment.create');

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');

Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

Route::get('/migrate', function(){
    Artisan::call('migrate');
    dd('migrated!');
});


require __DIR__.'/admin.php';
require __DIR__.'/auth.php';
