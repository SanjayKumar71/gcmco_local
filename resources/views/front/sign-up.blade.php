@extends('front.layouts.app')
@section('content')

<!-- Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/book-now.css') }}">
<!-- Stylesheet -->

<!-- Top Small Banner -->
<section class="top-small-banner">
    <div class="container">
        <div class="banner-text text-center">
            <h1>Sign Up</h1>
        </div>
    </div>
</section>
<!-- Top Small Banner END hERE -->


<!-- fORM section Start -->
<section class="form-section">
    <div class="container">
        <div class="form-start">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="form-start mt-5 mb-5">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <div class="form-heading">
                            <span>Sign Up</span>
                            <span class="right-text">Already a Member ? <a href="{{ route('sign-in') }}">Sign In</a></span>
                        </div>
                        <div class="form-box">
                            <form method="POST" action="{{ route('sign-up.create') }}">
                                @csrf
                                <div class="form-row">
                                    <input type="text" name="first_name" class="form-control" id="" placeholder="First Name" value="{{ old('first_name') }}" required>
                                    @if ($errors->has('first_name'))
                                        <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <input type="text" name="last_name" class="form-control" id="" placeholder="Last Name" value="{{ old('last_name') }}">
                                    @if ($errors->has('last_name'))
                                        <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <input type="text" name="email" class="form-control" id="" placeholder="Email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <input type="text" name="contact_number" class="form-control" id="" placeholder="Contact Number" value="{{ old('contact_number') }}">
                                    @if ($errors->has('contact_number'))
                                        <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <input type="password" name="password" class="form-control" id="" placeholder="Password" value="{{ old('password') }}" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <input type="password" name="password_confirmation" class="form-control" id="" placeholder="Confirm password" value="{{ old('password_confirmation') }}" required>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>
                                <p class="mt-4">By Creating Account you are agree to our <a href="{{ route('terms-condition') }}"> Terms & conditions</a></p>
                                <div class="form-row mt-5">
                                    <div class="single-input mx-auto">
                                        <button type="submit">Sign Up</button>
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