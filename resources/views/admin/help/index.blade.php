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
            {{ Breadcrumbs::render('admin.help.index') }}
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

                    <form method="POST" action="{{ route('admin.help.update', $records->id) }}"
                          class="form-horizontal" role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title" class="col-md-2 control-label">title *</label>
                            <div class="col-md-4">
                                <input type="text" name="title" maxlength="190"
                                       value="{{ old('heading', $records->title) }}" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-md-2 control-label">description *</label>
                            <div class="col-md-4">
                                <input type="text" name="description" value="{{ old('sub_heading', $records->description) }}"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image_one" class="col-md-2 control-label">image one </label>
                            <div class="col-md-4">
                                @if ($records->image_one != '' && file_exists(uploadsDir() . $records->image_one))
                                    <img src="{!! uploadsUrl($records->image_one) !!}" alt="" title="image_one"
                                         class="img-responsive"/><br>
                                @endif
                                <input type="file" name="image_one" class="form-control"/>
                                <input type="hidden" name="previous_image_one" value="{{ $records->image_one }}"/>
                                <small><em>
                                        <strong>Recommended width:</strong> up to 150 pixels<br/>
                                        <strong>Recommended height:</strong> 60-80 pixels
                                    </em></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image_two" class="col-md-2 control-label">image two </label>
                            <div class="col-md-4">
                                @if ($records->image_two != '' && file_exists(uploadsDir() . $records->image_two))
                                    <img src="{!! uploadsUrl($records->image_two) !!}" alt="" title="image_two"
                                         class="img-responsive"/><br>
                                @endif
                                <input type="file" name="image_two" class="form-control"/>
                                <input type="hidden" name="previous_image_two" value="{{ $records->image_two }}"/>
                                <small><em>
                                        <strong>Recommended width:</strong> up to 150 pixels<br/>
                                        <strong>Recommended height:</strong> 60-80 pixels
                                    </em></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="image_three" class="col-md-2 control-label">image three </label>
                            <div class="col-md-4">
                                @if ($records->image_three != '' && file_exists(uploadsDir() . $records->image_three))
                                    <img src="{!! uploadsUrl($records->image_three) !!}" alt="" title="image_three"
                                         class="img-responsive"/><br>
                                @endif
                                <input type="file" name="image_three" class="form-control"/>
                                <input type="hidden" name="previous_image_three" value="{{ $records->image_three }}"/>
                                <small><em>
                                        <strong>Recommended width:</strong> up to 150 pixels<br/>
                                        <strong>Recommended height:</strong> 60-80 pixels
                                    </em></small>
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
