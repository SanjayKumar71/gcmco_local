@extends('admin.layouts.app')

@section('content')
    @include('admin.layouts.partials.overview')
    <div class="container-fluid">
        <div class="row ">
            <div class="col-12 col-lg-4 col-xl">
                <!-- Value  -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">
                                <!-- Title -->
                                <h6 class="text-uppercase text-muted mb-2">
                                    Jobs
                                </h6>
                                <!-- Heading -->
                                <span class="h2 mb-0">
                              ${{ 0 }}
                    </span>
                                <!-- Badge -->
                                <span class="badge bg-success-soft mt-n1">
                      +3.5%
                    </span>
                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-4 col-xl">

                <!-- Hours -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">
                                <h6 class="text-uppercase text-muted mb-2">
                                    Customer
                                </h6>
                                <span class="h2 mb-0">
                                  {{ 0 }}
                                </span>
                            </div>

                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-briefcase text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl">

                <!-- Hours -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="text-uppercase text-muted mb-2">
                                    Users
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                                  {{ 0 }}
                                </span>

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-briefcase text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <!-- Value  -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">
                                <!-- Title -->
                                <h6 class="text-uppercase text-muted mb-2">
                                    Weekly
                                </h6>
                                <!-- Heading -->
                                <span class="h2 mb-0">
                                  ${{ 0 }}
                                </span>
                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>

            </div>
            <div class="col-md-4">

                <!-- Hours -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">

                                <!-- Title -->
                                <h6 class="text-uppercase text-muted mb-2">
                                    Monthly
                                </h6>

                                <!-- Heading -->
                                <span class="h2 mb-0">
                                  ${{ 0 }}
                                </span>
                            </div>
                            <div class="col-auto">
                                <!-- Icon -->
                                <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Value  -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center gx-0">
                            <div class="col">
                                <!-- Title -->
                                <h6 class="text-uppercase text-muted mb-2">
                                    Yearly
                                </h6>
                                <!-- Heading -->
                                <span class="h2 mb-0">
                              ${{0}}
                                 </span>
                                <!-- Badge -->

                            </div>
                            <div class="col-auto">

                                <!-- Icon -->
                                <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
            <!-- / .row -->

            <div class="col-12">

                <!-- Goals -->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">

                                <!-- Title -->
                                <h4 class="card-header-title">
                                    Jobs
                                </h4>

                            </div>

                        </div> <!-- / .row -->
                    </div>
                    <div class="table-responsive mb-0" data-list="{&quot;valueNames&quot;: [&quot;goal-project&quot;, &quot;goal-status&quot;, &quot;goal-progress&quot;, &quot;goal-date&quot;]}">
                        <table class="table table-sm table-nowrap card-table">
                            <thead>
                            <tr>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-user">
                                        User
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-fixer">
                                        Fixer
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-jobType">
                                        Job Type
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-status">
                                        Status
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-progress">
                                        Payment Status
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="goal-date">
                                        Date/Time
                                    </a>
                                </th>
                                <th class="text-end">
                                    Action
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody class="list">
{{--                            @foreach($jobs as $k=>$v)--}}
{{--                                <tr>--}}
{{--                                    <td class="goal-user">--}}
{{--                                        <a href="{{ route('admin.user.show', $v->id) }}">--}}
{{--                                            {{ (!empty($v->user))? $v->user->first_name.' '.$v->user->last_name : 'none' }}--}}
{{--                                        </a>--}}
{{--                                    </td>--}}
{{--                                    <td class="goal-fixer">--}}
{{--                                        <a href="{{ route('admin.fixer.show', $v->id) }}">--}}
{{--                                            {{ (!empty($v->fixer))? $v->fixer->first_name.' '.$v->fixer->last_name : 'none' }}--}}
{{--                                        </a>--}}
{{--                                    </td>--}}
{{--                                    <td class="goal-jobType">--}}
{{--                                        {{ (!empty($v->jobType))? $v->jobType->name : 'none' }}--}}
{{--                                    </td>--}}
{{--                                    <td class="goal-status">--}}
{{--                                        @if($v->status == "PENDING")--}}
{{--                                            <span class="text-dark">●</span>--}}
{{--                                        @elseif($v->status == "CANCELED")--}}
{{--                                            <span class="text-danger">●</span>--}}
{{--                                        @elseif($v->status == "ONGOING")--}}
{{--                                            <span class="text-primary">●</span>--}}
{{--                                        @elseif($v->status == "STARTED")--}}
{{--                                            <span class="text-success">●</span>--}}
{{--                                        @elseif($v->status == "END")--}}
{{--                                            <span class="text-secondary">●</span>--}}
{{--                                        @elseif($v->status == "APPROVED")--}}
{{--                                            <span class="text-black">●</span>--}}
{{--                                        @endif--}}
{{--                                        {{ $v->status }}--}}
{{--                                    </td>--}}
{{--                                    <td class="goal-progress">--}}
{{--                                        @if($v->status == "PAID")--}}
{{--                                            <span class="text-success">●</span>--}}
{{--                                        @elseif($v->status == "UNPAID")--}}
{{--                                            <span class="text-dark">●</span>--}}
{{--                                        @endif--}}
{{--                                        {{ $v->amount_status }}--}}
{{--                                    </td>--}}
{{--                                    <td class="goal-date">--}}
{{--                                        <time datetime="2018-10-24">--}}
{{--                                            {{ date('Y-m-d',strtotime($v->date)) }} | {{ date('H:i A',strtotime($v->time)) }}--}}
{{--                                        </time>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-end">--}}
{{--                                        <a href="{{ route('admin.jobs.show', $v->id) }}" class="btn btn-success btn-sm small">--}}
{{--                                            <i class="fe fe-eye"></i>--}}
{{--                                        </a>--}}
{{--                                    </td>--}}
{{--                                    <td class="text-end">--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

