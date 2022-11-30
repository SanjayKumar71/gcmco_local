@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/video.css') }}">
<!-- Css Stylesheet -->

<section class="video_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>Videos</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Media &nbsp;&nbsp;<i
                    class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Media </p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <section class="video_sec">
        <div class="container">
            <div class="">
                <h4 class="orange_heading">Videos</h4>
                <hr class="black_liner">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <video width="100%" height="400px" controls>
                            <source src="{{ asset('front_assets/img/video/video1.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <video width="100%" height="400px" controls>
                            <source src="{{ asset('front_assets/img/video/video2.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div>
                        <video width="100%" height="400px" controls>
                            <source src="{{ asset('front_assets/img/video/video3.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

@endsection