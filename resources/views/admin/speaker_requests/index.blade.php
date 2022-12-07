@extends('admin.layouts.app')

@section('content')

    @include('admin.layouts.partials.overview')
    <div class="container-fluid">
        
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">

                @include('admin.partials.errors')

                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card box blue">

                    <div class="card-header">
                        <div class="caption">
                            <i class="fa fa-th"></i> {{ $pageTitle }}
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover" id="speaker_requests_table">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Speaker Name</th>
                                    <th>Church Name</th>
                                    <th>Speaking Date</th>
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
                                            @if(isset($record->getSpeaker->first_name) && $record->getSpeaker->first_name != '')
                                                {!! $record->getSpeaker->first_name !!}
                                            @endif
                                            @if(isset($record->getSpeaker->last_name) && $record->getSpeaker->last_name != '')
                                                {!! $record->getSpeaker->last_name !!}
                                            @endif
                                        </td>
                                        <td>{!! $record->church_name !!}</td>
                                        <td>{!! $record->speaking_date !!}</td>
                                        <td>
                                            @if($record->status == 1)
                                                <span class="label label-primary">Active</span>
                                            @else
                                                <span class="label label-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{!! $record->created_at->diffForHumans(); !!}</td>
                                        <td class="center text-center" width="18%">
                                            <a href="{!! URL::route('admin.speaker_requests.show', $record->id) !!}" class="btn btn-xs blue"
                                            title="Show Record">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <a class="btn btn-xs red" data-toggle="modal" data-target="#confirmDelete"
                                            data-title="Delete Record" onclick="globalDelete('{{ route("admin.speaker_requests.destroy", $record->id) }}')"
                                            title="Delete Record">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                            <!-- <form action="{!! URL::route('admin.speaker_requests.destroy', $record->id) !!}" method="POST"
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
