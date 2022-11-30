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

                        <form method="POST" action="{{ route('admin.campaigns.update', $records->id) }}" class="form-horizontal"
                            role="form" enctype="multipart/form-records">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title" class="col-md-2 control-label">Title *</label>
                                <div class="col-md-8">
                                    <input type="text" name="title" id="title" maxlength="190"
                                        value="{{ old('title', $records->title) }}"
                                        class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content" class="col-md-2 control-label">Description *</label>
                                <div class="col-md-8">
                                    <textarea name="description" class="form-control"
                                            maxlength="65000">{!! old('description', $records->description) !!}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="footer_sentence" class="col-md-2 control-label">Image *</label>
                                <div class="col-md-4">
                                    <input type="file" name="image" maxlength="128" class="form-control"/>
                                    <input type="hidden" name="previous_image" value="{!! $records->image !!}"/>
                                </div>
                                <img height="100" width="150" src="{!! asset(uploadsDir().$records->image) !!}"/>
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
                                    <input type="button" class="btn black" onclick='window.location.href = "{!! URL::route('admin.donation_types.index') !!}"' name="cancel" id="cancel" value="Cancel">
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