@extends('admin.layouts.app')

@section('content')

    @include('admin.layouts.partials.overview')
    <div class="container-fluid">

        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">

            @include('admin.partials.errors')

            <!-- BEGIN SAMPLE FORM card-->
                <div class="card box blue">

                    <div class="card-header">
                        <div class="caption">
                            <i class="fa fa-edit"></i> {{ $pageTitle }}
                        </div>
                    </div>

                    <div class="card-body">

                        <h4>&nbsp;</h4>

                        <form method="POST" action="{{ route('admin.news_articles.update', $records->id) }}" class="form-horizontal"
                            role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="news_image" class="col-md-2 control-label">Image *</label>
                                <div class="col-md-4">
                                    <input type="file" name="news_image" maxlength="128" class="form-control"/>
                                    <input type="hidden" name="previous_news_image" value="{!! $records->news_image !!}"/>
                                </div>
                                <img height="100" width="150" src="{!! asset(uploadsDir().$records->news_image) !!}"/>
                            </div>

                            <div class="form-group">
                                <label for="news_heading" class="col-md-2 control-label">Heading *</label>
                                <div class="col-md-8">
                                    <input type="text" name="news_heading" id="news_heading" maxlength="190"
                                        value="{{ old('news_heading', $records->news_heading) }}"
                                        class="form-control" required/>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="news_description" class="col-md-2 control-label">Description *</label>
                                <div class="col-md-12">
                                    <textarea name="news_description" class="form-control ckeditor">
                                        {!! old('news_description', $records->news_description) !!}
                                    </textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="is_featured" class="col-md-2 control-label">Is Featured</label>
                                <div>
                                    <input type="radio" name="is_featured" value="1" {{ old('is_featured',$records->is_featured) == '1' ? 'checked="checked"' : '' }}>Yes 
                                    <input type="radio" name="is_featured" value="0" {{ old('is_featured',$records->is_featured) == '0' ? 'checked="checked"' : '' }} style="margin-left: 10px;"> No
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="last_name" class="col-md-2 control-label">Status *</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="status" required>
                                        <option
                                            value="1" {{ old('status',$records->status) == '1' ? 'selected="selected"' : '' }}>
                                            Active
                                        </option>
                                        <option
                                            value="0" {{ old('status',$records->status) == '0' ? 'selected="selected"' : '' }}>
                                            Inactive
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{ $records->id }}">
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
                                    <input type="submit" class="btn btn-info" id="save" value="Save">
                                    <input type="button" class="btn black" onclick='window.location.href = "{!! URL::route('admin.news_articles.index') !!}"' name="cancel" id="cancel" value="Cancel">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- END SAMPLE FORM card-->
            </div>
        </div>
        <!-- END PAGE CONTENT-->

    </div>

@endsection