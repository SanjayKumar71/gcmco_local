@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/heartsaver.css') }}">
<!-- Css Stylesheet -->

<!-- banner section start here -->
<section class="section-head">
    <div class='head'>
        <h1>FIRST AID / CPR COMBO</h1>
    </div>
</section>
<!-- banner section end here -->

<!-- Program Sec Start Here -->
<section class="program_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="sale-tag">
                    <h3>ON SALE</h3>
                </div>
                @if(count($programs->programImages) > 0)
                <div class="picture-box">
                    <div class="img-box">
                        @foreach($programs->programImages as $k => $v)
                            <figure><img src="{!! asset(uploadsDir().$v->image) !!}" alt="" class="img-fluid"></figure>
                        @endforeach
                    </div>
                    <div class="sub-image-box">
                        @foreach($programs->programImages as $k1 => $v1)
                            <figure><img src="{!! asset(uploadsDir().$v1->image) !!}" alt="" class="img-fluid"></figure>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
            <div class="col-lg-7">
                <div class="content-wrapper">
                    <div class="title">
                        <h3>{{ $programs->title; }}</h3>
                        <h4>{{ $programs->sub_title; }}</h4>
                        <h5>{{ $programs->third_sub_title; }} </h5>
                    </div>
                    <div class="price">
                        <h3>${{ $programs->price; }} <span class="light">/ {{ $programs->off_in_percent; }}% off</span></h3>
                    </div>
                    {!! $programs->description; !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Program Sec End Here -->

<!-- Tabs Detail Sec Start Here -->
<section class="tabs-detail">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="training-tab" data-toggle="tab" href="#training" role="tab" aria-controls="training" aria-selected="true">ABOUT THIS TRAINING</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="schedule-tab" data-toggle="tab" href="#schedule" role="tab" aria-controls="schedule" aria-selected="false">SCHEDULE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="learning-tab" data-toggle="tab" href="#learning" role="tab" aria-controls="learning" aria-selected="false">LEARNING OBJECTIVES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="feature-tab" data-toggle="tab" href="#feature" role="tab" aria-controls="feature" aria-selected="false">COURSE FEATURES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="material-tab" data-toggle="tab" href="#material" role="tab" aria-controls="material" aria-selected="false">STUDENT MATERIALS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">ABOUT HEARTSAVER®</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="training" role="tabpanel" aria-labelledby="training-tab">
                {!! $programs->about_traning; !!}
            </div>

            <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                
                <div class="title">
                    <h4>{!! $programs->schedule_heading; !!}</h4>
                </div>

                <div class="all-schedule">
                    
                    @if( count($programs->programSession) > 0)
                        @foreach($programs->programSession as $key => $programSess)
                            <div class="schedule-box">
                                <p class="date" style="width:155px;text-align:center;">{{ \Carbon\Carbon::parse($programSess->date)->format('F jS Y') }}</p>
                                <p class="time">{{ \Carbon\Carbon::parse($programSess->start_time)->format('h:i A') }} - {{ \Carbon\Carbon::parse($programSess->end_time)->format('h:i A') }}</p>
                                <p style="width:250px"><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $programSess->location }}</p>
                                <a href="{{ route('contact-us') }}"><i class="fa fa-pencil" aria-hidden="true"></i> Book Now</a>
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="button-group mb-4">
                    <button class="show-more">SHOW MORE DATES</button>
                    <button class="total-schedule">{{ count($programs->programSession) }} Classes Scheduled</button>
                </div>

                <p>{!! $programs->schedule_note; !!}</p>
            
            </div>
            
            <div class="tab-pane fade" id="learning" role="tabpanel" aria-labelledby="learning-tab">
                {!! $programs->learning_objective; !!}
            </div>

            <div class="tab-pane fade" id="feature" role="tabpanel" aria-labelledby="feature-tab">
                {!! $programs->course_features; !!}
            </div>

            <div class="tab-pane fade" id="material" role="tabpanel" aria-labelledby="material-tab">

                <div class="row">

                    <div class="col-lg-6">
                        <div class="title">
                            <h4>CLASSROOM</h4>
                        </div>
                        {!! $programs->student_material_classroom; !!}
                    </div>

                    <div class="col-lg-6">
                        <div class="title">
                            <h4>ONLINE</h4>
                        </div>
                        {!! $programs->student_material_online !!}
                    </div>

                </div>

            </div>

            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                {!! $programs->about_heartsaver !!}
            </div>
        </div>
    </div>
</section>
<!-- Tabs Detail Sec End Here -->

@endsection