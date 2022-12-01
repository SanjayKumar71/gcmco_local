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
                                <a href="{!! URL::route('admin.transactions.create') !!}" id="sample_editable_1_new"
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
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Campaign</th>
                                <th>Amount</th>
                                <th>Created Ago</th>
                                <th width="16%" class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($records as $key => $record)
                                <tr class="odd gradeX">
                                    <td>{!! json_decode($record->donar_info)->name !!}</td>
                                    <td>{!! json_decode($record->donar_info)->email !!}</td>
                                    <td>{!! $record->getCampaign->title !!}</td>
                                    <td>{!! $record->amount !!}</td>
                                    <td>{!! $record->created_at->diffForHumans(); !!}</td>
                                    <td class="center text-center" width="16%">
                                        <a href="{!! URL::route('admin.transactions.show', $record->id) !!}" class="btn btn-xs blue"
                                        title="Show Record">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        
                                        <a class="btn btn-xs red" onclick="globalDelete('{{ route("admin.transactions.destroy", $record->id) }}')">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE card-->

            </div>
        </div>
        <!-- END PAGE CONTENT-->

    </div>
@endsection