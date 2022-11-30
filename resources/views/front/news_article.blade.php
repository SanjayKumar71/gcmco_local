@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/news_aricle.css') }}">
<!-- Css Stylesheet -->

<!-- section news and article start here -->
<section class="news_article_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>News & Articles</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;News & Articles</p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <!-- section body start here -->
    <section class="news_article_sec">
        <!-- 8th section news and article start here -->
        <section class="eight_sec news_article_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="news_art_left">
                            <hr class="black_liner">
                            <h4 class="orange_heading">From the Blog</h4>
                            <h2 class="heading1">News & Articles</h2>
                        </div>
                    </div>
                    <div class="col-md-3 align-self-center">
                        
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="product-sec">
                                    <div class="product-img">
                                        <a href="{{ route('news_article_detail') }}">
                                            <img class="img-fluid" src="{{ asset('front_assets/img/home/homenewsarticles1.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <a href="{{ route('news_article_detail') }}">
                                            <p class="para_txt2">

                                                WE TOLD THEM TO COME OUT OF THE CHURCH, BUT THEY LOCKED THE DOOR…SO WE
                                                BURNED
                                                THEM </p>
                                        </a>
                                    </div>
                                    <div class="addtocartbtn ">
                                        <a class="btn " href="{{ route('news_article_detail') }}">
                                            READ MORE >>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="product-sec">
                                    <div class="product-img">
                                        <a href="{{ route('news_article_detail') }}">
                                            <img class="img-fluid" src="{{ asset('front_assets/img/home/homenewsarticles2.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="product_desc">
                                        <a href="{{ route('news_article_detail') }}">
                                            <p class="para_txt2">
                                                WE TOLD THEM TO COME OUT OF THE CHURCH, BUT THEY LOCKED THE DOOR…SO WE
                                                BURNED
                                                THEM </p>
                                        </a>
                                    </div>
                                    <div class="addtocartbtn ">
                                        <a class="btn " href="{{ route('news_article_detail') }}">
                                            READ MORE >>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 8th section news and article end here -->
    </section>
    <!-- section body end here -->
</section>
<!-- section news and article end here -->

@endsection