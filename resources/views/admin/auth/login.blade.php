<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @include('admin.layouts.partials.header_links')
</head>
<body>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5 align-self-center">

            <!-- Heading -->
            <h1 class="display-4 text-center mb-3">
                ADMIN LOGIN
            </h1>

            <!-- Subheading -->
            <p class="text-muted text-center mb-5">
                {{ env('APP_NAME') }} Admin Panel Login.
            </p>

            @if (count($errors) > 0)
                <div class="alert alert-danger custom">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br />
                    @endforeach
                </div>
            @endif

            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    {{ session('message') }}
                </div>
        @endif

            <!-- Form -->
            <form method="post" action="{{ route('admin.auth.login') }}">
            @csrf

            <!-- Email address -->
                <div class="form-group">

                    <!-- Label -->
                    <label class="form-label">
                        Email Address
                    </label>

                    <!-- Input -->
                    <input type="email" name="email" required class="form-control" placeholder="name@address.com">

                </div>

                <!-- Password -->
                <div class="form-group">

                    <!-- Label -->
                    <label class="form-label">
                        Password
                    </label>

                    <!-- Input group -->
                    <div class="input-group input-group-merge">

                        <!-- Input -->
                        <input class="form-control" name="password" required type="password" id="upass"
                               placeholder="Enter your password">
                        <!-- Icon -->
                        <span class="input-group-text">
                  <i class="fe fe-eye" onclick="toggePassword()" id="toggleBtn"></i>
                </span>
                    </div>
                </div>

                <!-- Submit -->
                <button class="btn btn-lg w-100 btn-primary mb-3">
                    Sign In
                </button>
                <!-- Link -->
            </form>

        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Image -->
            <div class="bg-cover h-100 min-vh-100 mt-n1 me-n3"
                 style="background-image: url({{asset('assets/admin/assets/img/covers/auth-side-cover.jpg')}})" ;></div>
        </div>
    </div> <!-- / .row -->
</div>


@include('admin.layouts.partials.footer_links')
</body>
</html>









{{--OLD Form--}}

{{--@extends('admin.layouts.login')--}}

{{--@section('content')--}}

{{--<!-- BEGIN LOGIN FORM -->--}}
{{--<form method="POST" action="" class="login-form">--}}
{{--    @csrf--}}
{{--    @method('POST')--}}
{{--    <h3 class="form-title">ADMIN LOGIN</h3>--}}

{{--    <div class="alert alert-danger display-hide">--}}
{{--        <button class="close" data-close="alert"></button>--}}
{{--        <span>Please enter username and password</span>--}}
{{--    </div>--}}

{{--    @if (count($errors) > 0)--}}
{{--        <div class="alert alert-danger custom">--}}
{{--            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                {{ $error }}<br />--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    @if (session()->has('message'))--}}
{{--        <div class="alert alert-success">--}}
{{--            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>--}}
{{--            {{ session('message') }}--}}
{{--        </div>--}}
{{--    @endif--}}

{{--    <div class="form-group">--}}
{{--        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->--}}
{{--        <label class="control-label visible-ie8 visible-ie9">Email</label>--}}
{{--        <div class="input-icon">--}}
{{--            <i class="fa fa-user"></i>--}}
{{--            <input id="userName" class="form-control placeholder-no-fix" type="text" autocomplete="off" name="email" autofocus onKeyPress="return checkSubmit(event)" />--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label class="control-label visible-ie8 visible-ie9">Password</label>--}}
{{--        <div class="input-icon">--}}
{{--            <i class="fa fa-lock"></i>--}}
{{--            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" name="password" onKeyPress="return checkSubmit(event)" />--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="form-actions">--}}
{{--        <button type="submit" class="btn green pull-right">--}}
{{--            Login <i class="m-icon-swapright m-icon-white"></i>--}}
{{--        </button>--}}
{{--        <label class="checkbox"><input type="checkbox" name="remember" value="1"/> Remember me </label>--}}
{{--        <input type="submit" id="checking" value="" style="display:none;" />--}}
{{--    </div>--}}
{{--    <div class="forget-password">--}}
{{--        <h4>Forgot your password?</h4>--}}
{{--        <p>--}}
{{--            <a href="{{ route('admin.password.request')  }}">--}}
{{--                Click Here--}}
{{--            </a>--}}
{{--            to retrieve your password.--}}
{{--        </p>--}}
{{--    </div>--}}
{{--</form>--}}
{{--<!-- END LOGIN FORM -->--}}

{{--@stop--}}
