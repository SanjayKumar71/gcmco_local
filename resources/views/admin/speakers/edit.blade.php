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

                        <form method="POST" action="{{ route('admin.speakers.update', $records->id) }}" class="form-horizontal"
                            role="form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="first_name" class="col-md-2 control-label">First Name *</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" id="first_name" maxlength="190"
                                        value="{{ old('first_name', $records->first_name) }}"
                                        class="form-control" required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="last_name" class="col-md-2 control-label">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_name" id="last_name" maxlength="190"
                                        value="{{ old('last_name', $records->last_name) }}"
                                        class="form-control"/>
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
                                    <input type="button" class="btn black" onclick='window.location.href = "{!! URL::route('admin.speakers.index') !!}"' name="cancel" id="cancel" value="Cancel">
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