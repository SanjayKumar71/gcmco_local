@extends('admin.layouts.app')

@section('content')
<!-- BEGIN PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
        {{ Breadcrumbs::render('admin.users.show', $data) }}
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->

<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">

        @include('admin.partials.errors')

        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet box blue">

            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-search"></i> {{ $pageTitle }}
                </div>
            </div>

            <div class="portlet-body">

                <h4>&nbsp;</h4>

                <div class="form-horizontal" role="form">
                    <div class="form-group">
                         <div class="col-md-2">
                           <label class=" col-md-4">
                            @if(adminHasAssets($data->photo) == true)
                            <img height="100" width="100"
                            src="{!! asset(uploadsUrl($data->photo)) !!}" title="{!! $data->name !!}">
                            @else
                            <img height="100" width="100"
                            src="{!! asset(defaultUserImage()) !!}" title="dummy">
                            @endif
                        </label>
                       </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>First Name:</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->first_name }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Last Name:</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->last_name }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Email:</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->email }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Phone:</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->contact_number }}</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Created At:</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->created_at->diffForHumans() }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Updated At:</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->updated_at->diffForHumans() }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <button class="btn black" id="cancel" onclick="window.location.href = '{!! URL::route('admin.users.index') !!}'"> < Back..</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>
</div>
<!-- END PAGE CONTENT-->
@stop

@section('footer-js')
<script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
<script>
jQuery(document).ready(function() {
   // initiate layout and plugins
   App.init();
   Admin.init();
});
</script>
@stop
