<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\HomeContent;
use App\Models\HomeSectionThree;
use App\Models\AboutUs;
use App\Models\AboutUsProgramSection;
use App\Models\PartnershipAffiliation;

class SiteController extends Controller
{
    public function index(){
        $data = HomeContent::first();
        $homeSectionThree = HomeSectionThree::get();
        $partnershipAffiliation = PartnershipAffiliation::get();
        return view("front.index", compact('data','homeSectionThree','partnershipAffiliation'));
    }

    public function about_us(){
        $data = AboutUs::first();
        if(!empty($data['about_us_process_section_slider_image']))
            $data['about_us_process_section_slider_image'] = json_decode($data['about_us_process_section_slider_image']);
        
        $aboutUsProgramSectionData = AboutUsProgramSection::get();
        
        return view("front.about-us", compact('data','aboutUsProgramSectionData'));
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

    public function everything_disc(){
        return view('front.everything-disc');
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

    public function first_aid(){
        return view('front.first-aid');
    }

    public function heartsaver(){
        return view('front.heartsaver');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/sign-in');
    }

    public function programDetail(){
        return view('front.program-detail');
    }
}
