@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/give.css') }}">
<!-- Css Stylesheet -->


<!-- donation body start here -->
<section class="give_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>Give</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Give</p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <!-- section in christ name start here -->
    <section class="christ_sec third_sec">
        <div class="container">
            <div>
                <h4 class="orange_heading">Give Right Now</h4>
                <h2 class="heading2">Featured Campaigns</h2>
            </div>
            <div class="christnamecarousel">
                @foreach($campaigns as $key => $campaign)
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
                            <a href="">
                                <p>
                                    {{ isset($campaign->title) ? $campaign->title : '' }}
                                </p>
                                <p class="para_txt">
                                    {{ isset($campaign->description) ? $campaign->description : '' }}
                                </p>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- section in christ name end here -->
    <section class="sec_bot_link">
        <div class="container">
            <div>
                <a href="{{ route('get_involved') }}"> To learn more visit our Get involved page</a>
            </div>
        </div>
    </section>
</section>
<!-- donation body end here -->

@endsection