@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/contact-us.css') }}">
<!-- Css Stylesheet -->

<!-- banner section start here -->
<section class="section-head">
    <div class='head'>
        <h1>Contact Us</h1>
    </div>
</section>
<!-- banner section end here -->

<!-- body section start here -->
<section class="about-us-page">
    <div class="contact-us-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content-wrapper">
                        <div class="title-wrapper">
                            <h4>Contact Us</h4>
                            <p>
                                {{ $siteSettings['siteSettings']->contact_us_description }}
                            </p>
                        </div>
                        <ul class="info">
                            <li>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36.317" height="36.454" viewBox="0 0 36.317 36.454">
                                        <path id="Path_5037" data-name="Path 5037" d="M-1257.448,524.981a5.394,5.394,0,0,1,2.8,1.776c1.407,1.444,2.864,2.842,4.236,4.319a3.321,3.321,0,0,1,.013,4.671c-.88.977-1.836,1.887-2.773,2.811a.413.413,0,0,0-.113.569,21.029,21.029,0,0,0,3.762,5.194,25.957,25.957,0,0,0,5.012,4.242c.508.325,1.055.588,1.577.893a.294.294,0,0,0,.424-.071c.79-.8,1.568-1.622,2.4-2.385a5.667,5.667,0,0,1,1.495-1.059,3.254,3.254,0,0,1,3.79.775c1.568,1.519,3.086,3.089,4.644,4.618a3.6,3.6,0,0,1,.251,5.3c-1.1,1.19-2.229,2.369-3.431,3.457a5.828,5.828,0,0,1-4.586,1.317,20.336,20.336,0,0,1-7.449-2.329,37.165,37.165,0,0,1-9.464-6.683,36.845,36.845,0,0,1-9.508-14.37,13.721,13.721,0,0,1-.83-4.845,5.847,5.847,0,0,1,1.654-4.084q1.441-1.478,2.916-2.923a4.448,4.448,0,0,1,2.262-1.189Zm20.114,34.618a3.921,3.921,0,0,0,2.944-1.031q1.6-1.545,3.1-3.184a1.663,1.663,0,0,0-.032-2.511c-1.6-1.641-3.221-3.255-4.856-4.858a1.578,1.578,0,0,0-2.17-.111,4.477,4.477,0,0,0-.5.449c-.884.878-1.76,1.763-2.646,2.64a1.515,1.515,0,0,1-1.943.317c-.517-.264-1.035-.53-1.532-.828a27.325,27.325,0,0,1-5.982-4.953,22.026,22.026,0,0,1-4.138-5.878,1.635,1.635,0,0,1,.425-2.227c.871-.84,1.741-1.682,2.587-2.546a1.769,1.769,0,0,0,.017-2.873l-.05-.051c-1.46-1.46-2.915-2.924-4.383-4.375a2.952,2.952,0,0,0-.8-.586,1.738,1.738,0,0,0-2.061.516c-.936.91-1.875,1.818-2.76,2.776a5.012,5.012,0,0,0-.94,1.445,6.14,6.14,0,0,0-.116,3.642,22.152,22.152,0,0,0,2.523,6.539,37.394,37.394,0,0,0,17.691,16.279A15.17,15.17,0,0,0-1237.334,559.6Z" transform="translate(1265.209 -524.981)" fill="#1b68ac" />
                                    </svg>
                                </div>
                                <div class="txt">
                                    <h4>Call Us : <a href="tel:{{ $siteSettings['siteSettings']->contact_phone }}">{{ $siteSettings['siteSettings']->contact_phone }}</a></h4>
                                    <p>Office Time : {{ $siteSettings['siteSettings']->office_timing }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="37.319" height="24.892" viewBox="0 0 37.319 24.892">
                                        <path id="Path_5038" data-name="Path 5038" d="M-1930.162,691.62a5.721,5.721,0,0,1-.515.947,1.917,1.917,0,0,1-1.6.64q-5.9-.006-11.805,0-10.622,0-21.242,0a2.137,2.137,0,0,1-1.46-.453,1.952,1.952,0,0,1-.7-1.574q.007-3.644,0-7.287,0-6.686,0-13.372a1.963,1.963,0,0,1,2.194-2.205h32.756a2.044,2.044,0,0,1,2.367,1.585Zm-1.458-20.939c-.165.12-.273.2-.379.276q-7.33,5.5-14.659,10.993a3.392,3.392,0,0,1-4.3.012l-14.718-11.035c-.1-.075-.2-.146-.328-.233v19.985c.137-.162.23-.269.32-.38l6.922-8.552c.268-.33.525-.669.81-.984a.7.7,0,0,1,.983-.067.715.715,0,0,1,.124.954,2.7,2.7,0,0,1-.179.23l-7.7,9.515c-.086.107-.167.218-.264.344h32.343c-.091-.121-.153-.21-.22-.294l-7.52-9.287c-.13-.16-.267-.316-.386-.484a.7.7,0,0,1,.111-.981.713.713,0,0,1,.986.071c.068.069.126.148.187.223l7.589,9.371c.076.094.159.184.282.325Zm-33.189-.916c.12.1.172.147.228.189q7.282,5.464,14.565,10.925a1.944,1.944,0,0,0,2.4-.008q7.27-5.448,14.537-10.9a1.6,1.6,0,0,1,.238-.123l-.084-.084Z" transform="translate(1967.481 -668.315)" fill="#1b68ac" />
                                    </svg>
                                </div>
                                <div class="txt">
                                    <h4>Email :</h4>
                                    <a href="mailto:{{ $siteSettings['siteSettings']->contact_email }}">{{ $siteSettings['siteSettings']->contact_email }}</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="27.647" height="37.5" viewBox="0 0 27.647 37.5">
                                        <g id="Group_7773" data-name="Group 7773" transform="translate(-21052.144 -4591)">
                                            <path id="Path_5039" data-name="Path 5039" d="M-1607.811-109.754a2.715,2.715,0,0,1-1.5-1.249q-4.552-6.937-9.123-13.862a17.565,17.565,0,0,1-2.708-6.536,12.6,12.6,0,0,1,.358-5.859,13.649,13.649,0,0,1,4.717-7.008,13.534,13.534,0,0,1,5.943-2.729c.618-.12,1.249-.174,1.874-.259h1.462c.372.047.747.082,1.117.143a13.552,13.552,0,0,1,11.094,8.923,13.181,13.181,0,0,1-.7,10.973,24.585,24.585,0,0,1-1.556,2.684c-2.955,4.517-5.934,9.017-8.9,13.53a2.716,2.716,0,0,1-1.5,1.248Zm.3-1.553c.149-.207.261-.349.359-.5,1.664-2.524,3.334-5.045,4.987-7.576,1.673-2.561,3.366-5.11,4.98-7.709a12.227,12.227,0,0,0,1.8-5.44,11.463,11.463,0,0,0-2.76-8.653,11.86,11.86,0,0,0-11.068-4.3,11.486,11.486,0,0,0-5.369,2.141,12.049,12.049,0,0,0-4.528,6.173,11.054,11.054,0,0,0-.5,5.016,15.376,15.376,0,0,0,2.5,6.338q4.623,7.049,9.271,14.081C-1607.754-111.608-1607.652-111.49-1607.512-111.307Z" transform="translate(22673.48 4738.254)" fill="#1b68ac" />
                                            <path id="Path_5040" data-name="Path 5040" d="M-1562.964-81.384a7.322,7.322,0,0,1-7.3-7.352,7.339,7.339,0,0,1,7.35-7.306,7.339,7.339,0,0,1,7.277,7.378A7.323,7.323,0,0,1-1562.964-81.384Zm.061-13.031a5.727,5.727,0,0,0-5.737,5.636,5.719,5.719,0,0,0,5.6,5.771,5.715,5.715,0,0,0,5.792-5.647A5.727,5.727,0,0,0-1562.9-94.415Z" transform="translate(22628.906 4693.562)" fill="#1b68ac" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="txt">
                                    <h4>Address :</h4>
                                    <p>{{ $siteSettings['siteSettings']->address }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('contact_queries.store') }}">
                    @csrf
                        <div class="title">
                            <h4>Contact Us Form</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Full Name" name="full_name" class="form-control" required value="{{ old('full_name') }}">
                                    @error('full_name') <span class="error" style="font-size:60%;color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" name="email" class="form-control" required value="{{ old('email') }}">
                                    @error('email') <span class="error" style="font-size:60%;color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" placeholder="Phone" name="phone" class="form-control" value="{{ old('phone') }}">
                                    @error('phone') <span class="error" style="font-size:60%;color:red;">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select style="height: auto!important;" class="form-control time_zone_contactus" name="time_zone" id="time_zone">
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="time" placeholder="Best Time To Call" name="best_time_to_call" class="form-control" value="{{ old('best_time_to_call') }}">
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Message" required>{{ old('message') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="button-group">
                                    <button class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="map-contact">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.50140102212!2d-0.12123328434360657!3d51.50401661877181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2s!4v1650926070280!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<script src="{{ asset('front_assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('front_assets/js/timezones.full.js') }}"></script>
<script>
    $('#time_zone').timezones();
</script>
<!-- body section end here -->
@endsection