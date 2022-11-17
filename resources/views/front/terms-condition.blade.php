@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/terms-condition.css') }}">
<!-- Css Stylesheet -->

<!-- Top Small Banner -->
<section class="top-small-banner">
    <div class="container">
        <div class="banner-text text-center">
            <h1>{!! $data->page_title !!}</h1>
        </div>
    </div>
</section>
<!-- Top Small Banner END hERE -->

<!-- text strat here -->
<section class="text-section">
    <div class="container">
        <div class="row">
            <div class="col-md-11 mx-auto">
                <div class="box-start">
                    <div class="for-heading pb-3">
                        <h6>{!! $data->page_title !!}</h6>
                    </div>
                    {!! $data->content !!}
                </div>
            </div>
        </div>
    </div>
</section>

@endsection