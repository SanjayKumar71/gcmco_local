@extends('front.layouts.app')
@section('content')

<!-- Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/book-now.css') }}">
<!-- Stylesheet -->

<!-- Top Small Banner -->
<section class="top-small-banner">
    <div class="container">
        <div class="banner-text text-center">
            <h1>FORGOT PASSWORD</h1>
        </div>
    </div>
</section>
<!-- Top Small Banner END hERE -->


<!-- fORM section Start -->
<section class="form-section forgot-pass">
    <div class="container">
        <div class="form-start">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="form-start mt-5 mb-5">
                        <div class="form-heading">
                            <span>Forgot Password</span>
                        </div>
                        <div class="form-box">
                            <form method="post" action="{{ route('forget.password.post') }}">
                                @csrf
                                <div class="form-row">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                                <p>Your will receive instructions for reseting your password</p>
                                <p class="resend" hidden>A password reset email has been sent to your email please check.
                                    Haven't received email yet? <a href="#">Try again</a></p>
                                <div class="form-row mt-5">
                                    <div class="single-input mx-auto">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fORM section End here -->

@endsection