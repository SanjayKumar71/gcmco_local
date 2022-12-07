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
                    @if(count($records) > 0)
                        @foreach($records as $galleryKey => $galleryVal)
                            <a href="{{ asset(uploadsDir().$galleryVal->image) }}" class="uk-inline">
                                <figure>
                                    <img src="{{ asset(uploadsDir().$galleryVal->image) }}" class="img-fluid" alt="">
                                </figure>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
</section>
<!-- section gallery end here -->

@endsection