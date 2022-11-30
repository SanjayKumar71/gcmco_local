@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/request_speaker.css') }}">
<!-- Css Stylesheet -->


<!-- request a speaker page start here -->
<section class="request_speaker_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>Request a Speaker</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Request a Speaker
            </p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <section class="request_speak_sec">
        <div class="container">
            <div class="reqest_form">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">Name *</label>
                                <input class="form-control" type="text" name="fname" id="fname" placeholder="First">
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
                                <label for="contact_input">Name of Church *</label>
                                <input type="text" class="form-control" id="request_church">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="contact_input">Pastor's Name *</label>
                                <input type="text" class="form-control" id="request_pastor">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="contact_input">Address *</label>
                                <input type="text" class="form-control" id="request_address" placeholder="Address Line">
                                <label for="contact_input" class="text_label">Address Line 1</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="request_city" placeholder="City">
                                <label for="contact_input" class="text_label">City</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control">
                                <option class="placeholder" value="" selected disabled>State / Province / Region
                                </option>
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>Arizona</option>
                            </select>
                            <label for="" class="text_label">State</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="request_zipcode" placeholder="ZIP / Postal" value="">
                                <label for="contact_input" class="text_label">Zip Code</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="contact_input">Requested Speaking Date</label>
                                <input type="text" class="form-control" id="request_speak_date">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Speaking Event (Choose all that apply) *</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="requestCheck1">
                                <label class="form-check-label" for="requestCheck1">
                                    Church Service
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="requestCheck2">
                                <label class="form-check-label" for="requestCheck2">
                                    Men's Conference
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="requestCheck3">
                                <label class="form-check-label" for="requestCheck3">
                                    Women's Conference
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="requestCheck4">
                                <label class="form-check-label" for="requestCheck4">
                                    High School or College Event
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="requestCheck5">
                                <label class="form-check-label" for="requestCheck5">
                                    Missions Event
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="requestCheck6">
                                <label class="form-check-label" for="requestCheck6">
                                    Other
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Requested Speaker *</label>
                            <select class="form-control form-control-lg mb-4">
                                <option disabled>Requested Speaker</option>
                                <option value="jl">Josh Lawrence</option>
                                <option value="gcma">GCM Ambassador</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputcomment">Comments or Questions</label>
                                <textarea class="form-control" id="inputcomment" rows="4"
                                    placeholder="Comments or Questions"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-group">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>
<!-- request a speaker page end here -->

@endsection