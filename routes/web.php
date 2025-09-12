<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\TeamController;
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
    Route::resource('blogs', BlogController::class);
    Route::resource('teams', TeamController::class);

    Route::get('/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');

});

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about-us', [FrontController::class, 'aboutus'])->name('about');
Route::get('/service', [FrontController::class, 'services'])->name('service');
Route::get('/web-development', [FrontController::class, 'WebDevelopment'])->name('WebDevelopment');
Route::get('/app-development', [FrontController::class, 'AppDevelopment'])->name('AppDevelopment');
Route::get('/digital-marketing', [FrontController::class, 'Digitalmarketing'])->name('Digitalmarketing');
Route::get('/seo', [FrontController::class, 'Seo'])->name('Seo');
Route::get('/graphic-designing', [FrontController::class, 'Graphicdesigning'])->name('Graphicdesigning');
Route::get('/social-media-marketing', [FrontController::class, 'Socialmediamarketing'])->name('Socialmediamarketing');
Route::get('/our-team', [FrontController::class, 'OurTeam'])->name('ourteam');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blog-detail', [FrontController::class, 'blogDetail'])->name('blogDetail');
// Show contact form
Route::get('/contact-us', [FrontController::class, 'contact'])->name('contact');

// Handle form submit
Route::post('/contact-us', [FrontController::class, 'store'])->name('contact.store');
Route::get('/pricing', [FrontController::class, 'price'])->name('price');
Route::get('/mission-vision', [FrontController::class, 'missionvision'])->name('missionvision');
Route::get('/google-ads', [FrontController::class, 'googleads'])->name('googleads');
Route::get('/our-work', [FrontController::class, 'ourwork'])->name('ourwork');
Route::get('/web-solution', [FrontController::class, 'websolution'])->name('websolution');
Route::get('/marketing-solution', [FrontController::class, 'marketingSolution'])->name('marketingSolution');
Route::get('/app-solution', [FrontController::class, 'appSolution'])->name('appSolution');
Route::get('/graphic-solution', [FrontController::class, 'graphicSolution'])->name('graphicSolution');


