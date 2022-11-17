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
        {{ Breadcrumbs::render('admin.user_documents.index') }}
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
                            <a href="{!! URL::route('admin.user_documents.create') !!}" id="sample_editable_1_new"
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

                    <table class="table table-striped table-bordered table-hover" id="user_documents_table">
                        <thead>
                        <tr>
                            <th>User Name</th>
                            <th class="thumb">Thumb</th>
                            <th class="Name">Name</th>
                            <th class="Date">Date</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($records as $key => $record)
                            @php
                                $fileThumb = '';
                                $ext       = explode(".", $record->file);
                            @endphp
                            <tr class="odd gradeX">
                                <td>{!! $record->user->first_name.' '.$record->user->last_name !!}</td>
                                <td>
                                    @if($ext[1] == 'txt')
                                        <img src="{{ asset('front_assets/img/txt.png') }}" alt="" class="img-fluid" style="width:40px;height:40px;">
                                        @elseif($ext[1] == 'pdf')
                                            <img src="{{ asset('front_assets/img/pdf.png') }}" alt="" class="img-fluid" style="width:40px;height:40px;">
                                        @elseif($ext[1] == 'png')
                                            <img src="{{ asset('front_assets/img/png.png') }}" alt="" class="img-fluid" style="width:40px;height:40px;">
                                        @elseif($ext[1] == 'jpg' || $ext[1] == 'jpeg')
                                            <img src="{{ asset('front_assets/img/jpg.png') }}" alt="" class="img-fluid" style="width:40px;height:40px;">
                                        @elseif($ext[1] == 'ppt' || $ext[1] == 'pptx')
                                            <img src="{{ asset('front_assets/img/ppt.png') }}" alt="" class="img-fluid" style="width:40px;height:40px;">
                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                            <img src="{{ asset('front_assets/img/xls.png') }}" alt="" class="img-fluid" style="width:40px;height:40px;">
                                        @elseif($ext[1] == 'doc' || $ext[1] == 'docx')
                                            <img src="{{ asset('front_assets/img/doc.png') }}" alt="" class="img-fluid" style="width:40px;height:40px;">
                                    @endif
                                </td>
                                <td>
                                    {!! $record->file !!}
                                    <a href="{{ route('user.downloadFile', $record->id) }}" class="lnk">Download</a>
                                </td>
                                <td>{!! $record->created_at !!}</td>
                                <td class="center text-center" width="10%">
                                    <a class="btn btn-xs red" data-toggle="modal" data-target="#confirmDelete"
                                       data-title="Delete Record" onclick="setRecordId({{ $record->id }})"
                                       title="Delete Record">
                                        <i class="fa fa-trash-o"></i>
                                    </a>
                                    <form action="{!! URL::route('admin.user_documents.destroy', $record->id) !!}" method="POST"
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
    <script type="text/javascript"
            src="{!! URL::to('assets/admin/plugins/data-tables/jquery.dataTables.js') !!}"></script>
    <script type="text/javascript" src="{!! URL::to('assets/admin/plugins/data-tables/DT_bootstrap.js') !!}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{!! URL::to('assets/admin/scripts/core/app.js') !!}"></script>
    <script src="{!! URL::to('assets/admin/scripts/custom/blogs.js') !!}"></script>
    <script>
        $('#user_documents_table').dataTable({
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
        jQuery('#user_documents_table_wrapper .dataTables_filter input').addClass("form-control input-medium input-inline"); // modify table search input
        jQuery('#user_documents_table_wrapper .dataTables_length select').addClass("form-control input-xsmall"); // modify table per page dropdown

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
