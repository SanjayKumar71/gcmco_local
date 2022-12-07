<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    public function getSponsor(){
        $sponsorData = Sponsor::first();
        return view("front.sponsor", compact('sponsorData'));
    }
}
