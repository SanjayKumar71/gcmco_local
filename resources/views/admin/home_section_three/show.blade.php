@extends('admin.layouts.app')

@section('content')
<!-- BEGIN PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
        {{ Breadcrumbs::render('admin.home_section_three.show', $data) }}
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
                        <label for="icon" class="col-md-2 control-label">Icon *</label>
                        @if($data->icon == 'q1-1.png')
                            <img style="background-color:#4b8df8;" height="100" width="150" src="{!! asset('front_assets/img/'.$data->icon) !!}"/>
                            @else
                            <img style="background-color:#4b8df8;" height="100" width="150" src="{!! asset(uploadsDir().$data->icon) !!}"/>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Title</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->title }}</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Description</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->description }}</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10"></div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <button class="btn black" id="cancel" onclick='window.location.href = "{!! URL::route('admin.home_section_three.index') !!}"'> < Back..</button>
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
<script type="text/javascript" src="{!! URL::to('assets/admin/plugins/ckeditor/ckeditor.js') !!}"></script>
<script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
<script>
jQuery(document).ready(function() {
   // initiate layout and plugins
   App.init();
   Admin.init();
});
</script>
@stop