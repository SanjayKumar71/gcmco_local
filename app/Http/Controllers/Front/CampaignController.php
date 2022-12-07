<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaign;
class CampaignController extends Controller
{
    public function getCampaignsData(){
        $campaigns = Campaign::where('status', 1)->where('is_featured', 1)->get();
        return view('front.give')->with('campaigns', $campaigns);
    }
}
