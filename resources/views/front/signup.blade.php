@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/signup.css') }}">
<!-- Css Stylesheet -->

<!-- signup page start here -->
<section class="signup_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>Sign Up</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Sign Up</p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <section class="signup_sec">
        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="signup_form">

                        <form action="{{ route('signup.create') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="first_name">Name *</label>
                                        <input class="form-control" type="text" name="first_name" id="first_name"
                                            placeholder="First">
                                        <label for="" class="text_label">First</label>
                                    </div>
                                </div>

                                <div class="col-md-6 align-self-end">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last">
                                        <label for="" class="text_label">Last</label>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="signupemail">Email *</label>
                                        <input type="email" class="form-control" id="signupemail">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password *</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                        <i class="far fa-eye" id="togglePassword" style="float:right; cursor: pointer;"></i>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label for="">Preferred Language (Select One): *</label>
                                    <select class="form-control form-control-lg">
                                        <option>English</option>
                                        <option>Spanish</option>
                                        <option>Arabic</option>
                                    </select>
                                </div>
                            </div>

                            <div class="button-group">
                                <button type="submit" class="btn">Send</button>
                            </div>

                        </form>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="signup_right">
                        <h2>SUPPORT</h2>
                        <p>
                            WHERE MOST NEEDED
                        </p>
                        <p>
                            Your gift to” Where most needed” equips Great Commission Ministries with the resources-
                            including personal, discipleship materials, food, housing for women in distress, Hope Homes
                            for
                            children, clothing , and equipment- to fulfill our mission of relief and evangelism in
                            Africa.
                        </p>
                        <div class="btn_give">
                            <div class="button-group">
                                <a href="give.php" class="btn">Give</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</section>
<!-- signup page end here -->

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });
</script>

@endsection