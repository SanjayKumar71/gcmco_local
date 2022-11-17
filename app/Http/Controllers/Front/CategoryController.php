<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Programs;

class CategoryController extends Controller
{
    public function bookProgram($programId,$programSessionId){
        $records = Category::with('categoryParent')->with('programs')->get();
        $selectedProgram = Programs::with('category')->with('programSession')->where('id','=',$programId)->first();
        return view('front.book-now', compact(['records','selectedProgram','programSessionId' => 'programSessionId']));
        
    }
}
