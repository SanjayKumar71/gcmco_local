@extends('admin.layouts.app')

@section('content')

    @include('admin.layouts.partials.overview')
    <div class="container-fluid">

        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">

                @include('admin.partials.errors')

                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet box blue">

                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-search"></i> {{ $pageTitle }}
                        </div>
                    </div>

                    <div class="portlet-body">

                        <h4>&nbsp;</h4>

                        <div class="form-horizontal" role="form">

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Full Name</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ json_decode($data->donar_info)->name }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Email</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ json_decode($data->donar_info)->email }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Street</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">@if( isset( json_decode($data->donar_info)->address->line1 ) ) {{ json_decode($data->donar_info)->address->line1 }} @endif</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>City</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">@if( isset( json_decode($data->donar_info)->address->city ) ) {{ json_decode($data->donar_info)->address->city }} @endif</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>State</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">@if( isset( json_decode($data->donar_info)->address->state ) ) {{ json_decode($data->donar_info)->address->state }} @endif</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Country</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">@if( isset( json_decode($data->donar_info)->address->country ) ) {{ json_decode($data->donar_info)->address->country }} @endif</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Campaign</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $data->getCampaign->title }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Donation Type</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $data->donation_type }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Amount</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">{{ $data->amount }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label"><strong>Description</strong> </label>
                                <div class="col-md-8">
                                    <label class="control-label">@if( isset( son_decode($data->donar_info)->description ) ) {{ json_decode($data->donar_info)->description }} @endif</label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-10">
                                    <button class="btn black" id="cancel" onclick='window.location.href = "{!! URL::route('admin.transactions.index') !!}"'> < Back..</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
        </div>
        <!-- END PAGE CONTENT-->

    </div>
@endsection
