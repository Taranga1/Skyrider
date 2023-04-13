<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result ;
class ResultController extends Controller
{
    

    public function DisplayResults(){
        $result = Result::all();
        return response()->json(['result' => $result()] ,200);
    }

    function getData(){
        return Result::all();
    }
}
