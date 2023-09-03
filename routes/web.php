<?php

use Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as Admin;
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
Route::group(['prefix' => 'admin'], function () {

    Route::get('dashboard', [Admin\DashboardController::class, 'index'])->name('dashboard.index');

});
