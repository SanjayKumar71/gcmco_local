@extends('admin.layouts.app')

@section('content')

    @include('admin.layouts.partials.overview')
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">

                <!-- Action buttons Code Start -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- Add New Button Code Moved Here -->
                        <div class="table-toolbar pull-right">
                            <div class="btn-group">
                                <a href="{!! URL::route('admin.donation_amount.create') !!}" id="sample_editable_1_new"
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
                        <table class="table table-striped table-bordered table-hover" id="donation_amount_table">
                            <thead>
                            <tr>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Created Ago</th>
                                <th width="10%" class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $key => $record)
                                    <tr class="odd gradeX">
                                        <td>{!! $record->amount !!}</td>
                                        <td>
                                            @if($record->status == 1)
                                                <span class="label label-primary">Active</span>
                                                @else
                                                <span class="label label-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{!! $record->created_at->diffForHumans(); !!}</td>
                                        <td class="center text-center" width="16%">
                                            <a href="{!! URL::route('admin.donation_amount.show', $record->id) !!}" class="btn btn-xs blue"
                                            title="Show Record">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <a class="btn btn-xs green"
                                            href="{!! URL::route('admin.donation_amount.edit', $record->id) !!}" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <!-- <button onclick=" location.href = '{{ route("admin.donation_amount.destroy", $record->id) }}' ">My Button</button> -->
                                            <a class="btn btn-xs red" onclick="globalDelete('{{ route("admin.donation_amount.destroy", $record->id) }}')">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
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

    </div>
@endsection
