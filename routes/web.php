<?php

use App\Http\Controllers\ResultController;
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
    return view('welcome');
});

Route::get('/brochure', function () {
    return view('brochure.brochure');
});

Route::view('/admin/results/create','admin.results.create');
Route::view('/gallery','gallery');
Route::POST('/admin/results',[ResultController::class,'AddResults']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\UserAppController::class, 'index'])->name('layouts.user_app');
Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');

Route::group(['prefix' => 'admin'], function() {
	Route::group(['middleware' => 'admin.guest'], function(){
		Route::view('/login','admin.login')->name('admin.login');
		Route::post('/login',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
	});
	
	Route::group(['middleware' => 'admin.auth'], function(){
		Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
	});

    Route::get('/users/index',[App\Http\Controllers\Admin\UserController::class , 'index']);
    Route::get('/results/display',[App\Http\Controllers\ResultController::class , 'DisplayResults']);
    // Route::get('/brochure',[App\Http\Controllers\BrochureController::class , 'brochure']);
});
