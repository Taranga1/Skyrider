<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAppController extends Controller
{
    public function index()
    {
        return view('layouts.user_app');
    }
}