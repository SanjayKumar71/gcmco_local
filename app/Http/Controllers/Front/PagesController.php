<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    public function terms_condition(){
        $data = Page::where('slug','=','terms-conditions')->first();
        return view('front.terms-condition', compact('data'));
    }

    public function privacy_policy(){
        $data = Page::where('slug','=','privacy-policy')->first();
        return view('front.privacy-policy', compact('data'));
    }

    public function cancellation_policy(){
        $data = Page::where('slug','=','cancellation-policy')->first();
        return view('front.cancellation-policy', compact('data'));
    }
}
