@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/getinvolved.css') }}">
<!-- Css Stylesheet -->

<!-- section get involved start here -->
<section class="get_involved_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>Get Involved</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Get Involved</p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <!-- section 9th help the people start here -->
    <section class="help_people_sec ninth_sec">
        <div class="container-fluid">
            <!-- <h4 class="orange_heading text-center">Help The People</h4> -->
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
    <section class="getinvolved_sec">
<div class="container">
    <div>
    <h4 class="orange_heading ">How You Can Get Involved</h4>
    <p class="para_txt">
    We can accomplish this worthy task together. You can help by giving a monthly donation to ensure that children are being rescued, women are being helped and delivered from abusive circumstances. You can help by praying that all our needs are met and our staff, leaders, house parents have wisdom in everything we do. Without your giving we could not accomplish our objectives. Together we rescue these children and give them the discipleship they need to the Glory of God and our Lord and Savior Jesus Christ.
    </p>
    </div>
</div>
    </section>
</section>
<!-- section get involved end here -->

@endsection