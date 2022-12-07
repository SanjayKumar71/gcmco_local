@extends('admin.layouts.app')

@section('content')

    @include('admin.layouts.partials.overview')
    <div class="container-fluid">

        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <!-- Action buttons Code End -->

            @include('admin.partials.errors')

            <!-- BEGIN EXAMPLE TABLE card-->
            <div class="card box blue">

                    <div class="card-header">
                        <div class="caption">
                            <i class="fa fa-th"></i> {{ $pageTitle }}
                        </div>
                    </div>

                    <div class="card-body">

                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Created Ago</th>
                                <th width="15%" class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($records as $key => $record)
                                <tr class="odd gradeX">
                                    <td>{!! $record->first_name !!}</td>
                                    <td>{!! $record->last_name !!}</td>
                                    <td>{!! $record->email !!}</td>
                                    <td>{!! $record->phone !!}</td>
                                    <td>{!! $record->created_at->diffForHumans(); !!}</td>
                                    
                                    <td class="center text-center" width="15%">
                                        <a href="{!! URL::route('admin.contact_queries.show', $record->id) !!}" class="btn btn-xs blue"
                                            title="Show Record">
                                                <i class="fa fa-search"></i>
                                        </a>

                                        <a class="btn btn-xs red" data-toggle="modal" data-target="#confirmDelete"
                                        data-title="Delete Record" onclick="setRecordId({{ $record->id }})"
                                        title="Delete Record">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                        <form action="{!! URL::route('admin.contact_queries.destroy', $record->id) !!}"
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
            <!-- END EXAMPLE TABLE card-->
            
        </div>
        <!-- END PAGE CONTENT-->

    </div>
@endsection