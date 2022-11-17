@extends('front.layouts.app')
@section('content')
<!-- Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/book-now.css') }}">
<!-- Stylesheet -->

<!-- Top Small Banner -->
<section class="top-small-banner">
    <div class="container">
        <div class="banner-text text-center">
            <h1>{{ $programs->category->title }}</h1>
        </div>
    </div>
</section>
<!-- Top Small Banner END hERE -->


<!-- Form section Start -->
<section class="form-section payment-sec program-sec">
    <div class="container">
        <div class="form-start">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="form-start mt-5 program-detail">
                        <div class="form-heading">
                            <span>Book Now</span>
                        </div>
                        <div class="form-box">
                            <div class="discount-details">
                                <h3 class="title">Program Details<br />{{ $programs->title }}</h3>
                                <b>{{ $programs->sub_title }}</b>
                                <p>{{ $programs->third_sub_title }}</p>
                                <div class="button-group">
                                    <a href="{{ route('book-program', ['programId'=>$programs->id, 'programSessionId'=>$programSessionId] ) }}"><button class="btn" onclick="">Submit</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form section End here -->
@endsection