@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/gallery.css') }}">
<!-- Css Stylesheet -->


<!-- section gallery start here -->
<section class="gallery_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>Photo Gallery</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Media &nbsp;&nbsp;<i
                    class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Photo Gallery</p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <section class="gallery_sec">
        <div class="container">
            <div>
                <h4 class="orange_heading">Photo Gallery</h4>
                <div class="gallery_content uk-child-width-1-3@m" class="" uk-grid uk-lightbox="animation: slide">
                    <a href="{{ asset('front_assets/img/gallery/gallery1.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery1.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery2.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery2.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery3.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery3.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery4.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery4.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery5.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery5.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery6.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery6.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery7.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery7.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery8.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery8.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery9.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery9.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery10.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery10.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery11.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery11.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery12.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery12.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery13.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery13.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery14.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery14.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery15.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery15.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery16.webp') }}" class="uk-inline" >
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery16.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery17.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery17.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery18.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery18.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery19.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery19.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery20.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery20.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery21.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery21.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery22.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery22.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery23.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery23.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery24.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery24.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery25.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery25.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery26.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery26.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="#" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery27.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery28.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery28.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery29.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery29.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery30.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery30.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery31.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery31.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery32.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery32.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery33.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery33.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery34.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery34.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery35.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery35.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery36.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery36.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery37.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery37.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery38.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery38.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery39.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery39.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery40.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery40.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery41.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery41.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery42.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery42.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery43.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery43.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery44.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery44.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery45.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery45.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery46.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery46.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery47.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery47.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery48.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery48.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery49.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery49.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery50.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery50.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery51.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery51.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery52.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery52.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery53.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery53.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery54.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery54.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery55.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery55.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery56.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery56.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery57.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery57.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery58.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery58.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery59.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery59.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery60.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery60.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery61.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery61.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery62.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery62.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery63.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery63.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery64.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery64.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery65.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery65.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery66.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery66.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                    <a href="img/gallery/gallery67.webp') }}" class="uk-inline">
                        <figure>
                            <img src="{{ asset('front_assets/img/gallery/gallery67.webp') }}" class="img-fluid" alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </div>
    </section>
</section>
<!-- section gallery end here -->

@endsection