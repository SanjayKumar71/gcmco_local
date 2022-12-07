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

                        <form method="POST" action="{{ route('admin.statement_of_faith.update', $records->id) }}"
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
                                    <label for="description" class="col-md-2 control-label">Description</label>
                                    <div class="col-md-12">
                                        <textarea name="description" id="description" 
                                            class="form-control ckeditor">
                                            {{ old('description', $records->description) }}
                                        </textarea>
                                    </div>
                                </div>
                            <!-- Section One End -->

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
