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
        {{ Breadcrumbs::render('admin.program_session.edit', $data) }}
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
                    <form method="POST" action="{{ route('admin.program_session.update', $data->id) }}" class="form-horizontal"
                          role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')        
                        <div class="form-group">
                            <label for="category_id" class="col-md-2 control-label">Program *</label>
                            <div class="col-md-8">
                                <select name="program_id" id="program_id" class="form-control" required>
                                    <option value=""> Select Program</option>
                                    @php
                                        $programs = \App\Models\Programs::get();
                                    @endphp
                                    @if(isset($programs) && $programs != '')
                                        @foreach($programs as $program)
                                            <option value="{{ $program->id }}" {{$data->program_id == $program->id  ? 'selected' : ''}}> {{ $program->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-md-2 control-label">Date *</label>
                            <div class="col-md-8">
                                <input type="date" name="date" id="date" value="{{ old('date', $data->date) }}"
                                       class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start_time" class="col-md-2 control-label">Start Time *</label>
                            <div class="col-md-8">
                                <input type="time" name="start_time" id="start_time" value="{{ old('start_time', $data->start_time) }}"
                                       class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="end_time" class="col-md-2 control-label">End Time *</label>
                            <div class="col-md-8">
                                <input type="time" name="end_time" id="end_time" value="{{ old('end_time', $data->end_time) }}"
                                       class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="location" class="col-md-2 control-label">Location *</label>
                            <div class="col-md-8">
                                <input type="text" name="location" id="location" maxlength="190" value="{{ old('location', $data->location) }}"
                                       class="form-control" required/>
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

    <script>

        jQuery(document).ready(function () {
            // initiate layout and plugins
            App.init();
            Admin.init();
            $('#cancel').click(function () {
                window.location.href = "{!! URL::route('admin.program_session.index') !!}";
            });
        });

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
