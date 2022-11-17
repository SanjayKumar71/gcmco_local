@extends('admin.layouts.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="{!! asset('assets/admin/css/jquery.datetimepicker.css') !!}"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
@stop
@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
        {{ Breadcrumbs::render('admin.program_session.create') }}
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
                        <i class="fa fa-create"></i> {{ $pageTitle }}
                    </div>
                </div>

                <div class="portlet-body">

                    <h4>&nbsp;</h4>
                    <form method="POST" action="{{ route('admin.program_session.store') }}" class="form-horizontal" role="form"
                          enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="program" class="col-md-2 control-label">Program *</label>
                            <div class="col-md-8">
                                <select name="program_id" id="program_id" class="form-control" required>
                                    <option value=""> Select Program</option>
                                    @php
                                        $programs = \App\Models\Programs::get();
                                    @endphp
                                    @if(isset($programs) && $programs != '')
                                        @foreach($programs as $program)
                                            <option value="{{ $program->id }}"> {{ $program->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-md-2 control-label">Date *</label>
                            <div class="col-md-8">
                                <input type="date" name="date" id="date" maxlength="190" value="{{ old('date') }}"
                                       class="form-control"  required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="start_time" class="col-md-2 control-label">Start Time *</label>
                            <div class="col-md-8">
                                <input type="time" name="start_time" id="start_time" maxlength="190" value="{{ old('start_time') }}"
                                       class="form-control"  required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="end_time" class="col-md-2 control-label">End Time *</label>
                            <div class="col-md-8">
                                <input type="time" name="end_time" id="end_time" maxlength="190" value="{{ old('end_time') }}"
                                       class="form-control"  required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="location" class="col-md-2 control-label">Location *</label>
                            <div class="col-md-8">
                                <input type="text" name="location" id="location" maxlength="190" value="{{ old('location') }}"
                                       class="form-control"  required/>
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
    <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
    <!-- <script src="./jquery.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script>
        jQuery(document).ready(function () {

            // initiate layout and plugins
            App.init();
            Admin.init();
            $('#cancel').click(function () {
                window.location.href = "{!! URL::route('admin.program_session.index') !!}";
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
    <script>
        $(function () {
            $(".select-tags").select2({
                placeholder: "Enter tags",
                tags: true,
                tokenSeparators: [',']
            });
        });
    </script>

@stop
