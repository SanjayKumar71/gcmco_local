@extends('admin.layouts.app')

@section('content')

    @include('admin.layouts.partials.overview')
    <div class="container-fluid">

        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">

                @include('admin.partials.errors')

                <!-- BEGIN SAMPLE FORM card-->
                <div class="card box blue">

                    <div class="card-header">
                        <div class="caption">
                            <i class="fa fa-search"></i> {{ $pageTitle }}
                        </div>
                    </div>

                    <div class="card-body">

                        <h4>&nbsp;</h4>

                        <div class="form-horizontal" role="form">
                            
                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>First Name</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $records->first_name }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Last Name</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $records->last_name }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Speaker Name</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">
                                        @if(isset($records->getSpeaker->first_name) && $records->getSpeaker->first_name != '')
                                            {!! $records->getSpeaker->first_name !!}
                                        @endif
                                        @if(isset($records->getSpeaker->last_name) && $records->getSpeaker->last_name != '')
                                            {!! $records->getSpeaker->last_name !!}
                                        @endif
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Church Name</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $records->church_name }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Pastor Name</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $records->pastor_name }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Address Line1</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $records->address }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>City</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $records->city }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>State</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $records->state }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Zip Code</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $records->zip }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Speaking Date</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $records->speaking_date }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Speaking Events</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ json_decode($records)->speaking_event }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Comment</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ json_decode($records->comment) }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
                                    <button class="btn black" id="cancel" onclick='window.location.href = "{!! URL::route('admin.speaker_requests.index') !!}"'> < Back..</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END SAMPLE FORM card-->

            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>

@endsection