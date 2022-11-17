@extends('admin.layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/admin/css/jquery.datetimepicker.css') !!}"/>
@stop
@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
        {{ Breadcrumbs::render('admin.about_us_program_section.edit', $data) }}
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
                        <i class="fa fa-edit"></i> {{ $pageTitle }}
                    </div>
                </div>

                <div class="portlet-body">

                    <h4>&nbsp;</h4>
                    <form method="POST" action="{{ route('admin.about_us_program_section.update', $data->id) }}" class="form-horizontal"
                          role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="icon" class="col-md-2 control-label">Icon *</label>
                            <div class="col-md-8">
                                <input type="text" name="icon" class="form-control" value="{{ $data->icon }}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="heading" class="col-md-2 control-label">Heading *</label>
                            <div class="col-md-8">
                                <input type="text" name="heading" id="heading" maxlength="190"
                                       value="{{ old('heading', $data->heading) }}"
                                       class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="content" class="col-md-2 control-label">Description *</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control ckeditor"
                                          maxlength="65000">{!! old('description', $data->description) !!}</textarea>
                            </div>
                        </div>

                        <input type="hidden" name="id" value="{{ $data->id }}">
                        
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
    <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
    <script src="{!! asset('assets/admin/scripts/custom/jquery.datetimepicker.full.js') !!}"></script>

    <script>
        $('#start_time').datetimepicker({
            minDate: 0
        });

        $('#end_time').datetimepicker({
            onShow: function (ct) {
                this.setOptions({
                    minDate: jQuery('#start_time').val() ? jQuery('#start_time').val() : false
                })
            }
        });

        jQuery(document).ready(function () {
            // initiate layout and plugins
            App.init();
            Admin.init();
            $('#cancel').click(function () {
                window.location.href = "{!! URL::route('admin.about_us_program_section.index') !!}";
            });
        });

        $("#title").blur(function () {
            var value = $(this).val();
            $('#slug').val(slugify(value));
        }).blur();

        function slugify(text) {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-')           // Replace spaces with -
                .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                .replace(/^-+/, '')             // Trim - from start of text
                .replace(/-+$/, '');            // Trim - from end of text
        }
    </script>
@stop
