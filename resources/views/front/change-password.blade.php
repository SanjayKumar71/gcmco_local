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
<section class="form-section change-pass">
    <div class="container">
        <div class="form-start">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="form-start mt-5 mb-5">
                        <div class="form-heading">
                            <span>Type New Password</span>
                        </div>
                        <div class="form-box">
                            <form action="{{ route('reset.password.post') }}" method="post">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="form-row">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                </div>

                                <div class="form-row">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                </div>

                                <div class="form-row">
                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm New Password " required>
                                </div>

                                <div class="form-row mt-4">
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