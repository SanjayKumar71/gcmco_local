@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/sponsor.css') }}">
<!-- Css Stylesheet -->

<!-- sponsor body start here -->
<section class="sponsor_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>Sponsor</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Sponsor</p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <!-- section body start here -->
    <section class="sponsor_sec">
        <div class="container">
            <div class="sponsor_content">
                <h1>Good News should be accompanied by Good Deeds</h1>
                <h4>Your Support provides help and hope that transforms lives.</h4>
                <figure>
                    <img src="img/sponsor/sponsor2.webp" class="img-fluid" alt="">
                </figure>
                <p>
                    Together we can show the love of Christ by providing food, clothing, clean water, medical supplies,
                    basic and bible education, and Discipleship through local churches.For $ 50/ dollars/month support
                    helps free children from hunger and more.Your support makes it possible to
                    <br> HELP! <br>
                    Your monthly gift helps children and their families or children with no family have food and basic needs. Through this they feel loved, wanted, and can hopefullyexperience the love of Jesus Christ our Lord.
                </p>
                <div class="row">
                    <div class="col-md-9">
                    <hr class="black_liner">
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <div class="sponsor_btn">
                            <a href="{{ route('get_involved') }}" class="gcmco-btn">Get Involved Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section body end here -->
</section>
<!-- sponsor body end here -->

@endsection