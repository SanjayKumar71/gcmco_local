@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/history.css') }}">
<!-- Css Stylesheet -->

<!-- history body start here -->
<section class="history_page">
    <!-- section universal banner start here -->
    <section class="universal_sec" style="background: linear-gradient(180deg, #428C9C52, #428C9C52),url('{{ asset(uploadsDir().$records->banner_image) }}') no-repeat;background-size: cover;">
        <div class="universal_content">
            <h1>{{ $records->banner_heading }}</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;{{ $records->heading }}</p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <section class="history_sec">
        <div class="container">
            <div class="">
                <h4 class="orange_heading">{{ $records->heading }}</h4>
                {!! $records->description !!}
            </div>
        </div>
    </section>
</section>
<!-- history body end here -->

@endsection