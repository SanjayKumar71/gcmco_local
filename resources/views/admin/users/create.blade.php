@extends('admin.layouts.app')

@section('content')
<!-- BEGIN PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">{{ $pageTitle ?? '' }} <small></small></h3>
        {{ Breadcrumbs::render('admin.users.create') }}
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
                    <i class="fa fa-create"></i> {{ $pageTitle ?? '' }}
                </div>
            </div>

            <div class="portlet-body">

                <h4>&nbsp;</h4>

                <form method="POST" action="{{ route('admin.users.store') }}" class="form-horizontal" role="form" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="first_name" class="col-md-2 control-label">First Name *</label>
                        <div class="col-md-4">
                            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" required />
                        </div>
                        <label for="last_name" class="col-md-2 control-label">Last Name</label>
                        <div class="col-md-4">
                            <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-2 control-label">Email *</label>
                        <div class="col-md-4">
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" required />
                        </div>
                        <label for="contact_number" class="col-md-2 control-label">Phone *</label>
                        <div class="col-md-4">
                            <input type="text" name="contact_number" value="{{ old('contact_number') }}" class="form-control" required />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-2 control-label">Password *</label>
                        <div class="col-md-4">
                            <input type="text" name="password" value="{{ old('password') }}" class="form-control" required />
                        </div>

                        <label for="status" class="col-md-2 control-label">Status *</label>
                        <div class="col-md-4">
                            <select class="form-control" name="status" required>
                                <option value=""> - Select - </option>
                                <option value="1" {{ old('status') == '1' ? 'selected="selected"' : '' }}>Active</option>
                                <option value="0" {{ old('status') == '0' ? 'selected="selected"' : '' }}>Inactive</option>
                            </select>
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
<script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
<script>
jQuery(document).ready(function() {
   // initiate layout and plugins
   App.init();
   Admin.init();
   $('#cancel').click(function() {
        window.location.href = "{!! URL::route('admin.users.index') !!}";
   });

});
</script>
@stop