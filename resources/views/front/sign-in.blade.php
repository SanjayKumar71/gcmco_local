@extends('front.layouts.app')
@section('content')

<!-- Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/book-now.css') }}">
<!-- Stylesheet -->

<!-- Top Small Banner -->
<section class="top-small-banner">
    <div class="container">
        <div class="banner-text text-center">
            <h1>Sign In</h1>
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
                        @if(session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        @error('logginfirst')
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="form-heading">
                            <span>Sign In</span>
                            <span class="right-text">Not a Member ? <a href="{{ route('sign-up') }}">Sign up</a></span>
                        </div>
                        <div class="form-box">
                            <form action="{{ route('sign-in.account') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <input type="text" name="email" class="form-control" id="" placeholder="Email Address" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-row">
                                    <input type="password" name="password" id="password" class="form-control" id="" placeholder="Password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="for-remeber-and-forgot-password mt-4">
                                    <div class="remember-me">
                                        <input type="checkbox" name="rememberme" id="javascript">
                                        <label for="javascript">Remember Me</label>
                                    </div>
                                    <div class="forgot-password">
                                        <a href="{{ route('enter-email') }}">Forgot Password ?</a>
                                    </div>
                                </div>
                                <div class="form-row mt-5">
                                    <div class="single-input mx-auto">
                                        <button type="submit">Sign In</button>
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