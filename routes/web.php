<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MassageController;
// use App\Models\Massage;
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
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/send/{id}', [MassageController::class, 'send'])->name('message.send');
Route::post('/send/{id}', [MassageController::class, 'store'])->name('message.store');
route::get('last-ten-visits-date',[HomeController::class,'lastvisit'])->name('lastvisit');
Route::get('send/delete/{id}',[MassageController::class,'delete'])->name('send.delete');
