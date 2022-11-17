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
        {{ Breadcrumbs::render('admin.events.edit', $data) }}
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

                    <form method="POST" action="{{ route('admin.events.update', $data->id) }}" class="form-horizontal"
                          role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title" class="col-md-2 control-label">Title *</label>
                            <div class="col-md-8">
                                <input type="text" name="title" id="title" maxlength="190"
                                       value="{{ old('title', $data->title) }}"
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
                            <label for="content" class="col-md-2 control-label">Description *</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control"
                                          maxlength="65000">{!! old('description', $data->description) !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="footer_sentence" class="col-md-2 control-label">Image *</label>
                            <div class="col-md-4">
                                <input type="file" name="image" maxlength="128" class="form-control"/>
                                <input type="hidden" name="previous_image" value="{!! $data->image !!}"/>
                            </div>
                            <img height="100" width="150" src="{!! asset(uploadsDir().$data->image) !!}"/>
                        </div>
                        <div class="form-group">
                            <label for="footer_sentence" class="col-md-2 control-label">Is Feature <span class="required">*</span>
                            </label>
                            <div class="col-md-4">
                                <select name="is_feature" id="is_feature" required class="form-control">
                                    <option value="0" {{ old('is_feature',$data->is_feature) == '0' ? 'selected="selected"' : '' }}> No</option>
                                    <option value="1" {{ old('is_feature',$data->is_feature) == '1' ? 'selected="selected"' : '' }}> Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="last_name" class="col-md-2 control-label">Status *</label>
                            <div class="col-md-4">
                                <select class="form-control" name="status">
                                    <option value=""> - Select -</option>
                                    <option
                                        value="1" {{ old('status',$data->status) == '1' ? 'selected="selected"' : '' }}>
                                        Active
                                    </option>
                                    <option
                                        value="0" {{ old('status',$data->status) == '0' ? 'selected="selected"' : '' }}>
                                        Non-Active
                                    </option>
                                </select>
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
                window.location.href = "{!! URL::route('admin.events.index') !!}";
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