@extends('admin.layouts.app')

@section('content')

    @include('admin.layouts.partials.overview')
    <div class="container-fluid">
        
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">

                <!-- Action buttons Code Start -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Add New Button Code Moved Here -->
                        <div class="table-toolbar pull-right">
                            <div class="btn-group">
                                <a href="{!! URL::route('admin.speakers.create') !!}" id="sample_editable_1_new"
                                class="btn btn-info">
                                    Add <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Add New Button Code Moved Here -->
                    </div>
                </div>
                <!-- Action buttons Code End -->
                <br/>
                @include('admin.partials.errors')

                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card box blue">

                    <div class="card-header">
                        <div class="caption">
                            <i class="fa fa-th"></i> {{ $pageTitle }}
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover" id="speakers_table">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Status</th>
                                    <th>Created Ago</th>
                                    <th width="18%" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $key => $record)
                                    <tr class="odd gradeX">
                                        <td>{!! $record->first_name !!}</td>
                                        <td>{!! $record->last_name !!}</td>
                                        <td>
                                            @if($record->status == 1)
                                                <span class="label label-primary">Active</span>
                                            @else
                                                <span class="label label-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{!! $record->created_at->diffForHumans(); !!}</td>
                                        <td class="center text-center" width="18%">
                                            <a href="{!! URL::route('admin.speakers.show', $record->id) !!}" class="btn btn-xs blue"
                                            title="Show Record">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <a class="btn btn-xs green"
                                            href="{!! URL::route('admin.speakers.edit', $record->id) !!}" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="btn btn-xs red" data-toggle="modal" data-target="#confirmDelete"
                                            data-title="Delete Record" onclick="globalDelete('{{ route("admin.speakers.destroy", $record->id) }}')"
                                            title="Delete Record">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                            <!-- <form action="{!! URL::route('admin.speakers.destroy', $record->id) !!}" method="POST"
                                                id="deleteForm{!! $record->id !!}">
                                                @csrf
                                                @method('DELETE')
                                            </form> -->
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

    </div>
@endsection
