@extends('admin.layouts.app')

@section('css')

    <link rel="stylesheet" type="text/css" href="{!! URL::to('assets/admin/plugins/select2/select2.css') !!}"/>
    <link rel="stylesheet" type="text/css" href="{!! URL::to('assets/admin/plugins/select2/select2-metronic.css') !!}"/>
    <link rel="stylesheet" href="{!! URL::to('assets/admin/plugins/data-tables/DT_bootstrap.css') !!}"/>

@stop

@section('content')
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->
            <h3 class="page-title">{{ $pageTitle }} <small></small></h3>
        {{ Breadcrumbs::render('admin.home_section_three.index') }}
        <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">
            <!-- Action buttons Code Start -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Add New Button Code Moved Here -->
                    <div class="table-toolbar pull-right">
                        <div class="btn-group">
                            <a href="{!! URL::route('admin.home_section_three.create') !!}" id="sample_editable_1_new"
                               class="btn blue">
                                Add <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Add New Button Code Moved Here -->
                </div>
            </div>
            <!-- Action buttons Code End -->

        @include('admin.partials.errors')

        <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box blue">

                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-th"></i> {{ $pageTitle }}
                    </div>
                </div>

                <div class="portlet-body">

                    <table class="table table-striped table-bordered table-hover" id="home_section_three_table">
                        <thead>
                        <tr>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created Ago</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($records as $key => $record)
                            <tr class="odd gradeX">
                                <td>
                                    @if($record->icon == 'q1-1.png')
                                        <figure><img width="50px;" height="50px;" style="background-color:#4b8df8;" src="{!! asset('front_assets/img/'.$record->icon) !!}" alt="icon"></figure>
                                        @else
                                            <figure><img width="50px;" height="50px;" style="background-color:#4b8df8;" src="{!! asset(uploadsDir().$record->icon) !!}" alt="icon"></figure>
                                    @endif
                                </td>
                                <td>{!! $record->title !!}</td>
                                <td>{!! $record->description !!}</td>
                                <td>{!! $record->created_at !!}</td>
                                <td class="center text-center" width="10%">
                                    <a href="{!! URL::route('admin.home_section_three.show', $record->id) !!}" class="btn btn-xs blue"
                                       title="Show Record">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a class="btn btn-xs green"
                                       href="{!! URL::route('admin.home_section_three.edit', $record->id) !!}" title="Edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-xs red" data-toggle="modal" data-target="#confirmDelete"
                                       data-title="Delete Record" onclick="setRecordId({{ $record->id }})"
                                       title="Delete Record">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                    <form action="{!! URL::route('admin.home_section_three.destroy', $record->id) !!}" method="POST"
                                          id="deleteForm{!! $record->id !!}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    <!-- END PAGE CONTENT-->
@stop

@section('footer-js')
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/select2/select2.min.js') !!}"></script>
    <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/data-tables/jquery.dataTables.js') !!}"></script>
    <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/data-tables/DT_bootstrap.js') !!}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
    <script src="{!! URL::to('assets/admin/scripts/custom/blogs.js') !!}"></script>
    <script>
        $('#home_section_three_table').dataTable({
            "aLengthMenu": [
                [5, 15, 20, -1],
                [5, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "iDisplayLength": 5,
            "sPaginationType": "bootstrap",
            "oLanguage": {
                "sLengthMenu": "_MENU_ records",
                "oPaginate": {
                    "sPrevious": "Prev",
                    "sNext": "Next"
                }
            },
            "aoColumnDefs": [
                { 'bSortable': false, 'aTargets': [0] },
                { "bSearchable": false, "aTargets": [ 0 ] }
            ]
        });
        jQuery('#home_section_three_table_wrapper .dataTables_filter input').addClass("form-control input-medium input-inline"); // modify table search input
        jQuery('#home_section_three_table_wrapper .dataTables_length select').addClass("form-control input-xsmall"); // modify table per page dropdown

        jQuery(document).ready(function () {
            App.init();
            Admin.init();
            TableManaged.init();
        });
        var setRecordId = function (id) {
            jQuery(document).ready(function () {
                jQuery('#deleteButton').attr('onclick', 'document.getElementById(\'deleteForm' + id + '\').submit()')
            });
        };
    </script>
@stop
