<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\HomeContent;
use App\Models\AboutUs;
use App\Models\GiveUsForm;
use App\Models\DonationType;
use App\Models\DonationAmount;
use App\Models\Campaign;
use App\Models\SubCampaign;

class SiteController extends Controller
{
    public function index(){
        $data = HomeContent::first();
        return view("front.index", compact('data'));
    }

    public function default_give($id){
        $data = Campaign::where('id', $id)->first();
        $donationTypeData   = DonationType::get();
        $donationAmountData = DonationAmount::get();
        return view("front.default_give", compact('data','donationTypeData','donationAmountData'));
    }

    public function where_most_needed(){
        return view("front.where_most_needed");
    }

    public function women_distress(){
        return view("front.women_distress");
    }

    public function get_involved_form($id, $campaign_id = ''){
        
        if( isset($campaign_id) && $campaign_id != '')
            $data = SubCampaign::where('id', $id)->first();
        else
            $data = Campaign::where('id', $id)->first();
        
        $donationTypeData   = DonationType::get();
        $donationAmountData = DonationAmount::get();
        return view("front.get_involved_form", compact('data','donationTypeData','donationAmountData'));
    }

    public function giveus_form($id){
        $donationTypeData = DonationType::get();
        $donationAmountData = DonationAmount::get();
        return view("front.giveus_form", compact('donationTypeData', 'donationAmountData'))->with(['id'=> $id]);
    }

    public function get_involved(){
        return view("front.get_involved");
    }

}
