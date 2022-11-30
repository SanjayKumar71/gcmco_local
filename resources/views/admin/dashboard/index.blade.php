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

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

