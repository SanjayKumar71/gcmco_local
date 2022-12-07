<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function video(){
        $records = Video::where('status', 1)->get();
        return view("front.video", compact('records'));
    }
}
