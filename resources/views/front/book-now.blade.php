@extends('front.layouts.app')
@section('content')
<!-- Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/book-now.css') }}">
<!-- Stylesheet -->

<!-- Top Small Banner -->
<section class="top-small-banner">
    <div class="container">
        <div class="banner-text text-center">
            <h1>BOOK NOW</h1>
        </div>
    </div>
</section>
<!-- Top Small Banner END hERE -->


<!-- fORM section Start -->
<section class="form-section">
    <div class="container">
        <div class="form-start">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="form-start mt-5 mb-5">
                        <div class="form-heading">
                            <span>Book Now</span>
                        </div>
                        <div class="form-box">
                            <form action="{{ route('payment') }}" method="POST" class="book_now_form">
                                @csrf
                                <div class="form-group">
                                    <select class="form-control" name="category" id="category">
                                        <option>Select Program Category</option>
                                        @if(count($records) > 0)
                                            @foreach($records as $key => $val)
                                                <option value="{{ $val->id }}" @if($selectedProgram->category->id == $val->id) selected @endif>{{ $val->title }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="program" id="program">
                                        <option>Select Program</option>
                                        @if(count($records) > 0)
                                            @foreach($records as $key => $val)
                                                @foreach($val->programs as $k => $v)
                                                    <option value="{{ $v->id }}" @if($selectedProgram->id == $v->id) selected @endif>{{ $v->title }}</option>
                                                @endforeach
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="schedule-stuff">
                                    <div class="heading">
                                        <h3>Schedule Program</h3>
                                    </div>
                                    <div class="all-schedule">
                                        @if(count($records) > 0)
                                            @foreach($records as $key => $val)
                                                @foreach($val->programs as $k => $v)
                                                    @foreach($v->programSession as $k2 => $v2)
                                                        <label class="schedule_container">
                                                            <span class="checkmark">
                                                                <div class="schedule-box">
                                                                    <div class="date col-lg-4">
                                                                        <input type="radio" name="sessionRadio" value="{{ $v2->id }}" @if( $v2->id == $programSessionId) checked @endif>
                                                                        <span class="schedule-date" style="width:155px;text-align:center;">{{ \Carbon\Carbon::parse($v2->date)->format('F jS Y') }}</span>
                                                                    </div>
                                                                    <div class="time col-lg-4">
                                                                        <span>{{ \Carbon\Carbon::parse($v2->start_time)->format('h:i A') }} - {{ \Carbon\Carbon::parse($v2->end_time)->format('h:i A') }}</span>
                                                                    </div>
                                                                    <div class="location col-lg-4">
                                                                        <a><span><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $v2->location }}</span></a>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </label>
                                                    @endforeach
                                                @endforeach
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fORM section End here -->

@endsection