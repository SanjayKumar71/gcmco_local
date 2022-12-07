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

                        <form method="POST" action="{{ route('admin.home_content.update', $records->id) }}"
                            class="form-horizontal" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Banner Start -->
                            <div class="form-group">
                                <label for="banner" class="col-md-2 control-label">Banner</label>
                                <div class="col-md-4">
                                    <input type="file" name="banner" value="{{ old('banner', $records->banner) }}" class="form-control" multiple/>
                                    <input type="hidden" name="previous_banner" value="{{ $records->banner }}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="banner_sub_heading" class="col-md-2 control-label">Banner Sub Heading</label>
                                <div class="col-md-4">
                                    <input type="text" name="banner_sub_heading" maxlength="190" value="{{ old('banner_sub_heading', $records->banner_sub_heading) }}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="banner_heading" class="col-md-2 control-label">Banner Heading *</label>
                                <div class="col-md-4">
                                    <input type="text" name="banner_heading" maxlength="190" value="{{ old('banner_heading', $records->banner_heading) }}" class="form-control"/>
                                </div>
                            </div>
                            <!-- Banner End -->

                            <!-- Section One Start -->
                            <div class="form-group">
                                <label for="section_one_image" class="col-md-2 control-label">Section One Image</label>
                                <div class="col-md-4">
                                    <input type="file" name="section_one_image" value="{{ old('section_one_image', $records->section_one_image) }}" class="form-control"/>
                                    <input type="hidden" name="previous_section_one_image" value="{{ $records->section_one_image }}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="section_one_sub_heading" class="col-md-2 control-label">Section One Sub Heading</label>
                                <div class="col-md-4">
                                    <input type="text" name="section_one_sub_heading" maxlength="190" value="{{ old('section_one_sub_heading', $records->section_one_sub_heading) }}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="section_one_heading" class="col-md-2 control-label">Section One Heading</label>
                                <div class="col-md-4">
                                    <input type="text" name="section_one_heading" maxlength="190" value="{{ old('section_one_heading', $records->section_one_heading) }}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="section_one_description" class="col-md-2 control-label">Section One Description</label>
                                <div class="col-md-6">
                                    <textarea name="section_one_description" id="section_one_description" cols="5" rows="5" class="form-control ckeditor">{{ old('section_one_description', $records->section_one_description) }}</textarea>
                                </div>
                            </div>
                            <!-- Section One End -->

                            <!-- Section Two Start -->
                            <div class="form-group">
                                <label for="section_two_heading" class="col-md-2 control-label">Section Two Heading</label>
                                <div class="col-md-4">
                                    <input type="text" name="section_two_heading" maxlength="190" value="{{ old('section_two_heading', $records->section_two_heading) }}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="section_two_description" class="col-md-2 control-label">Section Two Description</label>
                                <div class="col-md-6">
                                    <textarea name="section_two_description" cols="5" rows="5" class="form-control ckeditor">{{ old('section_two_description', $records->section_two_description) }}</textarea>
                                </div>
                            </div>
                            <!-- Section Two End -->

                            <!-- Section Three Start -->
                            <div class="form-group">
                                <label for="section_three_sub_heading" class="col-md-2 control-label">Section Three Sub Heading</label>
                                <div class="col-md-4">
                                    <input type="text" name="section_three_sub_heading" maxlength="190" value="{{ old('section_three_sub_heading', $records->section_three_sub_heading) }}" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="section_three_heading" class="col-md-2 control-label">Section Three Heading</label>
                                <div class="col-md-4">
                                    <input type="text" name="section_three_heading" maxlength="190" value="{{ old('section_three_heading', $records->section_three_heading) }}" class="form-control"/>
                                </div>
                            </div>
                            <!-- Section Three End -->

                            <!-- Section Four Start -->
                            <div class="form-group">
                                <label for="section_four_heading" class="col-md-2 control-label">Section Four Heading</label>
                                <div class="col-md-4">
                                    <input type="text" name="section_four_heading" maxlength="190" value="{{ old('section_four_heading', $records->section_four_heading) }}" class="form-control"/>
                                </div>
                            </div>
                            <!-- Section Four End -->

                            <!-- Section Five Start -->
                            <!-- Section Five End -->

                            <!-- Section Six Start -->
                            <!-- Section Six End -->

                            <!-- Section Seven Start -->
                            <!-- Section Seven End -->

                            <!-- Section Eight Start -->
                            <!-- Section Eight End -->

                            <!-- Section Nine Start -->
                            <!-- Section Nine End -->


                            <!-- ---------------------------------------------- -->

                            <!-- <div class="form-group">
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
                            </div> -->


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

    </div>
@endsection
