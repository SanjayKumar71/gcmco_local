@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/who_we_are.css') }}">
<!-- Css Stylesheet -->


<!-- who we are section start here -->
<section class="who_we_are_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>Who We Are</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Who we are</p>
        </div>
    </section>
    <!-- section universal banner end here -->


    <section class="who_we_are_sec">
        <!-- section fifth ask question start here -->
        <section class="fifth_sec ask_ques_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ask_ques_left">
                            <hr class="black_liner">
                            <h4 class="orange_heading">WHO WE ARE</h4>
                            <p class="para_txt2">
                                Great Commission Ministries is a Mission organization that seeks to Help children who
                                need
                                food, shelter, clothing and education while keeping the focus the Gospel and
                                Discipleship
                                through local Churches. We believe those whom we rescue from the streets should be
                                plugged
                                into a local body of believers which the New Testament calls the church. We are church
                                oriented in all that we do.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ask_ques_right">
                                    <figure>
                                        <img src="{{ asset('front_assets/img/home/poor-man-scaled.jpg') }}" class="img-fluid rightbig" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ask_ques_right">
                                    <figure>
                                        <img src="{{ asset('front_assets/img/who-we-are/who_we_are2.webp') }}" class="img-fluid rightbig" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- section fifth ask question end here -->

        <!-- what we do section start here -->
        <section class="what_we_do_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <figure>
                                <img src="{{ asset('front_assets/img/who-we-are/who_we_are3.webp') }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="what_we_do_content">
                            <h4 class="orange_heading">WHAT WE DO</h4>
                            <ul>
                                <li class="para_txt2">
                                    We plant churches. We believe the church is the backbone of society and the gates of
                                    hell will not prevail against the church. The foundation of GCM is the church where
                                    people can be encouraged and receive discipleship
                                </li>
                                <li class="para_txt2">
                                    We train both native and foreign missionaries to serve in Africa. This training will
                                    enable those to go and be effective in the various ministries they will be serving
                                    in.
                                </li>
                                <li class="para_txt2">
                                    We help women who have been sexually or physically abused. Often the abuse ends in
                                    pregnancy. We help them out of dangerous situations and provide temporary housing.
                                </li>
                                <li class="para_txt2">
                                    We rescue orphans and put them in one of our Hope Homes. The children who have
                                    become family will be taken to one of our local churches and discipled .
                                </li>
                                <li class="para_txt2">
                                    We dig wells or drill bore holes to provide clean and sustainable water to locals.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>

                </div>
            </div>
        </section>
        <!-- what we do section end here -->
        <!-- how to you can get involved start here -->
        <section class="how_get_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="how_get_content">
                            <hr class="black_liner">
                            <h4 class="orange_heading">HOW YOU CAN GET INVOLVED</h4>
                            <p class="para_txt2">
                                We can accomplish this worthy task together. You can help by giving a monthly donation
                                to ensure that children are being rescued, women are being helped and delivered from
                                abusive circumstances. Help by praying that all our needs are met and our staff,
                                leaders, house parents have wisdom in everything we do. Without your giving we could not
                                accomplish our objectives. Together we rescue these children and give them the
                                discipleship they need to the Glory of God and our Lord and Savior Jesus Christ.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <figure>
                            <img src="{{ asset('front_assets/img/who-we-are/who_we_are4.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- how to you can get involved end here -->
        <!-- help the people section start here -->
        <section class="help_the_people_sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="help_people_content">
                            <hr class="black_liner">
                            <h4 class="orange_heading">Help the people</h4>
                            <h2 class="heading1">Together we can make an impact one life at the time.</h2>

                            <div class="help_sec_icon">
                                <div class="help-icon_sec">
                                    <div class="help_people_icon">
                                        <i aria-hidden="true" class="fas fa-apple-alt"></i>
                                        <span class="para_txt2">
                                            Food
                                        </span>
                                    </div>
                                </div>
                                <div class="help-icon_sec">
                                    <div class="help_people_icon">
                                        <i aria-hidden="true" class="fas fa-water"></i>
                                        <span class="para_txt2">
                                            Water
                                        </span>
                                    </div>
                                </div>
                                <div class="help-icon_sec">
                                    <div class="help_people_icon">
                                        <i aria-hidden="true" class="fas fa-home"></i>
                                        <span class="para_txt2">
                                            Hope Homes
                                        </span>
                                    </div>
                                </div>
                                <div class="help-icon_sec">
                                    <div class="help_people_icon">
                                        <i aria-hidden="true" class="fas fa-book-open"></i>
                                        <span class="para_txt2">
                                            Making Disciple
                                        </span>
                                    </div>
                                </div>
                                <div class="help-icon_sec">
                                    <div class="help_people_icon">
                                        <i aria-hidden="true" class="fas fa-church"></i>
                                        <span class="para_txt2">
                                            Planting Churches
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="help_people_right">
                            <div class="help-icon_sec">
                                <div class="help_people_icon">
                                    <img src="{{ asset('front_assets/img/who-we-are/icon6.png') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- help the people section end here -->
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
    </section>
</section>
<!-- who we are section end here -->

@endsection