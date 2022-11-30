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

class SiteController extends Controller
{
    public function index(){
        $data = HomeContent::first();
        return view("front.index", compact('data'));
    }

    public function history(){
        // $data = History::first();
        // return view("front.history", compact('data'));
        return view("front.history");
    }

    public function gcm_team(){
        return view("front.gcm_team");
    }

    public function statement_of_faith(){
        return view("front.statement_of_faith");
    }

    public function who_we_are(){
        return view("front.who_we_are");
    }

    public function sponsor(){
        return view("front.sponsor");
    }

    public function news_article(){
        return view("front.news_article");
    }

    public function gallery(){
        return view("front.gallery");
    }

    public function video(){
        return view("front.video");
    }

    public function where_most_needed(){
        return view("front.where_most_needed");
    }

    public function women_distress(){
        return view("front.women_distress");
    }

    public function hungary_kid(){
        return view("front.hungary_kid");
    }

    public function contact_information(){
        return view("front.contact_information");
    }

    public function request_speaker(){
        return view("front.request_speaker");
    }

    public function giveus_form($id){
        $donationTypeData = DonationType::get();
        $donationAmountData = DonationAmount::get();
        return view("front.giveus_form", compact('donationTypeData', 'donationAmountData'))->with(['id'=> $id]);
    }

    public function news_article_detail(){
        return view("front.news_article_detail");
    }

    public function get_involved(){
        return view("front.get_involved");
    }
    


    // Previous Work

    public function about_us(){
        $data = AboutUs::first();
        if(!empty($data['about_us_process_section_slider_image']))
            $data['about_us_process_section_slider_image'] = json_decode($data['about_us_process_section_slider_image']);
        
        return view("front.about-us", compact('data'));
    }

    public function contact_us(){
        return view('front.contact-us');
    }

    public function sign_in(){
        return view('front.sign-in');
    }

    public function sign_up(){
        return view('front.sign-up');
    }

    public function enter_email(){
        return view('front.enter-email');
    }

    public function change_password(){
        return view('front.change-password');
    }

    public function account(){
        if(Auth::check())
        {
            return view('front.account');
        }
        return redirect('/sign-in')->withErrors([
            'logginfirst' => 'Please Login first to access your account.'
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/sign-in');
    }

}
