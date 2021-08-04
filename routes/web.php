<?php

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

require __DIR__ . '/auth.php';
