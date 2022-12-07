<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function gallery(){
        $records = PhotoGallery::where('status', 1)->get();
        return view("front.gallery", compact('records'));
    }
}
