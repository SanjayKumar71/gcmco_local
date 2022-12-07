@extends('admin.layouts.app')

@section('content')

    @include('admin.layouts.partials.overview')
    <div class="container-fluid">

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

                        <form method="POST" action="{{ route('admin.who_we_are.update', $records->id) }}"
                            class="form-horizontal" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Banner Start -->
                                <div class="form-group">
                                    <label for="banner_image" class="col-md-2 control-label">Banner</label>
                                    <div class="col-md-4">
                                        @if ($records->banner_image != '' && file_exists(uploadsDir() . $records->banner_image))
                                            <img src="{!! uploadsUrl($records->banner_image) !!}" alt="" title="banner_image"
                                                class="img-responsive" width="200px"/><br>
                                        @endif
                                        <br/>
                                        <input type="file" name="banner_image" value="{{ old('banner_image', $records->banner_image) }}" 
                                            class="form-control"/>
                                        <input type="hidden" name="previous_banner_image" value="{{ $records->banner_image }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="banner_heading" class="col-md-2 control-label">Banner Heading *</label>
                                    <div class="col-md-4">
                                        <input type="text" name="banner_heading" maxlength="190" 
                                            value="{{ old('banner_heading', $records->banner_heading) }}" class="form-control"/>
                                    </div>
                                </div>
                            <!-- Banner End -->

                            <!-- Section One Start -->
                                <div class="form-group">
                                    <label for="section_one_heading" class="col-md-2 control-label">Section One Heading *</label>
                                    <div class="col-md-4">
                                        <input type="text" name="section_one_heading" maxlength="190" 
                                            value="{{ old('section_one_heading', $records->section_one_heading) }}" 
                                            class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="section_one_description" class="col-md-2 control-label">Section One Description</label>
                                    <div class="col-md-12">
                                        <textarea name="section_one_description" id="section_one_description" 
                                            class="form-control ckeditor">
                                            {{ old('section_one_description', $records->section_one_description) }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="section_one_image_one" class="col-md-2 control-label">Section One Image One</label>
                                    <div class="col-md-4">
                                        @if ($records->section_one_image_one != '' && file_exists(uploadsDir() . $records->section_one_image_one))
                                            <img src="{!! uploadsUrl($records->section_one_image_one) !!}" alt="" 
                                                title="section_one_image_one" class="img-responsive" width="200px"/><br>
                                        @endif
                                        <br/>
                                        <input type="file" name="section_one_image_one" 
                                            value="{{ old('section_one_image_one', $records->section_one_image_one) }}" 
                                            class="form-control" multiple/>
                                        <input type="hidden" name="previous_section_one_image_one" 
                                            value="{{ $records->section_one_image_one }}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="section_one_image_two" class="col-md-2 control-label">Section One Image Two</label>
                                    <div class="col-md-4">
                                        @if ($records->section_one_image_two != '' && file_exists(uploadsDir() . $records->section_one_image_two))
                                            <img src="{!! uploadsUrl($records->section_one_image_two) !!}" alt="" 
                                                title="section_one_image_two" class="img-responsive" width="200px"/><br>
                                        @endif
                                        <br/>
                                        <input type="file" name="section_one_image_two" 
                                            value="{{ old('section_one_image_two', $records->section_one_image_two) }}" 
                                            class="form-control" multiple/>
                                        <input type="hidden" name="previous_section_one_image_two" 
                                            value="{{ $records->section_one_image_two }}"/>
                                    </div>
                                </div>
                            <!-- Section One End -->

                            <!-- Section Two Start -->
                                <div class="form-group">
                                    <label for="section_two_heading" class="col-md-2 control-label">Section Two Heading *</label>
                                    <div class="col-md-4">
                                        <input type="text" name="section_two_heading" maxlength="190" 
                                            value="{{ old('section_two_heading', $records->section_two_heading) }}" 
                                            class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="section_two_description" class="col-md-2 control-label">Section Two Description</label>
                                    <div class="col-md-12">
                                        <textarea name="section_two_description" id="section_two_description" 
                                            class="form-control ckeditor">
                                            {{ old('section_two_description', $records->section_two_description) }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="section_two_image" class="col-md-2 control-label">Section Two Image</label>
                                    <div class="col-md-4">
                                        @if ($records->section_two_image != '' && file_exists(uploadsDir() . $records->section_two_image))
                                            <img src="{!! uploadsUrl($records->section_two_image) !!}" alt="" 
                                                title="section_two_image" class="img-responsive" width="200px"/><br>
                                        @endif
                                        <br/>
                                        <input type="file" name="section_two_image" 
                                            value="{{ old('section_two_image', $records->section_two_image) }}" 
                                            class="form-control" multiple/>
                                        <input type="hidden" name="previous_section_two_image" 
                                            value="{{ $records->section_two_image }}"/>
                                    </div>
                                </div>
                            <!-- Section Two End -->

                            <!-- Section Three Start -->
                                <div class="form-group">
                                    <label for="section_three_heading" class="col-md-2 control-label">Section Three Heading *</label>
                                    <div class="col-md-4">
                                        <input type="text" name="section_three_heading" maxlength="190" 
                                            value="{{ old('section_three_heading', $records->section_three_heading) }}" 
                                            class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="section_three_description" class="col-md-2 control-label">Section Three Description</label>
                                    <div class="col-md-12">
                                        <textarea name="section_three_description" id="section_three_description" 
                                            class="form-control ckeditor">
                                            {{ old('section_three_description', $records->section_three_description) }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="section_three_image" class="col-md-2 control-label">Section Three Image</label>
                                    <div class="col-md-4">
                                        @if ($records->section_three_image != '' && file_exists(uploadsDir() . $records->section_three_image))
                                            <img src="{!! uploadsUrl($records->section_three_image) !!}" alt="" 
                                                title="section_three_image" class="img-responsive" width="200px"/><br>
                                        @endif
                                        <br/>
                                        <input type="file" name="section_three_image" 
                                            value="{{ old('section_three_image', $records->section_three_image) }}" 
                                            class="form-control" multiple/>
                                        <input type="hidden" name="previous_section_three_image" 
                                            value="{{ $records->section_three_image }}"/>
                                    </div>
                                </div>
                            <!-- Section Three End -->

                            <!-- Section Four Start -->
                                <div class="form-group">
                                    <label for="section_four_sub_heading" class="col-md-2 control-label">Section Four Sub Heading *</label>
                                    <div class="col-md-4">
                                        <input type="text" name="section_four_sub_heading" maxlength="190" 
                                            value="{{ old('section_four_sub_heading', $records->section_four_sub_heading) }}" 
                                            class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="section_four_heading" class="col-md-2 control-label">Section Four Heading *</label>
                                    <div class="col-md-4">
                                        <input type="text" name="section_four_heading" maxlength="190" 
                                            value="{{ old('section_four_heading', $records->section_four_heading) }}" 
                                            class="form-control" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="section_four_image" class="col-md-2 control-label">Section Four Image</label>
                                    <div class="col-md-4">
                                        @if ($records->section_four_image != '' && file_exists(uploadsDir() . $records->section_four_image))
                                            <img src="{!! uploadsUrl($records->section_four_image) !!}" alt="" 
                                                title="section_four_image" class="img-responsive" width="200px"/><br>
                                        @endif
                                        <br/>
                                        <input type="file" name="section_four_image" 
                                            value="{{ old('section_four_image', $records->section_four_image) }}" 
                                            class="form-control" multiple/>
                                        <input type="hidden" name="previous_section_four_image" 
                                            value="{{ $records->section_four_image }}"/>
                                    </div>
                                </div>
                            <!-- Section Four End -->

                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
                                    <input type="submit" class="btn btn-info" id="save" value="Save">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
        </div>
        <!-- END PAGE CONTENT-->

    </div>
@endsection
