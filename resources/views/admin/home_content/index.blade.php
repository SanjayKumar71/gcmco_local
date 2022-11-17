@extends('admin.layouts.app')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{!! URL::to('assets/admin/plugins/select2/select2.css') !!}"/>
    <link rel="stylesheet" type="text/css" href="{!! URL::to('assets/admin/plugins/select2/select2-metronic.css') !!}"/>
    <link rel="stylesheet" href="{!! URL::to('assets/admin/plugins/data-tables/DT_bootstrap.css') !!}"/>
    <link href="{!! URL::to('assets/admin/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.css') !!}" rel="stylesheet"
          type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
@stop

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
            {{ Breadcrumbs::render('admin.home_content.index') }}
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
                        <i class="fa fa-cog fa-lg"></i> {{ $pageTitle }}
                    </div>
                </div>
                <div class="portlet-body">

                    <h4>&nbsp;</h4>

                    <form method="POST" action="{{ route('admin.home_content.update', $records->id) }}"
                          class="form-horizontal" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="banner" class="col-md-2 control-label">Banner *</label>
                            <div class="col-md-4">
                                <input type="file" name="banner" value="{{ old('banner', $records->banner) }}" class="form-control"/>
                                <input type="hidden" name="previous_banner" value="{{ $records->banner }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="banner_heading" class="col-md-2 control-label">Banner Heading *</label>
                            <div class="col-md-4">
                                <input type="text" name="banner_heading" maxlength="190" value="{{ old('banner_heading', $records->banner_heading) }}" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description_one" class="col-md-2 control-label">Description One</label>
                            <div class="col-md-8">
                                <textarea name="description_one" id="description_one" cols="10" rows="20" class="form-control ckeditor">{{ old('description_one', $records->description_one) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description_two" class="col-md-2 control-label">Description Two</label>
                            <div class="col-md-8">
                                <textarea name="description_two" id="description_two" cols="10" rows="20" class="form-control ckeditor">{{ old('description_two', $records->description_two) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="video_one" class="col-md-2 control-label">Video One *</label>
                            <div class="col-md-4">
                                <input type="file" name="video_one" value="{{ old('video_one', $records->video_one) }}" class="form-control"/>
                                <input type="hidden" name="previous_video_one" value="{{ $records->video_one }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="video_two" class="col-md-2 control-label">Video Two *</label>
                            <div class="col-md-4">
                                <input type="file" name="video_two" value="{{ old('video_two', $records->video_two) }}" class="form-control"/>
                                <input type="hidden" name="previous_video_two" value="{{ $records->video_two }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="section_four_image" class="col-md-2 control-label">Section Four Image</label>
                            <div class="col-md-4">
                                <input type="file" name="section_four_image" value="{{ old('section_four_image', $records->section_four_image) }}" class="form-control"/>
                                <input type="hidden" name="previous_section_four_image" value="{{ $records->section_four_image }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="section_four_description" class="col-md-2 control-label">Section Four Description</label>
                            <div class="col-md-8">
                                <textarea name="section_four_description" id="section_four_description" cols="10" rows="20" class="form-control ckeditor">{{ old('section_four_description', $records->section_four_description) }}</textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="submit" class="btn blue" id="save" value="Save">
                                <input type="button" class="btn black" name="cancel" id="cancel" value="Cancel">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>
    </div>
    <!-- END PAGE CONTENT-->
@stop

@section('footer-js')
    <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/ckeditor/ckeditor.js') !!}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/select2/select2.min.js') !!}"></script>
    <script type="text/javascript"
            src="{!! URL::to('assets/admin/plugins/data-tables/jquery.dataTables.js') !!}"></script>
    <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/data-tables/DT_bootstrap.js') !!}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
    <script src="{!! URL::to('assets/admin/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') !!}"
            type="text/javascript"></script>
    <script>
        jQuery(document).ready(function () {
            // initiate layout and plugins
            App.init();
            Admin.init();

            $('#current_active_term').select2({
                placeholder: "Select Term",
                allowClear: true
            });

            $('#cancel').click(function () {
                window.location.href = '{!! URL::route('admin.dashboard.index') !!}';
            });
        });
    </script>
@stop
