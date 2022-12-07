@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/statement_of_faith.css') }}">
<!-- Css Stylesheet -->


<!-- statement body section start here -->
<section class="statement_faith_page">
    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>{{ $records->banner_heading }}</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;{{ $records->banner_heading }}</p>
        </div>
    </section>
    <!-- section universal banner end here -->
    <section class="state_faith_sec">
        <div class="container">
            <div class="row">

                {!! $records->description !!}

            </div>
        </div>
    </section>
</section>
<!-- statement body section end here -->

@endsection