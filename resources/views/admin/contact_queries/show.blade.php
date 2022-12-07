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
                                <label class="col-md-2 control-label"><strong>Email</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $records->email }}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Phone</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $records->phone }}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Message</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $records->message }}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
                                    <button class="btn black" id="cancel" onclick='window.location.href = "{!! URL::route('admin.contact_queries.index') !!}"'> < Back..</button>
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