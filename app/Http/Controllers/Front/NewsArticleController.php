<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\NewsArticle;
use Illuminate\Http\Request;

class NewsArticleController extends Controller
{
    public function news_article(){
        $records = NewsArticle::where('status', 1)->get();
        return view('front.news_article', compact('records'));
    }

    public function news_article_detail($id){
        $records = NewsArticle::where('id', $id)->first();
        return view('front.news_article_detail', compact('records'));
    }

}
