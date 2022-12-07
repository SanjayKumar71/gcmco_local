@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/sponsor.css') }}">
<!-- Css Stylesheet -->

<!-- sponsor body start here -->
<section class="sponsor_page">
    <!-- section universal banner start here -->
    <section class="universal_sec" style="background: linear-gradient(180deg, #428C9C52, #428C9C52),url('{{ asset(uploadsDir().$sponsorData->banner) }}') no-repeat;background-size: cover;">
        <div class="universal_content">
            <h1>{{ $sponsorData->banner_heading }}</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;{{ $sponsorData->banner_heading }}</p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <!-- section body start here -->
    <section class="sponsor_sec" >
        <div class="container">
            <div class="sponsor_content">
                <h1>{{ $sponsorData->heading }}</h1>
                <h4>{{ $sponsorData->sub_heading }}</h4>
                <figure>
                    <img src="{!! asset(uploadsDir().$sponsorData->image) !!}" class="img-fluid" alt="">
                </figure>
                <p>
                    {!! $sponsorData->description !!}
                </p>
                <div class="row">
                    <div class="col-md-9">
                    <hr class="black_liner">
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <div class="sponsor_btn">
                            <a href="{{ route('contact_information') }}" class="gcmco-btn">Get Involved Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section body end here -->
</section>
<!-- sponsor body end here -->

@endsection