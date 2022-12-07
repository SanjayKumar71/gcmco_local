@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/news_detail.css') }}">
<!-- Css Stylesheet -->

<!-- section news article detail page start here -->
<section class="news_article_page">
    
    <div class="news_article_banner">
        <figure>
            <img src="{!! asset(uploadsDir().$records->news_image) !!}" class="img-fluid" alt="">
        </figure>
    </div>

    <div class="news_article_content">
        <div class="container">

            <h1>{!! $records->news_heading !!}</h1>
            
            {!! $records->news_description !!}

        </div>
    </div>
</section>
<!-- section news article detail page end here -->

@endsection