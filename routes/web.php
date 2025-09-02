<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;


Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    return 'DONE'; //Return anything
});
Auth::routes();


Route::get('/admin', [PageController::class, 'adminlogin'])->name('admin')->middleware('guest:admin');

Route::prefix('admin')->middleware('auth:admin')->group(function () {
    Route::get('/profile', [PageController::class, 'AdminProfile'])->name('profile');
    Route::post('/profile', [PageController::class, 'profilesave'])->name('profile');
    Route::post('/profileupdate', [PageController::class, 'profileupdate'])->name('profileupdate');
    Route::get('/adminchangepassword', [PageController::class, 'adminchangepassword'])->name('adminchangepassword');
    Route::post('/adminupdatepassword', [PageController::class, 'adminupdatepassword'])->name('adminupdatepassword');

    //dashboard
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

});

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about-us', [FrontController::class, 'aboutus'])->name('about');
Route::get('/service', [FrontController::class, 'services'])->name('service');

