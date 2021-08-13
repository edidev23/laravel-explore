<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DataController;
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
require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('test-data', [DataController::class, "index"]);
Route::post('send-email', [DataController::class, "send_email"]);
Route::post('send-job', [DataController::class, "send_job"]);

Route::get('test-vue', [DataController::class, "belajar_vue"]);

Route::get('checkout', [CheckoutController::class, "checkout"])->name("checkout.credit-card");
Route::post('checkout', [CheckoutController::class, "afterPayment"]);

Route::get('test-data', [DataController::class, "index"]);

Route::get('/{any}', function () {
    return view("latihan1");
})->where('any', '.*');


