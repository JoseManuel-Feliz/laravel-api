<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\StatusController as AdminStatusController;
use App\Http\Controllers\Admin\TechnologyController as AdminTechnologyController;
use App\Http\Controllers\Guest\ProjectController as GuestProjectController;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// | Guest Routes
Route::name('guest.')->group(function () {
    Route::get('/', [GuestProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/{id}', [GuestProjectController::class, 'show'])->name('projects.show');
});

// | Admin Routes
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::resource('/projects', AdminProjectController::class);
    Route::resource('/statuses', AdminStatusController::class);
    Route::resource('/technologies', AdminTechnologyController::class);
});