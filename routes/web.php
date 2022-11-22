<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

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

Route::get('/school', [App\Http\Controllers\SchoolController::class, 'index'])->name('school-index');
Route::get('/create', [App\Http\Controllers\SchoolController::class, 'create'])->name('school-create');
Route::post('/store', [App\Http\Controllers\SchoolController::class, 'store'])->name('school-store');

// todo: add the namespace => (gak tau yang mana yang dipake)
// Route::group(['namespace' => 'SchoolController'], function () {
//     Route::get('/school', 'SchoolController@index')->name('school-index');
//     Route::get('school/create', 'SchoolController@create')->name('school-create');
// });

//Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});

