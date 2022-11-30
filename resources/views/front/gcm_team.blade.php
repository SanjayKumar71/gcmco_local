@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/gcm_team.css') }}">
<!-- Css Stylesheet -->

<!-- gcm team body start here -->
<section class="gcm_team_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>GCM Team</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;GCM Team</p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <!-- section gcm team start here -->
    <section class="gcm_team_sec">
        <div class="container">
            <div class="gcm_team_top">
                <hr class="black_liner">
                <h4 class="orange_heading">GCM Team</h4>
                <h2 class="heading1">Meet our Team</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="gcm_teams">
                        <figure>
                            <img src="{{ asset('front_assets/img/ecm_team/ecm_team5.webp') }}" class="img-fluid" alt="">
                        </figure>
                        <div class="gcm_team_content">
                            <a href="" class="">Joshua Lawrence</a>
                            <p>Founder & President</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gcm_teams">
                        <figure>
                            <img src="{{ asset('front_assets/img/ecm_team/ecm_team2.webp') }}" class="img-fluid" alt="">
                        </figure>
                        <div class="gcm_team_content">
                            <a href="" class="">Kelsey Lawrence</a>
                            <p>Women’s director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gcm_teams">
                        <figure>
                            <img src="{{ asset('front_assets/img/ecm_team/ecm_team3.webp') }}" class="img-fluid" alt="">
                        </figure>
                        <div class="gcm_team_content">
                            <a href="" class="">Preston Jumba</a>
                            <p>Media Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gcm_teams">
                        <figure>
                            <img src="{{ asset('front_assets/img/ecm_team/ecm_team4.webp') }}" class="img-fluid" alt="">
                        </figure>
                        <div class="gcm_team_content">
                            <a href="" class="">John fleming</a>
                            <p>GCM Ambassador</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gcm_teams">
                        <figure>
                            <img src="{{ asset('front_assets/img/ecm_team/ecm_team6.webp') }}" class="img-fluid" alt="">
                        </figure>
                        <div class="gcm_team_content">
                            <a href="" class="">Puckie Deng</a>
                            <p>Cook</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gcm_teams">
                        <figure>
                            <img src="{{ asset('front_assets/img/ecm_team/ecm_team7.webp') }}" class="img-fluid" alt="">
                        </figure>
                        <div class="gcm_team_content">
                            <a href="" class="">Jennifer Wanjiru</a>
                            <p>Administrative Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gcm_teams">
                        <figure>
                            <img src="{{ asset('front_assets/img/ecm_team/ecm_team8.webp') }}" class="img-fluid" alt="">
                        </figure>
                        <div class="gcm_team_content">
                            <a href="" class="">Collince Ochieng</a>
                            <p>Children Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="gcm_teams">
                        <figure>
                            <img src="{{ asset('front_assets/img/ecm_team/ecm_team9.webp') }}" class="img-fluid" alt="">
                        </figure>
                        <div class="gcm_team_content">
                            <a href="" class="">Peter Odoyo</a>
                            <p>Lead pastor and Counselor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- section gcm team end here -->


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


@endsection