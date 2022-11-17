<!-- Footer Sec Start Here -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer_content">
                    <div class="ft-logoDv">
                        <a href="{{ route('index') }}">
                            @if (isset($siteSettings['siteSettings']->footer_logo) && $siteSettings['siteSettings']->footer_logo != '')
                                <figure><img src="{!! asset(uploadsDir().$siteSettings['siteSettings']->footer_logo) !!}" alt="Web Builder" class="img-fluid" /></figure>
                            @else
                                <figure><img src="{{ asset('front_assets/img/ft-logo.png') }}" class="img-fluid"></figure>
                            @endif
                        </a>
                    </div>
                    <ul class="social-icons">
                        <li><a href="{{ $siteSettings['siteSettings']->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{ $siteSettings['siteSettings']->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                    <!-- <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting
                    </p>
                    <ul class="social_links">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul> -->
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_content">
                    <div class="head">
                        <h5>Hours</h5>
                    </div>
                    <ul class="footer_menus">
                        @php 
                            $terms = \App\Models\Page::where('slug','terms-conditions')->exists();
                            $privacyPolicy = \App\Models\Page::where('slug','privacy-policy')->exists();
                            $cancellation = \App\Models\Page::where('slug','cancellation-policy')->exists();
                        @endphp
                        @if($terms == true)
                            <li><a href="{{ route('terms-condition') }}">Terms & Conditions</a></li>
                        @endif
                        @if($privacyPolicy == true)
                            <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        @endif
                        @if($cancellation == true)
                            <li><a href="{{ route('cancellation-policy') }}">Cancellation Policy</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_content">
                    <div class="head">
                        <h5>Contact Us</h5>
                    </div>
                    <ul class="footer_menus">
                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ $siteSettings['siteSettings']->contact_email }}</a></li>
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> Call Us: {{ $siteSettings['siteSettings']->contact_phone }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer_content">
                    <div class="head">
                        <h5>Newsletter</h5>
                        <p>
                            {{ $siteSettings['siteSettings']->newsletter }}
                        </p>
                    </div>
                    <form action="{{ route('newsletter.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Your Email Addrress" class="form-control" />
                            <button type="submit"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <p> {{ $siteSettings['siteSettings']->copyright }}</p>
    </div>
</div>
<!-- Footer Sec Start Here -->

