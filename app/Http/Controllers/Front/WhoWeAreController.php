<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\WhatTheySay;
use App\Models\WhoWeAre;
use Illuminate\Http\Request;

class WhoWeAreController extends Controller
{
    public function who_we_are(){
        $records = WhoWeAre::first();
        $whatTheySayRecords = WhatTheySay::where('status', 1)->get();
        return view("front.who_we_are", compact('records', 'whatTheySayRecords'));
    }
}
