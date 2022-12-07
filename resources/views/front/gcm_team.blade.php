@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/gcm_team.css') }}">
<!-- Css Stylesheet -->

<!-- gcm team body start here -->
<section class="gcm_team_page">

    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>GCM Team</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;GCM Team</p>
        </div>
    </section>
    <!-- section universal banner end here -->
    
    <!-- section gcm team start here -->
    <section class="gcm_team_sec">
        <div class="container">
            
            <div class="gcm_team_top">
                <hr class="black_liner">
                <h4 class="orange_heading">GCM Team</h4>
                <h2 class="heading1">Meet our Team</h2>
            </div>

            <div class="row">
                @if(count($records) > 0)
                    @foreach($records as $gcmTeamKey => $gcmTeamVal)
                        <div class="col-md-3">
                            <div class="gcm_teams">
                                <figure>
                                    <img src="{{ asset(uploadsDir().$gcmTeamVal->profile_image) }}" class="img-fluid" alt="">
                                </figure>
                                <div class="gcm_team_content">
                                    <a href="" class="">{{ $gcmTeamVal->first_name.' '.$gcmTeamVal->last_name }}</a>
                                    <p>{{ $gcmTeamVal->designation }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- section gcm team end here -->


    <!-- section 6th changed Lives start herer-->
    <section class="change_live_sec 6th_sec">
        <div class="container">
            
            <div class="changelive_tophead">
                <h4 class="orange_heading">Changed Lives</h4>
                <h2 class="heading1">What They Say</h2>
            </div>

            <div class="changelivecarousel">
                @if(count($whatTheySayRecords) > 0)
                    @foreach($whatTheySayRecords as $whatTheySayKey => $whatTheySayVal)
                        <div class="change_content">
                            <p class="quote">“</p>
                            <p class="evaluate para_txt2">
                                {!! $whatTheySayVal->comment !!}

                            </p>
                            <h3 class="name thrid_font"> - {!! $whatTheySayVal->first_name." ".$whatTheySayVal->last_name !!} </h3>
                            <div class="avatar">
                                <div class="client">
                                    <img src="{{ asset(uploadsDir().$whatTheySayVal->profile_image) }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </section>
    <!-- section 6th changed Lives end herer-->

</section>


@endsection