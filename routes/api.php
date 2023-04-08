<?php

use App\Http\Controllers\ResultController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('results', [ResultController::class,'getData']);