@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/about-us.css') }}">
<!-- Css Stylesheet -->

<!-- Body Content Start Here -->

<!-- banner section start here -->
<section class="section-head">
    <div class='head'>
        <h1>About Us</h1>
    </div>
</section>
<!-- banner section end here -->

<!-- About Sec Start Here -->
<section class="about-us-section">

    <div class="container">
        <div class="wtopt-section about_first">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        @if($data->about_us_image == 'aboutus1.jpg')
                            <img class="img-fluid" src="{{ asset('front_assets/img/aboutus1.jpg') }}" alt="">
                            @else
                                <img class="img-fluid" src="{!! asset(uploadsDir().$data->about_us_image) !!}" alt="about_us_image">
                        @endif
                    </div>
                </div>
                <div class="col-md-6 wtopt-content">
                    <div>
                        {!! $data->about_us_description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pptp-section">

        <div class="pptp-center">
            {!! $data->about_us_section_two_heading !!}
        </div>

        <div class="container">
            <div class="couslingboxes-sec">
                <div class="row mb-4">
                    @foreach($aboutUsProgramSectionData as $key => $val)
                        <div class="col-md-6" style="padding-bottom: 20px;">
                            <div class="pptpsec">
                                <div class='row align-items-center'>
                                    <div class="col-md-2">
                                        <div>
                                            {!! $val->icon !!}
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="content-wrapper">
                                            <h3 class="pptp-head1">{{ $val->heading }}</h3>
                                            <p class="counslingpara">{{ $val->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- <div class='btncenter mt-5'>
                    <a href="FAQ.php" class="btn">MORE PROGRAM</a>
                </div> -->
            </div>
        </div>

        <section class="letmin">
            <div class="container">
                <div class="wtopt-section">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                            @if($data->section_two_image_one == 'aboutus2.jpg')
                                <img class="img-fluid" src="{{ asset('front_assets/img/aboutus2.jpg') }}" alt="">
                                @else
                                    <img class="img-fluid" src="{!! asset(uploadsDir().$data->section_two_image_one) !!}" alt="">
                            @endif
                            </div>
                        </div>
                        <div class="col-md-6 wtopt-content">
                            <div>
                                {!! $data->section_two_description_one !!}
                            </div>
                            <!-- <div class='btncenter mt-5'>
                                <a href="FAQ.php" class="btn">READ MORE</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section">
            <div class="container">
                <div class="wtopt-section">
                    <div class="row">
                        <div class="col-md-6 wtopt-content">
                            <div>
                                {!! $data->section_two_description_two !!}
                            </div>

                            <div class="row mb-4">
                                @foreach($aboutUsProgramSectionData->take(4) as $key => $val2)
                                    <div class="col-md-6" style="padding-bottom: 20px;">
                                        <div class="pptpsec">
                                            <div class='row '>
                                                <div class="col-md-12">
                                                    <div>
                                                        {!! $val2->icon !!}
                                                        <!-- <i aria-hidden="true" class="fas fa-sad-tear"></i> -->
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <div>
                                                        <h5 class="pptp-head1">{{ $val2->heading }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-md-6 img-sec">
                            <div class="img_box">
                                @if($data->section_two_image_two == 'aboutus3.jpg')
                                    <img class="img-fluid" src="{{ asset('front_assets/img/aboutus3.jpg') }}" alt="">
                                    @else
                                        <img class="img-fluid" src="{!! asset(uploadsDir().$data->section_two_image_two) !!}" alt="">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wrtb" id="counter">
            <div class="container">
                <div class="wrtb-center">
                    {!! $data->why_choose_us !!}
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="counts">
                            <h3 class="pptp-head count">{!! $data->in_house_psychiatrist !!}</h3>
                            <p class="benefit1">In House Psychiatrist</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counts">
                            <h3 class="pptp-head count">{!! $data->experience !!}</h3>
                            <p class="benefit1">Years Experience</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counts">
                            <h3 class="pptp-head count">{!! $data->session_per_year !!}</h3>
                            <p class="benefit1">Session Per Year</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counts">
                            <h3 class="pptp-head count">{!! $data->successful_therapy !!}</h3>
                            <p class="benefit1">Successful Therapy</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section class="process_sec">
        <div class="container">
            <div class="wtopt-section">
                <div class="row">
                    <div class="col-md-6">
                        <div id="aboutpage1">
                            @if($data->about_us_process_section_slider_image)
                                @foreach($data->about_us_process_section_slider_image as $imgKey => $imgVal)
                                    @if($imgVal == 'aboutus1.jpg')
                                        <img class="img-fluid" src="{{ asset('front_assets/img/aboutus1.jpg') }}" alt="">
                                        @else
                                            <img class="img-fluid" src="{!! asset(uploadsDir().$imgVal) !!}" alt="">
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6 wtopt-content">
                        <div class="process-cons-sec">
                            {!! $data->about_us_process_section_heading !!}
                            <ul class="ttmef">
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <div class="content">
                                        <h3 class="pptp2">Talk to me first</h3>
                                        <p>{!! $data->process_talk_to_me_first_description !!}</p>
                                    </div>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="far fa-clipboard"></i>
                                    <div class="content">
                                        <h3 class="pptp2">Make Appointment</h3>
                                        <p>{!! $data->process_make_appointment_description !!}</p>
                                    </div>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="far fa-handshake"></i>
                                    <div class="content">
                                        <h3 class="pptp2">Came to visit me</h3>
                                        <p>{!! $data->process_came_to_visit_me_description !!}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>
<!-- About Sec Start Here -->

<!-- Body Content End Here -->
@endsection