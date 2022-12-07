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

                        <form method="POST" action="{{ route('admin.sponsors.update', $records->id) }}"
                            class="form-horizontal" role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Banner Start -->
                            <div class="form-group">
                                <label for="banner" class="col-md-2 control-label">Banner</label>
                                <div class="col-md-6">
                                    @if ($records->banner != '' && file_exists(uploadsDir() . $records->banner))
                                        <img src="{!! uploadsUrl($records->banner) !!}" alt="" title="banner"
                                            class="img-responsive" width="200px"/><br>
                                    @endif
                                    <br/>
                                    <input type="file" name="banner" value="{{ old('banner', $records->banner) }}" class="form-control" multiple/>
                                    <input type="hidden" name="previous_banner" value="{{ $records->banner }}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="banner_heading" class="col-md-2 control-label">Banner Heading *</label>
                                <div class="col-md-6">
                                    <input type="text" name="banner_heading" maxlength="190" value="{{ old('banner_heading', $records->banner_heading) }}" class="form-control"/>
                                </div>
                            </div>
                            <!-- Banner End -->

                            <!-- Page Content Start -->
                            <div class="form-group">
                                <label for="heading" class="col-md-2 control-label">Heading *</label>
                                <div class="col-md-6">
                                    <input type="text" name="heading" maxlength="190" value="{{ old('heading', $records->heading) }}" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sub_heading" class="col-md-2 control-label">Sub Heading *</label>
                                <div class="col-md-6">
                                    <input type="text" name="sub_heading" maxlength="190" value="{{ old('sub_heading', $records->sub_heading) }}" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-md-2 control-label">Image</label>
                                <div class="col-md-6">
                                    @if ($records->image != '' && file_exists(uploadsDir() . $records->image))
                                        <img src="{!! uploadsUrl($records->image) !!}" alt="" title="image"
                                            class="img-responsive" width="200px"/><br>
                                    @endif
                                    <br/>
                                    <input type="file" name="image" value="{{ old('image', $records->image) }}" class="form-control" multiple/>
                                    <input type="hidden" name="previous_image" value="{{ $records->image }}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-md-2 control-label">Description</label>
                                <div class="col-md-12">
                                    <textarea name="description" id="description" class="form-control ckeditor">{{ old('description', $records->description) }}</textarea>
                                </div>
                            </div>
                            <!-- Page Content End -->


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
