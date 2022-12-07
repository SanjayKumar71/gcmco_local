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
                                <label class="col-md-2 control-label"><strong>Video:</strong> </label>
                                <!-- <div class="col-md-8">
                                    <label class="control-label"><source src="{{ asset(uploadsDir().$records->video ?? '') }}" type="video/mp4"></label>
                                </div> -->
                                <div class="col-md-8">
                                    <video width="500" height="240" controls>
                                        <source src="{{URL::asset(uploadsDir().$records->video ?? '')}}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Status</strong> </label>
                                <div class="col-md-8">
                                    <label
                                        class="control-label">{{ !empty($records->status == 1) ? 'Active' : 'Inactive' }}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
                                    <button class="btn black" id="cancel" onclick='window.location.href = "{!! URL::route('admin.videos.index') !!}"'> < Back..</button>
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