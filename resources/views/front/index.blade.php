@extends('front.layouts.app')
@section('content')
<!-- Body Content Start Here -->

<!-- first section  banner carousel start here -->
<section class="first_sec banner_sec">
    <div class="container-fluid">
        <div class="">
            <div class="banner_carousel">

                <div class="banner_single">
                    <figure>
                        <img src="{{ asset('front_assets/img/home/banner_first0.jpg') }}" class="img-fluid" alt="">
                    </figure>
                    <div class="banner_content">
                        <p>Helping Them Today</p>
                        <h1>Helping in christ's Name in Christ's way</h1>
                    </div>
                </div>

                <div class="banner_single">
                    <figure>
                        <img src="{{ asset('front_assets/img/home/banner_first11.jpg') }}" class="img-fluid" alt="">
                    </figure>
                    <div class="banner_content">
                        <p>Helping Them Today</p>
                        <h1>Helping in christ's Name in Christ's way</h1>
                    </div>
                </div>

                <div class="banner_single">
                    <figure>
                        <img src="{{ asset('front_assets/img/sponsor/sponsor1.webp') }}" class="img-fluid" alt="">
                    </figure>
                    <div class="banner_content">
                        <p>Helping Them Today</p>
                        <h1>Helping in christ's Name in Christ's way</h1>
                    </div>
                </div>
                
            </div>
            <div class="banner_nav">

            </div>
        </div>
    </div>
</section>
<!-- first section  banner carousel end here -->

<!-- section helping today start here -->
<section class="second_section helping_today">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="">
                    <figure>
                        <img src="{{ asset('front_assets/img/home/dg-min.jpg') }}" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-md-6">
                <div class="helping_today_content">
                    <hr class="black_liner">
                    <h4 class="orange_heading">Helping Today</h4>
                    <h2 class="heading1">Together we can <br> Help those in need in Christ’s name.</h2>
                    <p class="para_txt">
                        Africa is full of children who need your help. Help with food, clothing, housing and everyday
                        basic needs.
                    </p>
                    <h4 class="yellow_heading">Our Objectives</h4>
                    <ul>
                        <li>
                            <i class="far fa-check-circle mr-2"></i>
                            Plant churches
                        </li>
                        <li>
                            <i class="far fa-check-circle mr-2"></i>
                            Feeding Children
                        </li>
                        <li>
                            <i class="far fa-check-circle mr-2"></i>
                            Bible and Basic Education
                        </li>
                        <li>
                            <i class="far fa-check-circle mr-2"></i>
                            Establish Hope Homes Throughout Africa
                        </li>
                        <li>
                            <i class="far fa-check-circle mr-2"></i>
                            Disciple Hope Home kids in our local Churches
                        </li>
                        <li>
                            <i class="far fa-check-circle mr-2"></i>
                            Deliver women from abusive situations
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section helping today end here -->

<!-- section in christ name start here -->
<section class="christ_sec third_sec">
    <div class="container">
        <div>
            <h4 class="orange_heading">In Christ’s Name</h4>
            <h2 class="heading2">Our Popular Causes</h2>
        </div>
        <div class="christnamecarousel">
        @if(count($siteSettings['campaigns']) > 0)
            @foreach($siteSettings['campaigns'] as $key => $campaign)
                <div class="christnamecontent">
                    <a href="{{ route('giveus_form', $campaign->id) }}">
                        <figure>
                            @if( isset($campaign->image) && $campaign->image != "")
                                <img src="{{ asset(uploadsDir().$campaign->image) }}" class="img-fluid" alt="">
                            @endif
                        </figure>
                    </a>
                    <div class="button-group">
                        <a href="{{ route('giveus_form', $campaign->id) }}" class="btn">Give</a>
                    </div>
                    <div class="para_text2">
                        <a href="#">
                            <p>
                                {{ isset($campaign->title) ? $campaign->title : '' }}
                            </p>
                        </a>
                    </div>
                </div>
            @endforeach
        @endif
        </div>
    </div>
</section>
<!-- section in christ name end here -->

<!-- section healthy food start here -->
<section class="fourth_sec headlthy_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="healthy_leftside">
                    <hr class="black_liner">
                    <h4 class="orange_heading">Helping Today</h4>
                    <h2 class="heading1">We are helping those in need and sharing the Gospel throughout Africa</h2>
                    <figure>
                        <img src="{{ asset('front_assets/img/home/footer-map.png') }}" class="img-fluid" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-md-6">
                <div class="healthy_rightside">
                    <div class="healthy_iconimg">
                        <figure>
                            <img src="{{ asset('front_assets/img/home/icon1.png') }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div>
                        <h4 class="heading2">Healthy Food</h4>
                        <p class="para_txt2">
                            Millions of people in Africa are starving, so we’re working to feed the hungry.
                        </p>
                    </div>
                </div>
                <hr class="light_line">
                <div class="healthy_rightside">
                    <div class="healthy_iconimg">
                        <figure>
                            <img src="{{ asset('front_assets/img/home/icon2.png') }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div>
                        <h4 class="heading2">Clean Water</h4>
                        <p class="para_txt2">
                        Our goal is to supply clean water to people who can not access clean safe water.
                        </p>
                    </div>
                </div>
                <hr class="light_line">
                <div class="healthy_rightside">
                    <div class="healthy_iconimg">
                        <figure>
                            <img src="{{ asset('front_assets/img/home/icon3.png') }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div>
                        <h4 class="heading2">Hope Homes</h4>
                        <p class="para_txt2">
                        Our Hope Homes project rescues kids with no family. We give them a home and the Hope of Christ.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- section healthy food end here -->

<!-- section fifth ask question start here -->
<section class="fifth_sec ask_ques_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="ask_ques_left">
                    <hr class="black_liner">
                    <h4 class="orange_heading">Asked Questions</h4>
                    <h2 class="heading1">We Need Your Help</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How to give a gift on your site ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="para_txt2">
                                        It’s not hard to make a donation on our site. Only choose one of our campaigns,
                                        then fill some important information in the form.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How to help in Christ’s Name ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p class="para_txt2">
                                        We have many campaigns to support people living in poverty and neglect. Contact
                                        us to know more details about campaigns dedicated to helping the poor for the
                                        Glory of Christ.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ask_ques_right">
                    <figure>
                        <img src="{{ asset('front_assets/img/home/poor-man-scaled.jpg') }}" class="img-fluid rightbig" alt="">
                    </figure>
                    <div class="bot_orange_dv">
                        <figure>
                            <img src="{{ asset('front_assets/img/home/icon4.png') }}" class="img-fluid" alt="">
                        </figure>
                        <p>
                            Give us your Helping Hand
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="black_liner mt-3">
    </div>
</section>
<!-- section fifth ask question end here -->

<!-- section 6th changed Lives start herer-->
<section class="change_live_sec 6th_sec">
    <div class="container">
        <div class="changelive_tophead">
            <h4 class="orange_heading">Changed Lives</h4>
            <h2 class="heading1">What They Say</h2>
        </div>
        <div class="changelivecarousel">
            <div class="change_content">
                <p class="quote">“</p>
                <p class="evaluate para_txt2">
                    They have built a comfortable and welcoming environment for people who desire to know God, and also
                    a place to belong for those who long to have a church family.

                </p>
                <h3 class="name thrid_font"> - Nellus wanjiru </h3>
                <div class="avatar">
                    <div class="client">
                        <img src="{{ asset('front_assets/img/home/changelive1.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="change_content">
                <p class="quote">“</p>
                <p class="evaluate para_txt2">
                    I was taught the truth of the gospel, not by words only, but lived out in the lives
                    of everyone around me.
                    Great Commission Ministries has come alongside me and helped me raise my son, and has also provided
                    means for me to be able to provide for him.
                </p>
                <h3 class="name thrid_font">- Faith Aoko</h3>
                <div class="avatar">
                    <div class="client">
                        <img src="{{ asset('front_assets/img/home/changelive2.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="change_content">
                <p class="quote">“</p>
                <p class="evaluate para_txt2">
                    I am Thankful to our lord Jesus Christ for the time I have been in the ministry of GCM. The
                    mentorship I have received through the word of God and being molded to be the man I ought to be in
                    Christ Jesus, Being discipled to represent Christ in all aspects of my life and to preach the word
                    in my day to day life.
                </p>
                <h3 class="name thrid_font">- Collince Ochieng</h3>
                <div class="avatar">
                    <div class="client">
                        <img src="{{ asset('front_assets/img/home/changelive3.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="change_content">
                <p class="quote">“</p>
                <p class="evaluate para_txt2">
                    The word of God has come alive in my life. I have began to understand grace and the love of God. I
                    am thankful to God for GCM.
                </p>
                <h3 class="name thrid_font">- Noel Minayo</h3>
                <div class="avatar">
                    <div class="client">
                        <img src="{{ asset('front_assets/img/home/changelive4.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section 6th changed Lives end herer-->

<!-- section 7th join us in prayer start here -->
<section class="seven_sec join_pray-sec">
    <div class="container">
        <div class="join_pray_content">
            <figure>
                <img src="{{ asset('front_assets/img/home/icon5.png') }}" class="img-fluid" alt="">
            </figure>
            <hr class="black_liner">
            <div>
                <h1>Join us in Prayer by staying Updated</h1>
            </div>
        </div>
    </div>
</section>
<!-- section 7th join us in prayer end here -->

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
                <div class="button-group">
                    <a href="{{ route('news_article') }}" class="btn gcmco-btn">See All News</a>
                </div>
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

                                        WE TOLD THEM TO COME OUT OF THE CHURCH, BUT THEY LOCKED THE DOOR…SO WE BURNED
                                        THEM </p>
                                </a>
                            </div>
                            <div class="addtocartbtn ">
                                <a href="{{ route('news_article_detail') }}" class="btn ">
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
                                        WE TOLD THEM TO COME OUT OF THE CHURCH, BUT THEY LOCKED THE DOOR…SO WE BURNED
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

<!-- section 9th help the people start here -->
<section class="help_people_sec ninth_sec">
    <div class="container-fluid">
        <h4 class="orange_heading text-center">Help The People</h4>
        <div class="help_people_carousel">
            <div>
                <figure>
                    <img src="{{ asset('front_assets/img/home/help_people1.jpg') }}" class="img-fluid" alt="">
                </figure>
            </div>
            <div>
                <figure>
                    <img src="{{ asset('front_assets/img/home/help_people2.jpg') }}" class="img-fluid" alt="">
                </figure>
            </div>
            <div>
                <figure>
                    <img src="{{ asset('front_assets/img/home/help_people3.jpg') }}" class="img-fluid" alt="">
                </figure>
            </div>
            <div>
                <figure>
                    <img src="{{ asset('front_assets/img/home/help_people4.jpg') }}" class="img-fluid" alt="">
                </figure>
            </div>
            <div>
                <figure>
                    <img src="{{ asset('front_assets/img/home/help_people5.jpg') }}" class="img-fluid" alt="">
                </figure>
            </div>
            <div>
                <figure>
                    <img src="{{ asset('front_assets/img/home/help_people6.jpg') }}" class="img-fluid" alt="">
                </figure>
            </div>
            <div>
                <figure>
                    <img src="{{ asset('front_assets/img/home/help_people7.jpg') }}" class="img-fluid" alt="">
                </figure>
            </div>
            <div>
                <figure>
                    <img src="{{ asset('front_assets/img/home/help_people8.jpg') }}" class="img-fluid" alt="">
                </figure>
            </div>
            <div>
                <figure>
                    <img src="{{ asset('front_assets/img/home/help_people9.jpg') }}" class="img-fluid" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- section 9th help the people end here -->

<!-- Body Content End Here -->

@endsection