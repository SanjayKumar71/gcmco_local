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
        {{ Breadcrumbs::render('admin.programs.edit', $data) }}
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
                    <form method="POST" action="{{ route('admin.programs.update', $data->id) }}" class="form-horizontal"
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
                            <label for="sub_title" class="col-md-2 control-label">Sub Title *</label>
                            <div class="col-md-8">
                                <input type="text" name="sub_title" id="sub_title" maxlength="190" value="{{ old('sub_title', $data->sub_title) }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="third_sub_title" class="col-md-2 control-label">Third Sub Title *</label>
                            <div class="col-md-8">
                                <input type="text" name="third_sub_title" id="third_sub_title" maxlength="190" value="{{ old('third_sub_title', $data->third_sub_title) }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_id" class="col-md-2 control-label">Category *</label>
                            <div class="col-md-8">
                                <select name="category_id" id="category_id" class="form-control">
                                    <option value="0"> Select Category</option>
                                    @php
                                        $cats = \App\Models\Category::get();
                                    @endphp
                                    @if(isset($cats) && $cats != '')
                                        @foreach($cats as $cat)
                                            <option value="{{ $cat->id }}" {{$data->category_id == $cat->id  ? 'selected' : ''}}> {{ $cat->title }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-md-2 control-label">Price *</label>
                            <div class="col-md-8">
                                <input type="number" name="price" id="price" maxlength="100" value="{{ old('price', $data->price) }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="off_in_percent" class="col-md-2 control-label">Off In Percent *</label>
                            <div class="col-md-8">
                                <input type="number" name="off_in_percent" id="off_in_percent" maxlength="3" value="{{ old('off_in_percent', $data->off_in_percent) }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="program_type" class="col-md-2 control-label">Program Type *</label>
                            <div class="col-md-8">
                                <select name="program_type" id="program_type" class="form-control">
                                    <option value="0"> Select Program Type</option>
                                    @php
                                        $program_types = \App\Models\ProgramType::get();
                                    @endphp
                                    @if(isset($program_types) && $program_types != '')
                                        @foreach($program_types as $program_type)
                                            <option value="{{ $program_type->id }}" {{$data->program_type == $program_type->id  ? 'selected' : ''}}> {{ $program_type->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content" class="col-md-2 control-label">Description *</label>
                            <div class="col-md-8">
                                <textarea name="description" class="form-control ckeditor"
                                          maxlength="65000">{!! old('description', $data->description) !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="about_traning" class="col-md-2 control-label">About Training *</label>
                            <div class="col-md-8">
                                <textarea name="about_traning" id="about_traning" cols="100" rows="10" class="form-control ckeditor">{!! old('about_traning', $data->about_traning) !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="schedule_heading" class="col-md-2 control-label">Schedule Heading *</label>
                            <div class="col-md-8">
                                <input type="text" name="schedule_heading" id="schedule_heading" value="{{ old('schedule_heading', $data->schedule_heading) }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="schedule_note" class="col-md-2 control-label">Schedule Note *</label>
                            <div class="col-md-8">
                                <input type="text" name="schedule_note" id="schedule_note" value="{{ old('schedule_note', $data->schedule_note) }}"
                                       class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="learning_objective" class="col-md-2 control-label">Learning Objective *</label>
                            <div class="col-md-8">
                                <textarea name="learning_objective" id="learning_objective" cols="100" rows="10" class="form-control ckeditor">{!! old('learning_objective', $data->learning_objective) !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="course_features" class="col-md-2 control-label">Course Features *</label>
                            <div class="col-md-8">
                                <textarea name="course_features" id="course_features" cols="100" rows="10" class="form-control ckeditor">{!! old('course_features', $data->course_features) !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="student_material_classroom" class="col-md-2 control-label">Student Material Class Room *</label>
                            <div class="col-md-8">
                                <textarea name="student_material_classroom" id="student_material_classroom" cols="100" rows="10" class="form-control ckeditor">{!! old('student_material_classroom', $data->student_material_classroom) !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="student_material_online" class="col-md-2 control-label">Student Material Online *</label>
                            <div class="col-md-8">
                                <textarea name="student_material_online" id="student_material_online" cols="100" rows="10" class="form-control ckeditor">{!! old('student_material_online', $data->student_material_online) !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="about_heartsaver" class="col-md-2 control-label">About HeartSaver *</label>
                            <div class="col-md-8">
                                <textarea name="about_heartsaver" id="about_heartsaver" cols="100" rows="10" class="form-control ckeditor">{!! old('about_heartsaver', $data->about_heartsaver) !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="footer_sentence" class="col-md-2 control-label">Image *</label>
                            <div class="col-md-4">
                                <input type="file" name="program_image[]" maxlength="128" class="form-control" multiple/>
                                <input type="hidden" name="previous_image[]" value="{!! $data->program_image !!}"/>
                            </div>
                            <img height="100" width="150" src="{!! asset(uploadsDir().$data->program_image  ) !!}"/>
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
                window.location.href = "{!! URL::route('admin.programs.index') !!}";
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
