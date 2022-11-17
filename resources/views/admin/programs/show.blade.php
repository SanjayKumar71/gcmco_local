@extends('admin.layouts.app')

@section('content')
<!-- BEGIN PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
        {{ Breadcrumbs::render('admin.programs.show', $data) }}
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
                        <label class="col-md-2 control-label"><strong>Title</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->title }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Sub Title</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->sub_title }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Third Sub Title</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->third_sub_title }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Category</strong> </label>
                        <div class="col-md-8">
                        @php
                            $cats = \App\Models\Category::get();
                        @endphp
                        @if(isset($cats) && $cats != '')
                            @foreach($cats as $cat)
                                <label class="control-label">{{ ($data->category_id == $cat->id) ? $cat->title : '' }}</label>
                            @endforeach
                        @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Price</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->price }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Off In Percent</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->off_in_percent }}%</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Program Type</strong> </label>
                        <div class="col-md-8">
                        <select name="program_type" id="program_type" class="form-control" disabled>
                            <option value="0"> Select Program Type</option>
                            @php
                                $program_types = \App\Models\ProgramType::get();
                            @endphp
                            @if(isset($program_types) && $program_types != '')
                                @foreach($program_types as $program_type)
                                    <option value="{{ $program_type->id }}" {{$data->program_id == $program_type->id  ? 'selected' : ''}}> {{ $program_type->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Description</strong> </label>
                        <div class="col-md-8">
                            <textarea name="description" class="form-control ckeditor" maxlength="65000">{{ $data->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>About Training</strong> </label>
                        <div class="col-md-8">
                            <textarea name="about_traning" class="form-control ckeditor" maxlength="65000">{{ $data->about_traning }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Schedule Heading</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->schedule_heading }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Schedule Note</strong> </label>
                        <div class="col-md-8">
                            <label class="control-label">{{ $data->schedule_note }}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Learning Objective</strong> </label>
                        <div class="col-md-8">
                            <textarea name="learning_objective" class="form-control ckeditor" maxlength="65000">{{ $data->learning_objective }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Course Features</strong> </label>
                        <div class="col-md-8">
                            <textarea name="course_features" class="form-control ckeditor" maxlength="65000">{{ $data->course_features }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Student Material Class Room</strong> </label>
                        <div class="col-md-8">
                            <textarea name="student_material_classroom" class="form-control ckeditor" maxlength="65000">{{ $data->student_material_classroom }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>Student Material Online</strong> </label>
                        <div class="col-md-8">
                            <textarea name="student_material_online" class="form-control ckeditor" maxlength="65000">{{ $data->student_material_online }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"><strong>About HeartSaver</strong> </label>
                        <div class="col-md-8">
                            <textarea name="about_heartsaver" class="form-control ckeditor" maxlength="65000">{{ $data->about_heartsaver }}</textarea>
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
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10"></div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <button class="btn black" id="cancel" onclick='window.location.href = "{!! URL::route('admin.programs.index') !!}"'> < Back..</button>
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
