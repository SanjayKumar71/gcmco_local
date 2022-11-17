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
        {{ Breadcrumbs::render('admin.bookings.index') }}
        <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
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

                <table class="table table-striped table-bordered table-hover" id="bookings_table">
                    <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Program</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                        <th>Created Ago</th>
                        <th width="10%" class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($records as $key => $record)
                            <tr class="odd gradeX">
                                <td>{!! $record->getUsers->first_name !!} {!! $record->getUsers->last_name !!}</td>
                                <td>{!! $record->getUsers->email !!}</td>
                                <td>{!! $record->getUsers->contact_number !!}</td>
                                <td>{!! $record->getProgramSession->programs->title !!}</td>
                                <td>{!! $record->getProgramSession->date !!}</td>
                                <td>{!! $record->getProgramSession->start_time !!} - {!! $record->getProgramSession->end_time !!}</td>
                                <td>
                                    @if($record->status == 1)
                                        <span class="label label-primary">Active</span>
                                        @elseif($record->status == 2)
                                            <span class="label label-danger">Cancelled</span>
                                    @endif
                                </td>
                                <td>{!! $record->created_at->diffForHumans(); !!}</td>
                                <td class="center text-center" width="10%">
                                    <a class="btn btn-xs red" data-toggle="modal" data-target="#confirmDelete"
                                    data-title="Delete Record" onclick="setRecordId({{ $record->id }})"
                                    title="Delete Record">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                    <form action="{!! URL::route('admin.bookings.destroy', $record->id) !!}"
                                        method="POST"
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
    <script src="{!! URL::to('assets/admin/scripts/custom/booking_queries.js') !!}"></script>
    <script>
        $('#bookings_table').dataTable({
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
        jQuery('#bookings_table_wrapper .dataTables_filter input').addClass("form-control input-medium input-inline"); // modify table search input
        jQuery('#bookings_table_wrapper .dataTables_length select').addClass("form-control input-xsmall"); // modify table per page dropdown

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
