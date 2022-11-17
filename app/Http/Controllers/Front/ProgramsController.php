<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programs;
use Illuminate\Support\Facades\Auth;

class ProgramsController extends Controller
{
    public function programsDetail($programId)
    {
        $programs = Programs::with('category')->with('programImages')->with('programType')->with('programSession')->where('id','=',$programId)->first();
        
        if($programs->category->title == 'Pediatric First & CPR Combo')
            return view('front.heartsaver')->with('programs', $programs);
        elseif($programs->category->title == 'Adult First Aid & CPR Combo')
            return view('front.first-aid')->with('programs', $programs);
        else
            return view('front.everything-disc')->with('programs', $programs);
    }

    public function programsDetailBook($programId,$programSessionId)
    {
        if (Auth::check()) {
            $programs = Programs::with('category')->with('programSession')->where('id','=',$programId)->first();
            return view('front.program-detail')->with('programs', $programs)->with('programSessionId',$programSessionId);
        } else {
            return view('front.sign-in')->with('error', 'Please Login First To Book Your Session.');
        }
    }
    
}
