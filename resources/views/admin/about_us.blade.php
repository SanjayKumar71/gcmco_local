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
        {{ Breadcrumbs::render('admin.about_us.index') }}
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
                    @php
                        $id = '';
                        if(isset($records->id))
                            $id = $records->id;
                    @endphp
                    <form method="POST" action="{{ route('admin.about_us.update', $id ) }}"
                          class="form-horizontal" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="about_us_image" class="col-md-2 control-label">About Us Image </label>
                            <div class="col-md-4">
                                @if ($records->about_us_image != '')
                                    @if(file_exists(uploadsDir() . $records->about_us_image))
                                        <img src="{!! uploadsUrl($records->about_us_image) !!}" alt="" title="AboutUsImage" class="img-responsive"/>
                                        @else
                                        <img src="{{ asset('front_assets/img/'.$records->about_us_image) }}" alt="" title="AboutUsImage" class="img-responsive"/>
                                    @endif
                                    <br>
                                @endif
                                <input type="file" name="about_us_image" class="form-control"/>
                                <input type="hidden" name="previous_about_us_image" value="{{ $records->about_us_image }}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="about_us_description" class="col-md-2 control-label">About Us Description</label>
                            <div class="col-md-8">
                                <textarea name="about_us_description" id="about_us_description" cols="10" rows="20" class="form-control ckeditor">{{ old('about_us_description', $records->about_us_description) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="about_us_section_two_heading" class="col-md-2 control-label">About Us Section Two Heading</label>
                            <div class="col-md-8">
                                <textarea name="about_us_section_two_heading" id="about_us_section_two_heading" cols="10" rows="20" class="form-control ckeditor">{{ old('about_us_section_two_heading', $records->about_us_section_two_heading) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="section_two_image_one" class="col-md-2 control-label">Section Two Image One </label>
                            <div class="col-md-4">
                                @if ($records->section_two_image_one != '' && file_exists(uploadsDir() . $records->section_two_image_one))
                                    <img src="{!! uploadsUrl($records->section_two_image_one) !!}" alt="" title="AboutUsImage"
                                         class="img-responsive"/><br>
                                @endif
                                <input type="file" name="section_two_image_one" class="form-control"/>
                                <input type="hidden" name="previous_section_two_image_one" value="{{ $records->section_two_image_one }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="section_two_description_one" class="col-md-2 control-label">Section Two Description One</label>
                            <div class="col-md-8">
                                <textarea name="section_two_description_one" id="section_two_description_one" cols="10" rows="20" class="form-control ckeditor">{{ old('section_two_description_one', $records->section_two_description_one) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="section_two_image_two" class="col-md-2 control-label">Section Two Image Two </label>
                            <div class="col-md-4">
                                @if ($records->section_two_image_two != '' && file_exists(uploadsDir() . $records->section_two_image_two))
                                    <img src="{!! uploadsUrl($records->section_two_image_two) !!}" alt="" title="AboutUsImage"
                                         class="img-responsive"/><br>
                                @endif
                                <input type="file" name="section_two_image_two" class="form-control"/>
                                <input type="hidden" name="previous_section_two_image_two" value="{{ $records->section_two_image_two }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="section_two_description_two" class="col-md-2 control-label">Section Two Description Two</label>
                            <div class="col-md-8">
                                <textarea name="section_two_description_two" id="section_two_description_two" cols="10" rows="20" class="form-control ckeditor">{{ old('section_two_description_two', $records->section_two_description_two) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="why_choose_us" class="col-md-2 control-label">Why Choose Us</label>
                            <div class="col-md-8">
                                <textarea name="why_choose_us" id="why_choose_us" cols="10" rows="20" class="form-control ckeditor">{{ old('why_choose_us', $records->why_choose_us) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="in_house_psychiatrist" class="col-md-2 control-label">In House Psychiatrist</label>
                            <div class="col-md-4">
                                <input type="text" name="in_house_psychiatrist" maxlength="190"
                                       value="{{ old('in_house_psychiatrist', $records->in_house_psychiatrist) }}" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="experience" class="col-md-2 control-label">Years Experience</label>
                            <div class="col-md-4">
                                <input type="text" name="experience" maxlength="190"
                                       value="{{ old('experience', $records->experience) }}" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="session_per_year" class="col-md-2 control-label">Session Per Year</label>
                            <div class="col-md-4">
                                <input type="text" name="session_per_year" maxlength="190"
                                       value="{{ old('session_per_year', $records->session_per_year) }}" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="successful_therapy" class="col-md-2 control-label">Successful Therapy</label>
                            <div class="col-md-4">
                                <input type="text" name="successful_therapy" maxlength="190"
                                       value="{{ old('successful_therapy', $records->successful_therapy) }}" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="about_us_process_section_heading" class="col-md-2 control-label">About Us Process Section Heading</label>
                            <div class="col-md-8">
                                <textarea name="about_us_process_section_heading" id="about_us_process_section_heading" cols="10" rows="20" class="form-control ckeditor">{{ old('about_us_process_section_heading', $records->about_us_process_section_heading) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="about_us_process_section_slider_image" class="col-md-2 control-label">About Us Process Section Slider Image</label>
                            <div class="col-md-4">
                                @if ($records->about_us_process_section_slider_image != '' && file_exists(uploadsDir() . $records->about_us_process_section_slider_image))
                                    <img src="{!! uploadsUrl($records->about_us_process_section_slider_image) !!}" alt="" title=""
                                         class="img-responsive"/><br>
                                @endif
                                <input type="file" name="about_us_process_section_slider_image[]" class="form-control" multiple/>
                                <input type="hidden" name="previous_about_us_process_section_slider_image[]" value="{{ $records->about_us_process_section_slider_image }}"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="process_talk_to_me_first_description" class="col-md-2 control-label">Process Talk To Me First Description</label>
                            <div class="col-md-8">
                                <textarea name="process_talk_to_me_first_description" id="process_talk_to_me_first_description" cols="10" rows="20" class="form-control ckeditor">{{ old('process_talk_to_me_first_description', $records->process_talk_to_me_first_description) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="process_make_appointment_description" class="col-md-2 control-label">Process Make Appointment Description</label>
                            <div class="col-md-8">
                                <textarea name="process_make_appointment_description" id="process_make_appointment_description" cols="10" rows="20" class="form-control ckeditor">{{ old('process_make_appointment_description', $records->process_make_appointment_description) }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="process_came_to_visit_me_description" class="col-md-2 control-label">Process Came To Visit Me Description</label>
                            <div class="col-md-8">
                                <textarea name="process_came_to_visit_me_description" id="process_came_to_visit_me_description" cols="10" rows="20" class="form-control ckeditor">{{ old('process_came_to_visit_me_description', $records->process_came_to_visit_me_description) }}</textarea>
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
