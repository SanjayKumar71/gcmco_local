<!-- Footer Start Here -->
<!-- <footer>
    <div class="container">

    </div>
</footer> -->
<footer>
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-12">
                <div class="footer_content">

                    <div class="logoDv">
                        <a href="{{ route('index') }}">
                            <figure>
                                @if( isset( $siteSettings['siteSettings']->logo ) && $siteSettings['siteSettings']->logo != '' )
                                    <img src="{!! asset(uploadsDir().$siteSettings['siteSettings']->footer_logo) !!}" class="img-fluid" alt="">
                                    @else
                                        <img src="{{ asset('front_assets/img/home/gcmco-footer-logo.png') }}" class="img-fluid" alt="">
                                @endif
                            </figure>
                        </a>
                    </div>

                    <div>
                        <p class="mt-4">
                            {{ $siteSettings['siteSettings']->footer_sentence }}
                        </p>
                    </div>
                    
                    <ul class="social_icons">
                        <li><a href="{{ $siteSettings['siteSettings']->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $siteSettings['siteSettings']->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $siteSettings['siteSettings']->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>

                    <!-- <p>SEIS and EIS Advance Assurance Status</p> -->
                </div>
            </div>

            <div class="col-lg-8 col-md-12">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="footer_content">
                            <div class="head">
                                <!-- <h5>General</h5> -->
                                <h5>Quick Links</h5>
                            </div>
                            <ul class="footer-links">
                                <li><a href="{{ route('give') }}">Donate</a></li>
                                <li><a href="{{ route('news_article') }}">Media</a></li>
                                <li><a href="{{ route('contact_information') }}">Contact</a></li>
                                <li><a href="{{ route('history') }}">History</a></li>
                                <li><a href="{{ route('gcm_team') }}">GCM Team</a></li>
                                <li><a href="{{ route('statement_of_faith') }}">Statement of faith</a></li>
                                <li><a href="{{ route('who_we_are') }}">Who We Are</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="footer_content">
                            <div class="head">
                                <h5>Contact</h5>
                            </div>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-phone "></i> {{ $siteSettings['siteSettings']->contact_phone }}</a></li>
                                <hr class="liner">
                                <li><a href="#"> <i class="fas fa-mail-bulk "></i> {{ $siteSettings['siteSettings']->contact_email }}</a></li>
                                <hr class="liner">
                                <li><a href="#"> <i class="fa fa-map-marker mr-1" aria-hidden="true"></i> {{ $siteSettings['siteSettings']->address }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="footer_content">
                            <div class="head">
                                <h5>STAY INFORMED ABOUT OUR WORK</h5>
                            </div>
                            <div>
                                <p>
                                    Sign up to receive email updates on the work of Great Commission Ministries, prayer
                                    alerts, and Volunteer opportunities
                                </p>
                                <div>
                                    <a href="{{ route('signup') }}" class="gcmco-btn">Click to Sign Up</a>
                                </div>
                            </div>
                            <!-- <ul class="footer-links">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="job.php">Careers</a></li>
                                <li><a href="about.php#mission">Our Mission</a></li>
                                <li><a href="about.php#newsBlog">Blogs</a></li>
                            </ul> -->
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="copyright">
                <div class="left">
                    <p>© {{ $siteSettings['siteSettings']->copyright }}</p>
                </div>
                <div class="right">
                    <p>Crafted by The Web Founders</p>
                    <!-- <ul class="links">
                    <li><a href="cookies.php">Cookies</a></li>
                    <li class="spacer">|</li>
                    <li><a href="term.php">Term of Use</a></li>
                    <li class="spacer">|</li>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                </ul> -->
                </div>
            </div>
        </div>
    </div>
    <a id="backtotop"></a>
</footer>
<!-- Footer End Here -->
