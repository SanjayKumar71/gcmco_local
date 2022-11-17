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
        {{ Breadcrumbs::render('admin.program_type.edit', $data) }}
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

                    <form method="POST" action="{{ route('admin.program_type.update', $data->id) }}" class="form-horizontal"
                          role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Name *</label>
                            <div class="col-md-8">
                                <input type="text" name="name" id="name" maxlength="190"
                                       value="{{ old('name', $data->name) }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="slug" class="col-md-2 control-label">Slug *</label>
                            <div class="col-md-8">
                                <input type="text" name="slug" maxlength="100" id="slug"
                                       value="{{ old('slug', $data->slug) }}" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="icon" class="col-md-2 control-label">Icon *</label>
                            <div class="col-md-4">
                                <input type="file" name="icon" maxlength="128" class="form-control"/>
                                <input type="hidden" name="previous_icon" value="{!! $data->icon !!}"/>
                            </div>
                            <img height="100" width="150" src="{!! asset(uploadsDir().$data->icon) !!}"/>
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
        jQuery(document).ready(function () {
            // initiate layout and plugins
            App.init();
            Admin.init();
            $('#cancel').click(function () {
                window.location.href = "{!! URL::route('admin.program_type.index') !!}";
            });
        });

        $("#name").blur(function () {
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
