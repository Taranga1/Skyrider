<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result ;
class ResultController extends Controller
{
    function AddResults(Request $req){
        $result = new Result ;
        $result->id=$req->id ;
        $result->symbolnumber=$req->symbolnumber ;
        $result->gpa=$req->gpa ;
        $result->save();
        return redirect("/admin/results/create");
       
    }

    public function DisplayResults(){
        $results = Result::all();
        return view('admin.results.display',compact('results'));
    }

    function getData(){
        return Result::all();
        
    }


}