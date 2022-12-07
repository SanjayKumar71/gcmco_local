@extends('front.layouts.app')
@section('content')

<!-- Css Stylesheet -->
<link rel="stylesheet" href="{{ asset('front_assets/css/request_speaker.css') }}">
<!-- Css Stylesheet -->


<!-- request a speaker page start here -->
<section class="request_speaker_page">

    <!-- section universal banner start here -->
    <section class="universal_sec">
        <div class="universal_content">
            <h1>Request a Speaker</h1>
            <p>Home &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Request a Speaker
            </p>
        </div>
    </section>
    <!-- section universal banner end here -->

    <section class="request_speak_sec">
        <div class="container">
            <div class="reqest_form">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @php session()->forget('success'); @endphp
                @endif
                <form action="{{ route('request_speaker.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">Name *</label>
                                <input class="form-control" type="text" name="first_name" 
                                    id="first_name" placeholder="First" required>
                                    @if($errors->has('first_name'))
                                        <div class="error" style="color: red;">{{ $errors->first('first_name') }}</div>
                                    @endif
                            </div>
                        </div>
                        <div class="col-md-6 align-self-end">
                            <div class="form-group">
                                <input type="text" class="form-control" name="last_name" 
                                    id="last_name" placeholder="Last">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="contact_input">Name of Church *</label>
                                <input type="text" class="form-control" id="request_church" 
                                    name="church_name" required>
                                @if($errors->has('church_name'))
                                    <div class="error" style="color: red;">{{ $errors->first('church_name') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="contact_input">Pastor's Name *</label>
                                <input type="text" class="form-control" name="pastor_name"
                                    id="request_pastor" required>
                                @if($errors->has('pastor_name'))
                                    <div class="error" style="color: red;">{{ $errors->first('pastor_name') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="contact_input">Address *</label>
                                <input type="text" class="form-control" name="address" 
                                    id="request_address" placeholder="Address Line" required>
                                <label for="contact_input" class="text_label">Address Line 1</label>
                                @if($errors->has('address'))
                                    <div class="error" style="color: red;">{{ $errors->first('address') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="city" 
                                    id="request_city" placeholder="City">
                                <label for="contact_input" class="text_label">City</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="state" 
                                    id="request_state" placeholder="State">
                            <label for="" class="text_label">State</label>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="zip"
                                    id="request_zipcode" placeholder="ZIP / Postal" value="">
                                <label for="contact_input" class="text_label">Zip Code</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="contact_input">Requested Speaking Date *</label>
                                <input type="date" class="form-control" name="speaking_date"
                                    id="request_speak_date" required>
                                @if($errors->has('speaking_date'))
                                    <div class="error" style="color: red;">{{ $errors->first('speaking_date') }}</div>
                                @endif    
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <label for="">Speaking Event (Choose all that apply) *</label>
                            @if($errors->has('speaking_event'))
                                    <div class="error" style="color: red;">{{ $errors->first('speaking_event') }}</div>
                            @endif
                            @if(count($speakingEventData) > 0)
                                @foreach($speakingEventData as $speakingEventKey => $speakingEventVal)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $speakingEventVal->title }}" 
                                            name="speaking_event[]" id="requestCheck{{ $speakingEventVal->id }}">
                                        <label class="form-check-label" for="requestCheck{{ $speakingEventVal->id }}">
                                            {!! $speakingEventVal->title !!}
                                        </label>
                                    </div>
                                @endforeach
                            @endif
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="other" name="speaking_event[]" id="requestCheck{{ $speakingEventVal->id }}">
                                <label class="form-check-label" for="requestCheck{{ $speakingEventVal->id }}">
                                    Other
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Requested Speaker *</label>
                            <select name="speaker_id" class="form-control form-control-md mb-4" required>
                                <option value="">- Select Speaker -</option>
                                @if(count($speakerData) > 0)
                                    @foreach($speakerData as $speakerKey => $speakerVal)
                                        <option value="{{ $speakerVal->id }}">
                                            {{ $speakerVal->first_name }} 
                                            @if(isset($speakerVal->last_name) && $speakerVal->last_name != '')
                                                {{ $speakerVal->last_name }}
                                            @endif
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                            @if($errors->has('speaker_id'))
                                <div class="error" style="color: red;">{{ $errors->first('speaker_id') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputcomment">Comments or Questions</label>
                                <textarea class="form-control" name="comment" 
                                    id="inputcomment" rows="4" placeholder="Comments or Questions"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="button-group">
                        <button type="submit" class="btn">Submit</button>
                    </div>

                </form>
                
            </div>
        </div>
    </section>
</section>
<!-- request a speaker page end here -->

@endsection