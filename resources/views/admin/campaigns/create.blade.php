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
                            <i class="fa fa-create"></i> {{ $pageTitle }}
                        </div>
                    </div>

                    <div class="card-body">

                        <h4>&nbsp;</h4>
                        <form method="POST" action="{{ route('admin.campaigns.store') }}" class="form-horizontal" role="form"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="title" class="col-md-2 control-label">Title *</label>
                                <div class="col-md-4">
                                    <input type="text" name="title" id="title" maxlength="190" value="{{ old('title') }}"
                                        class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content"  class="col-md-2 control-label">Description *</label>
                                <div class="col-md-4">
                                    <textarea name="description" class="form-control" maxlength="65000" >{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="footer_sentence" class="col-md-2 control-label">Image *</label>
                                <div class="col-md-4">
                                    <input type="file" name="image" maxlength="128" class="form-control"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="is_featured" class="col-md-2 control-label">Is Featured</label>
                                <div>
                                    <input type="radio" name="is_featured" value="1">Yes 
                                    <input type="radio" name="is_featured" value="0"  style="margin-left: 10px;" checked> No
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="is_default" class="col-md-2 control-label">Is Default</label>
                                <div>
                                    <input type="radio" name="is_default" value="1">Yes
                                    <input type="radio" name="is_default" value="0"  style="margin-left: 10px;" checked> No
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="col-md-2 control-label">Status *</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="status" required>
                                        <option value="1"> Active </option>
                                        <option value="0" selected> Inactive </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
                                    <input type="submit" class="btn btn-info" id="save" value="Save">
                                    <input type="button" class="btn black" onclick='window.location.href = "{!! URL::route('admin.campaigns.index') !!}"' name="cancel" id="cancel" value="Cancel">
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
