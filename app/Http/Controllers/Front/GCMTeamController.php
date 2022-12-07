<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\GCMTeam;
use App\Models\WhatTheySay;
use Illuminate\Http\Request;

class GCMTeamController extends Controller
{
    public function gcm_team(){
        $records            = GCMTeam::where('status', 1)->get();
        $whatTheySayRecords = WhatTheySay::where('status', 1)->get();
        return view("front.gcm_team", compact('records', 'whatTheySayRecords'));
    }
}
