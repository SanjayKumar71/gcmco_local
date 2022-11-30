@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/contact_information.css') }}">
<!-- Css Stylesheet -->

<!-- section contact_information start here -->
<section class="contact_infor_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>Contact Information</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Contact Information
            </p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <section class="contact_infor_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="contact_left">
                        <h4 class="orange_heading">Physical Address</h4>
                        <p class="para_txt">
                            154 River Rd , Orrington, ME, 04474
                        </p>
                        <h4 class="orange_heading">Phone Number</h4>
                        <p class="para_txt">
                            207-600-7770
                        </p>
                        <h4 class="orange_heading">Email</h4>
                        <p class="para_txt">
                            info@gcmco.com
                        </p>
                        <h4 class="orange_heading">Kenya Address:</h4>
                        <p class="para_txt">
                            Eldoret, Kenya, 30100
                        </p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact_right">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Name *</label>
                                        <input class="form-control" type="text" name="fname" id="fname"
                                            placeholder="First">
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-end">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="lname" placeholder="Last">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="contact_input">Email *</label>
                                        <input type="email" class="form-control" id="contact_input"
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group my-1">
                                        <label for="phone_input">Phone</label>
                                        <label class="sr-only" for="phone_input">Phone</label>
                                        <!-- <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                <input id="phone" name="phone" type="tel">
                                                    <select class="custom-select mr-sm-2" id="input_select">
                                                        <option selected>Choose...</option>
                                                        <option value="US">US</option>
                                                        <option value="UK">UK</option>
                                                        <option value="can">Canada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" id="phone_input"
                                                placeholder="12345678912">
                                        </div> -->
                                        <input type="tel" id="txtPhone" class="txtbox form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputcomment">Comment or Message *</label>
                                        <textarea class="form-control" id="inputcomment" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="button-group">
                                <button type="submit" class="btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="contact_map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d510676.33010606916!2d35.269336!3d0.512308!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178101ae37f9f535%3A0xe2db337df0fc0820!2sEldoret%2C%20Kenya!5e0!3m2!1sen!2sus!4v1665747540362!5m2!1sen!2sus"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</section>
<!-- section contact_information end here -->

@endsection