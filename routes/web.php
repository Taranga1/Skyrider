<?php

use App\Http\Controllers\AdmissionController;
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

Route::get('/sky_location', function () {
    return view('location.create');
});


Route::get('/results', function () {
    return view('result.result');
});


Route::get('/gallery', function () {
    return view('gallery');
});



Auth::routes();
Route::get('/admission/create',[App\Http\Controllers\AdmissionController::class, 'admission'])->name('admission.create');

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

	Route::get('/results/display',[App\Http\Controllers\ResultController::class , 'DisplayResults']);
	Route::get('/admission/display',[App\Http\Controllers\UserAdmissionDisplay::class , 'DisplayAdmission']);
    Route::get('/users/index',[App\Http\Controllers\Admin\UserController::class , 'index']);
    // Route::get('/brochure',[App\Http\Controllers\BrochureController::class , 'brochure']);
});

Route::view('/admin/results/create','admin.results.create');

Route::POST('/admin/results',[ResultController::class,'AddResults']);
Route::POST('/admission/create',[AdmissionController::class,'store']);