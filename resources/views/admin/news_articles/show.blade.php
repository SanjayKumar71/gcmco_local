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
                            <i class="fa fa-search"></i> {{ $pageTitle }}
                        </div>
                    </div>

                    <div class="card-body">

                        <h4>&nbsp;</h4>

                        <div class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Image:</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label"><img height="150" width="150" src="{!! asset(uploadsDir().$records->news_image) !!}"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Heading</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $records->news_heading }}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Description</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{!! $records->news_description !!}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Featured</strong> </label>
                                <div class="col-md-8">
                                    <label
                                        class="control-label">{{ !empty($records->is_featured == 1) ? 'Yes' : 'No' }}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Status</strong> </label>
                                <div class="col-md-8">
                                    <label
                                        class="control-label">{{ !empty($records->status == 1) ? 'Active' : 'Inactive' }}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
                                    <button class="btn black" id="cancel" onclick='window.location.href = "{!! URL::route('admin.news_articles.index') !!}"'> < Back..</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END SAMPLE FORM card-->

            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>

@endsection