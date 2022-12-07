@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/who_we_are.css') }}">
<!-- Css Stylesheet -->


<!-- who we are section start here -->
<section class="who_we_are_page">
    <!-- section universal banner start here -->
    <section class="universal_sec" style="background: linear-gradient(180deg, #428C9C52, #428C9C52),url('{{ asset(uploadsDir().$records->banner_image) }}') no-repeat;background-size: cover;">
        <div class="universal_content">
            <h1>{{ $records->banner_heading }}</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;{{ $records->banner_heading }}</p>
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
                            <h4 class="orange_heading">{{ $records->section_one_heading }}</h4>
                            {!! $records->section_one_description !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="ask_ques_right">
                                    <figure>
                                        <img src="{{ asset(uploadsDir().$records->section_one_image_one) }}" class="img-fluid rightbig" alt="">
                                    </figure>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ask_ques_right">
                                    <figure>
                                        <img src="{{ asset(uploadsDir().$records->section_one_image_two) }}" class="img-fluid rightbig" alt="">
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
                                <img src="{{ asset(uploadsDir().$records->section_two_image) }}" class="img-fluid" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="what_we_do_content">
                            <h4 class="orange_heading">{!! $records->section_two_heading !!}</h4>
                            {!! $records->section_two_description !!}
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
                            <h4 class="orange_heading">{!! $records->section_three_heading !!}</h4>
                            {!! $records->section_three_description !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <figure>
                            <img src="{{ asset(uploadsDir().$records->section_three_image) }}" class="img-fluid" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- how to you can get involved end here -->

        <!-- help the people section start here -->
        <section class="help_the_people_sec" style="background: url('{{ asset(uploadsDir().$records->section_four_image) }}');background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="help_people_content">
                            <hr class="black_liner">
                            <h4 class="orange_heading">{!! $records->section_four_sub_heading !!}</h4>
                            <h2 class="heading1">{!! $records->section_four_heading !!}</h2>

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

                    @if(count($whatTheySayRecords) > 0)
                        @foreach($whatTheySayRecords as $whatTheySayKey => $whatTheySayVal)
                            <div class="change_content">
                                <p class="quote">“</p>
                                <p class="evaluate para_txt2">
                                    {!! $whatTheySayVal->comment !!}

                                </p>
                                <h3 class="name thrid_font"> - {!! $whatTheySayVal->first_name." ".$whatTheySayVal->last_name !!} </h3>
                                <div class="avatar">
                                    <div class="client">
                                        <img src="{{ asset(uploadsDir().$whatTheySayVal->profile_image) }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </section>
        <!-- section 6th changed Lives end herer-->

    </section>
</section>
<!-- who we are section end here -->

@endsection