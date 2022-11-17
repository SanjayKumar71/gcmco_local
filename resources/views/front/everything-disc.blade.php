@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/heartsaver.css') }}">
<!-- Css Stylesheet -->

<!-- banner section start here -->
<section class="section-head">
    <div class='head'>
        <h1>EVERYTHING DISC</h1>
    </div>
</section>
<!-- banner section end here -->

<!-- Program Sec Start Here -->
<section class="program_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="sale-tag">
                    <h3>ON SALE</h3>
                </div>
                @if(count($programs->programImages) > 0)
                <div class="picture-box">
                    <div class="img-box">
                        @foreach($programs->programImages as $k => $v)
                            <figure><img src="{!! asset(uploadsDir().$v->image) !!}" alt="" class="img-fluid"></figure>
                        @endforeach
                    </div>
                    <div class="sub-image-box">
                        @foreach($programs->programImages as $k1 => $v1)
                            <figure><img src="{!! asset(uploadsDir().$v1->image) !!}" alt="" class="img-fluid"></figure>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
            <div class="col-lg-7">
                <div class="content-wrapper">
                    <div class="title">
                        <h3>{{ $programs->title; }}</h3>
                        <h4>{{ $programs->sub_title; }}</h4>
                        <h5>{{ $programs->third_sub_title; }} </h5>
                    </div>
                    <div class="price">
                        <h3>${{ $programs->price; }} <span class="light">/ {{ $programs->off_in_percent; }}% off</span></h3>
                        @if(isset($programs->programType->name) && $programs->programType->name != '')
                        <h4 class="person">
                            @if(strtoupper($programs->programType->name) == 'IN PERSON')
                            <svg xmlns="http://www.w3.org/2000/svg" width="16.08" height="19.093" viewBox="0 0 16.08 19.093">
                                <g id="Group_9024" data-name="Group 9024" transform="translate(-901.914 54.208)">
                                    <path id="Path_38101" data-name="Path 38101" d="M909.2,173.588c-.414-.037-.828-.067-1.24-.113a15.452,15.452,0,0,1-5.687-1.687.33.33,0,0,1-.215-.29c-.046-.711-.132-1.422-.144-2.133a2.773,2.773,0,0,1,.421-1.56,1.665,1.665,0,0,1,.967-.742,13.273,13.273,0,0,0,3.436-1.487l.349-.219,1.725,5.425c.041-.088.066-.132.082-.179.186-.526.369-1.053.559-1.577a.3.3,0,0,0-.034-.273,5.959,5.959,0,0,1-.51-1.025.779.779,0,0,1,.714-1.105,1.828,1.828,0,0,1,.9.069.708.708,0,0,1,.518.747,2.128,2.128,0,0,1-.446,1.126.622.622,0,0,0-.084.674c.18.434.321.885.478,1.329a.387.387,0,0,0,.107.171l1.7-5.37a1.494,1.494,0,0,1,.135.068,11.5,11.5,0,0,0,3.321,1.513,2.128,2.128,0,0,1,1.7,2.066,9.82,9.82,0,0,1-.143,2.575c-.009.069-.1.145-.176.185a13.844,13.844,0,0,1-3.358,1.287,17.467,17.467,0,0,1-3.289.491c-.073,0-.146.021-.219.033Z" transform="translate(0 -208.703)" fill="#4096d9" />
                                    <path id="Path_38102" data-name="Path 38102" d="M978.869-48.807c-.061-.469-.155-.933-.176-1.4a3.272,3.272,0,0,1,.731-2.177,4.5,4.5,0,0,1,2.086-1.6,3.378,3.378,0,0,1,3.53.659,4.588,4.588,0,0,0,.875.706,1.514,1.514,0,0,1,.671,1.113,5.212,5.212,0,0,1,.023,1.833c-.039.281-.1.559-.147.812.122.08.3.133.354.245a.992.992,0,0,1,.091.57,11.4,11.4,0,0,1-.347,1.326.927.927,0,0,1-.454.611c-.043.021-.058.115-.074.178a4.128,4.128,0,0,1-1.727,2.519,2.879,2.879,0,0,1-3.747-.365,4.178,4.178,0,0,1-1.245-2.18.524.524,0,0,0-.139-.191,1.467,1.467,0,0,1-.212-.23,4.1,4.1,0,0,1-.53-1.84C978.421-48.611,978.53-48.733,978.869-48.807Z" transform="translate(-72.731)" fill="#4096d9" />
                                </g>
                            </svg>
                            @endif
                            {{ $programs->programType->name; }}
                        </h4>
                        @endif
                    </div>
                    {!! $programs->description; !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Program Sec End Here -->

<!-- Tabs Detail Sec Start Here -->
<section class="tabs-detail">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="training-tab" data-toggle="tab" href="#training" role="tab" aria-controls="training" aria-selected="true">ABOUT THIS TRAINING</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="schedule-tab" data-toggle="tab" href="#schedule" role="tab" aria-controls="schedule" aria-selected="false">SCHEDULE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="learning-tab" data-toggle="tab" href="#learning" role="tab" aria-controls="learning" aria-selected="false">LEARNING OBJECTIVES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="feature-tab" data-toggle="tab" href="#feature" role="tab" aria-controls="feature" aria-selected="false">COURSE FEATURES</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">

            <div class="tab-pane fade show active" id="training" role="tabpanel" aria-labelledby="training-tab">
                {!! $programs->about_traning; !!}
            </div>

            <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                <div class="title">
                    <h4>{!! $programs->schedule_heading; !!}</h4>
                </div>

                <div class="all-schedule">
                    @if( count($programs->programSession) > 0)
                        @foreach($programs->programSession as $key => $programSess)
                            <div class="schedule-box">
                                <p class="date" style="width:155px;text-align:center;">{{ \Carbon\Carbon::parse($programSess->date)->format('F jS Y') }}</p>
                                <p class="time">{{ \Carbon\Carbon::parse($programSess->start_time)->format('h:i A') }} - {{ \Carbon\Carbon::parse($programSess->end_time)->format('h:i A') }}</p>
                                <p style="width:250px"><i class="fa fa-map-marker" aria-hidden="true"></i>{{ $programSess->location }}</p>
                                <a href="{{ route('program-detail-book', ['programId'=>$programs->id,'programSessionId'=>$programSess->id] ) }}"><i class="fa fa-pencil" aria-hidden="true"></i> Book Now</a>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="button-group mb-4">
                    <button class="show-more">SHOW MORE DATES</button>
                    <button class="total-schedule">{{ count($programs->programSession) }} Classes Scheduled</button>
                </div>
                <p>{!! $programs->schedule_note; !!}</p>
            </div>

            <div class="tab-pane fade" id="learning" role="tabpanel" aria-labelledby="learning-tab">
                {!! $programs->learning_objective; !!}
            </div>

            <div class="tab-pane fade" id="feature" role="tabpanel" aria-labelledby="feature-tab">
                {!! $programs->course_features; !!}
            </div>

        </div>
    </div>
</section>
<!-- Tabs Detail Sec End Here -->

@endsection