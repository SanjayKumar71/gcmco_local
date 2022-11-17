@extends('front.layouts.app')
@section('content')
@php
session()->forget('success_payment');
@endphp
    <!-- Body Content Start Here -->

<!-- banner section start here -->
<section class="slider-banner-sec">
    <div>
        <div id="video-banner">
            <div class="vide_box">
                @if($data->banner == 'banner-video1.mp4')
                    <video loop="true" autoplay="autoplay" muted="">
                        <source src="{{ asset('front_assets/img/'.$data->banner) }}" type="video/mp4">
                    </video>
                    @else
                        <video loop="true" autoplay="autoplay" muted="">
                            <source src="{{ asset('uploads/'.$data->banner) }}" type="video/mp4">
                        </video>
                @endif
                <div class="btnonslider">
                    <p class="text1">{!! $data->banner_heading !!}​</p>
                    <a href="{{ route('contact-us') }}" class="btn">Contact Us</a>
                </div>
                <!-- <figure><img class="img-fluid" src="img/banner.png" alt=""></figure> -->
            </div>
            <div class="vide_box">
                <video loop="true" autoplay="autoplay" muted="">
                    <source src="{{ asset('front_assets/img/banner-video1.mp4') }}" type="video/mp4">
                </video>
                <!-- <figure><img class="img-fluid" src="img/banner.png" alt=""></figure> -->
            </div>
            <div class="vide_box">
                <video loop="true" autoplay="autoplay" muted="">
                    <source src="{{ asset('front_assets/img/banner-video1.mp4') }}" type="video/mp4">
                </video>
                <!-- <figure><img class="img-fluid" src="img/banner.png" alt=""></figure> -->
            </div>
        </div>
    </div>
</section>
<!-- banner section end here -->

<!-- section call for free disc start here-->
<section class="section-disc">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="dark-blue-sec">
                    <div class="light-blue-sec">
                        <h6>Call for a free DISC consultation</h6>
                        <hr class="line">
                        
                        <div class="textwphone">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <p>{{ $siteSettings['siteSettings']->contact_phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<!-- section call for free disc end here-->

<!-- section improve work place start here -->
<section class="workplace-sec">
    <div class="container">

        <div class="workplace">
            <div class="row">
                <div class="col-lg-8">
                    {!! $data->description_one !!}
                </div>
                <div class="col-md-4">
                    @if(isset($data->video_one))
                        <div class="grey-video">
                            <video loop="true" controls autoplay="autoplay" muted="">
                                <source src="{{ asset('front_assets/img/'.$data->video_one) }}" type="video/mp4">
                            </video>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="workplace">
            <div class="row">
                <div class="col-lg-8">
                    {!! $data->description_two !!}
                </div>
                <div class="col-md-4">
                    @if(isset($data->video_two))
                        <div class="grey-video">
                            <video loop="true" controls autoplay="autoplay" muted="">
                                <source src="{{ asset('front_assets/img/'.$data->video_two) }}" type="video/mp4">
                            </video>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="research-sec">
            @if(count($homeSectionThree) > 0)
                <div class="row">
                    @foreach($homeSectionThree as $key => $homeSectionThreeData)
                    <div class="col-lg-4">
                        <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                            <div class="flipper">
                                <div class="flipperfront">
                                    <div class="flipercontent">
                                    @if($homeSectionThreeData->icon == 'q1-1.png')
                                        <img class="img-fluid searchimg" src="{!! asset('front_assets/img/'.$homeSectionThreeData->icon) !!}" alt="">
                                        @else
                                        <img class="img-fluid searchimg" src="{!! asset(uploadsDir().$homeSectionThreeData->icon) !!}" alt="">
                                    @endif
                                        
                                        <p>{{ $homeSectionThreeData->title }}: </p>
                                    </div>
                                </div>
                                <div class="flipperback">
                                    <div class="flipercontent">
                                        <p class="flipperpara">{{ $homeSectionThreeData->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
        
    </div>
</section>
<!-- section improve work place end here -->

<!-- section benefits of first aid start here -->
<section class="section-bofat">
    <div class="container">
        <div class="sec-bofat">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        @if(isset($data->section_four_image))
                            @if($data->section_four_image == 'banner-024.jpg')
                                <img class="img-fluid" src="{{ asset('front_assets/img/'.$data->section_four_image) }}" alt="">
                                @else
                                    <img class="img-fluid" src="{{ asset('uploads/'.$data->section_four_image) }}" alt="">
                            @endif
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    
                   {!! $data->section_four_description !!}

                    <div>
                        <div class="skills-bar">
                            <!-- <h1>My Skills</h1> -->
                            <div class="bar">
                                <div class="info">
                                    <h5>Family</h5>
                                </div>
                                <div class="progress-line html">
                                    <span></span>
                                </div>
                            </div>
                            <div class="bar">
                                <div class="info">
                                    <h5>Marriage & Love</h5>
                                </div>
                                <div class="progress-line css">
                                    <span></span>
                                </div>
                            </div>
                            <div class="bar">
                                <div class="info">
                                    <h5>Life Coaching</h5>
                                </div>
                                <div class="progress-line javascript">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section benefits of first aid end here -->

<!-- section partnership and affiliation start here -->
<section class="seciton-partnershipaff">
    <div class="bluebg"></div>
    <div class="container">
        <div class="sec-partnershipaff">
            <h2>Partnership and Affiliations</h2>
            <div class="authorize-parthner">
                @if( isset( $partnershipAffiliation ) )
                    @foreach($partnershipAffiliation as $partnershipAffiliationVal)
                        <img class="img-fluid" src="{{ asset('uploads/'.$partnershipAffiliationVal->image) }}" alt="">
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<!-- section partnership and affiliation end here -->

<!-- section news feed start here -->
<section class="news-feed-section">
    <div class="news-feed-overlay"></div>
    <div class="container">
        <div class="news-feed-sec">
            <h5>Tell Us What We Can Do For You</h5>
            <p>If You Have a Question or Comment Please Answer a Few Brief Questions And We Will Contact You Within 24
                Hours</p>
            <form method="POST" action="{{ route('contact_queries.store') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inputname">Full Name *</label>
                            <input type="text" placeholder="Full Name" name="full_name" class="form-control" required value="{{ old('full_name') }}">
                            @error('full_name') <span class="error" style="font-size:60%;color:red;">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inputemail">E-mail Address *</label>
                            <input type="email" placeholder="Email" name="email" class="form-control" required value="{{ old('email') }}">
                            @error('email') <span class="error" style="font-size:60%;color:red;">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="">
                            <label for="inlineFormInputGroup">Phone</label>
                            <div class="input-group mb-2">
                                <input type="tel" placeholder="Phone" name="phone" class="form-control" value="{{ old('phone') }}">
                                    @error('phone') <span class="error" style="font-size:60%;color:red;">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="inlineFormInputGroup">Your Timezone</label>
                        <select class="form-control" name="time_zone" id="time_zone"></select>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-6">
                        <label for="inlineFormInputGroup">Best Time to Call</label>
                        <input type="time" placeholder="Best Time To Call" name="best_time_to_call" class="form-control" value="{{ old('best_time_to_call') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Message *</label>
                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
</section>

<script src="{{ asset('front_assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('front_assets/js/timezones.full.js') }}"></script>
<script>
    //$('#time_zone').select2();
    $('#time_zone').timezones();
</script>
<!-- section news feed end here -->

<!-- Body Content End Here -->

@endsection