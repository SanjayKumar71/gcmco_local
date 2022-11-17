@extends('admin.layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="header">
        <div class="container-fluid">

            <!-- Body -->
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">

                        <!-- Pretitle -->
                        <h6 class="header-pretitle">
                            Overview
                        </h6>

                        <!-- Title -->

                        @if(Breadcrumbs::render('admin.category.create'))
                            {{ Breadcrumbs::render('admin.category.create') }}
                        @else
                            <h1 class="header-title">
                                {{ $pageTitle }}
                            </h1>
                        @endif
                    </div>

                </div> <!-- / .row -->
            </div> <!-- / .header-body -->

        </div>
    </div> <!--  -->

    <div class="container-fluid">
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">

            @include('admin.partials.errors')

            <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet box blue">

                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-create"></i> {{ $pageTitle }}
                        </div>
                    </div>

                    <div class="portlet-body">

                        <h4>&nbsp;</h4>
                        <form method="POST" action="{{ route('admin.category.store') }}" class="form-horizontal" role="form"
                              enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="title" class="col-md-2 control-label">Title <span class="required">*</span></label>
                                <div class="col-md-4">
                                    <input type="text" name="title" id="title" maxlength="190" value="{{ old('title') }}" class="form-control" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="parent" class="col-md-2 control-label">Parent Category
                                </label>
                                <div class="col-md-4">
                                    <select name="parent" id="parent" class="form-control">
                                        <option value="0"> Select Parent Category</option>
                                        @php
                                            $cats = \App\Models\Category::get();
                                        @endphp
                                        @if(isset($cats) && $cats != '')
                                            @foreach($cats as $cat)
                                                <option value="{{ $cat->id }}"> {{ $cat->title }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-md-2 control-label">Status <span class="required">*</span>
                                </label>
                                <div class="col-md-4">
                                    <select name="status" id="status" required class="form-control">
                                        <option value="1"> Active</option>
                                        <option value="0"> Inactive</option>
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
    </div>

@endsection

@section('footer-js')
    <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/ckeditor/ckeditor.js') !!}"></script>
    <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
    <!-- <script src="./jquery.js"></script> -->
    <script src="{!! asset('assets/admin/scripts/custom/jquery.datetimepicker.full.js') !!}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
    <script>
        $('#start_time').datetimepicker({
            minDate: 0
        });

        $('#end_time').datetimepicker({
            onShow: function (ct) {
                this.setOptions({
                    minDate: jQuery('#start_time').val() ? jQuery('#start_time').val() : false
                })
            }
        });
        jQuery(document).ready(function () {

            // initiate layout and plugins
            App.init();
            Admin.init();
            $('#cancel').click(function () {
                window.location.href = "{!! URL::route('admin.category.index') !!}";
            });
        });


        $("#title").blur(function () {
            var value = $(this).val();
            $('#slug').val(slugify(value));
        }).blur();

        function slugify(text) {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-')           // Replace spaces with -
                .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                .replace(/^-+/, '')             // Trim - from start of text
                .replace(/-+$/, '');            // Trim - from end of text
        }
    </script>
    <script>
        $(function () {
            $(".select-tags").select2({
                placeholder: "Enter tags",
                tags: true,
                tokenSeparators: [',']
            });
        });
    </script>

@endsection
